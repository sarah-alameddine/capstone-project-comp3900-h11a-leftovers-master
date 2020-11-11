<?php

define('NO_REPLY_EMAIL', 'no-reply@filmfinity.me');

class Emailer {

    private $to;
    private $from;
    private $subject;
    private $message;

    public function __construct($to, $subject, $message, $from) {

        $this->set_to($to);
        $this->set_subject($subject);
        $this->set_message($message);
        $this->set_from($from);

    }

    public function send() {
        $headers = "From: " . $this->get_from() . "\r\n";
        mail($this->get_to(), $this->get_subject(), $this->get_message(), $headers);
    }

    public function set_to($to) {
        $this->to = $to;
    }

    public function set_from($from) {
        $this->from = $from;
    }

    public function set_subject($subject) {
        $this->subject = $subject;
    }

    public function set_message($message) {
        $this->message = $message;
    }

    public function get_to() {
        return $this->to;
    }

    public function get_from() {
        return $this->from;
    }

    public function get_subject() {
        return $this->subject;
    }

    public function get_message() {
        return $this->message;
    }
    
}