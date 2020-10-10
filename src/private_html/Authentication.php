<?php

require_once(__DIR__ . '/Database.php');

// Both username & email are registered
define('USERNAME_EMAIL_ALREADY_REGISTERED', -23353);

define('EMAIL_ALREADY_REGISTERED', -3643);
define('USERNAME_ALREADY_REGISTERED', -46524);

// Either the username or email are registered
define('ACCOUNT_ALREADY_REGISTERED', -45356);
define('USERNAME_ILLEGAL', -45944);
define('EMAIL_ILLEGAL', -34625);
define('PASSWORD_ILLEGAL', -33636);

class Authenication {

    public function __construct() {

    }

    /*
     * Create an account
     * @param all parameters are strings except for is_admin which is a boolean
       and registration_date which is an INT
     * @return database's user id if account successfully registered, DATABASE_ERROR,
       USERNAME_EMAIL_ALREADY_REGISTERED, USERNAME_ALREADY_REGISTERED,
       EMAIL_ALREADY_REGISTERED, ACCOUNT_REGISTERED, USERNAME_ILLEGAL, EMAIL_ILLEGAL
     */
    public function create_account($username, $email, $password,
                                   $registration_date, $is_admin=FALSE) {

        if (!$this->is_username_legal($username)) {
            return USERNAME_ILLEGAL;
        }

        if (!$this->is_email_legal($email)) {
            return EMAIL_ILLEGAL;
        }

        if (!$this->is_password_legal($password)) {
            return PASSWORD_ILLEGAL;
        }

        // Check if username is available
        $availability = $this->account_availability($username, $email);
        if ($availability === TRUE) {
            return $this->insert_user($username, $email, $password,
                               $registration_date, $is_admin);
        }

        return $availability;

    }


    /* ------------------- [ HELPER FUNCTIONS ] ------------------- */


    /*
     * Checks if username is between 3-30 characters and has alphanumeric
     * characters only
     * @return TRUE if legal, FALSE if not
     */
    private function is_username_legal($username) {
        if (strlen($username) >= 3 && strlen($username) <= 30 &&
            !preg_match('/[^A-Za-z0-9]/', $username)
           ) {
            return TRUE;
        }

        return FALSE;
    }

    /*
     * Checks if the email is a valid email
     * @return TRUE if legal, FALSE if not
     */
    private function is_email_legal($email) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return TRUE;
        }

        return FALSE;

    }

    /*
     * Checks if password has at least 1 uppercase letter, at least 1 lowercase
     * letter, at lesat 1 digit and 1 special character and between 8-18
     * characters long
     */
    private function is_password_legal($password) {

        $pattern = '/^(?=.{8,18})(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+*!=]).*$/';

        if (preg_match($pattern,$password)) {

            return TRUE;
        }

        return FALSE;
    }

    /*
     * Checks if the username and email you provided isn't already a registered
     * account.
     * @return TRUE if account is available, DATABASE_ERROR,
       ACCOUNT_ALREADY_REGISTERED, USERNAME_ALREADY_REGISTERED,
       EMAIL_ALREADY_REGISTERED
     */
    private function account_availability($username, $email) {

        $username = strtolower($username);
        $email = strtolower($email);

        $sql = "SELECT LOWER(username) as username, LOWER(email) as email
                FROM users
                WHERE LOWER(username) = ?
                OR LOWER(email) = ?
                LIMIT 2";

        $vals = array($username, $email);

        $db = new Database();
        if ($db->has_error()) return DATABASE_ERROR;
        $results = $db->query($sql, $vals)->fetchAll();
        
        // Check if we found any accounts
        $is_username_available = TRUE;
        $is_email_available = TRUE;
        foreach ($results as $row) {
            if ($row['username'] == $username) {
                $is_username_available = FALSE;
            }

            if ($row['email'] == $email) {
                $is_email_available = FALSE;
            }
        }

        // Return error codes
        if (!$is_username_available && !$is_email_available) {
            return USERNAME_EMAIL_ALREADY_REGISTERED;
        }

        if (!$is_username_available) {
            return USERNAME_ALREADY_REGISTERED;
        }

        if (!$is_email_available) {
            return EMAIL_ALREADY_REGISTERED;
        }

        return TRUE;

    }

    private function hash_password($password) {

        return password_hash($password, PASSWORD_DEFAULT);

    }

    /*
     * Inserts a new account into the database
     * @return database user id or ACCOUNT_ALREADY_REGISTERED if either
     * username or email
     */
    private function insert_user($username, $email, $password,
                                 $registration_date, $is_admin) {

        $email = strtolower($email);
        $registration_date = date("Y-m-d H:i:s", $registration_date);
        $password = $this->hash_password($password);

        // Change is_admin to database values
        if ($is_admin === TRUE) {
            $is_admin = 'Y';
        } else {
            $is_admin = NULL;
        }

        $sql = "INSERT IGNORE INTO users (username, email, password,
                                          registration_date, is_admin)
                VALUES (?, ?, ?, ?, ?)";

        $vals = array($username, $email, $password, $registration_date,
                      $is_admin);

        $db = new Database();
        if ($db->has_error()) return DATABASE_ERROR;
        $rows_inserted = $db->query($sql, $vals)->affectedRows();
        if ($rows_inserted == 1) return $db->lastInsertID();
        return ACCOUNT_ALREADY_REGISTERED;
    }

}
