DROP TABLE IF EXISTS admin_movie_picks;
DROP TABLE IF EXISTS reviews;
DROP TABLE IF EXISTS playlist_items;
DROP TABLE IF EXISTS playlists;
DROP TABLE IF EXISTS wishlist_items;
DROP TABLE IF EXISTS movies;
DROP TABLE IF EXISTS forgotten_passwords;
DROP TABLE IF EXISTS users;


CREATE TABLE users(
    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    username            varchar(30)
                        NOT NULL,

    email               varchar(256)
                        NOT NULL,

    password            varchar(255)
                        NOT NULL,

    registration_date   datetime
                        NOT NULL,

    bio                 varchar(1024),

    profile_pic         varchar(512),

    is_admin            varchar(1),

    CONSTRAINT users_username_uq UNIQUE (username),
    CONSTRAINT users_email_uq UNIQUE (email)
);

CREATE TABLE forgotten_passwords (

    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    user_id             int
                        NOT NULL,

    pin                 int
                        NOT NULL,

    attempts            int
                        NOT NULL,

    date_created        datetime
                        NOT NULL

);

CREATE TABLE movies (
    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    title               varchar(128)
                        NOT NULL,

    release_date        DATE
                        NOT NULL,

    description         varchar(1024)
                        NOT NULL,

    genre               varchar(64)
                        NOT NULL,

    director            varchar(64)
                        NOT NULL,

    image_path          varchar(512),

    -- Views are used to find trending movies
    views               int
                        NOT NULL
);

INSERT INTO movies (title, release_date, description, genre, director, views, image_path) VALUES
('Joker', '2019-10-04', 'In Gotham City, mentally troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: the Joker.',
'Crime', 'Todd Phillips', 0, '/movies/assets/posters/joker.jpg'),

('John Wick: Chapter 3 - Parabellum', '2019-05-17', 'John Wick is on the run after killing a member of the international assassins\' guild, and with a $14 million price tag on his head, he is the target of hit men and women everywhere.',
'Action', 'Chad Stahelski', 0, '/movies/assets/posters/john-wick-3.jpg'),

('John Wick', '2014-10-24', 'An ex-hit-man comes out of retirement to track down the gangsters that killed his dog and took everything from him.',
'Action', 'Chad Stahelski', 0, '/movies/assets/posters/john-wick.jpg'),

('The Avengers', '2012-05-04', 'Earth\'s mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.',
'Action', 'Joss Whedon', 0, '/movies/assets/posters/the-avengers.jpg'),

('Avengers: Infinity War', '2018-04-27', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.',
'Action', 'Anthony Russo', 0, '/movies/assets/posters/avengers-infinity-war.jpg'),

('Avengers: Endgame', '2019-10-26', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.',
'Action', 'Anthony Russo', 0, '/movies/assets/posters/avengers-endgame.jpg');

CREATE TABLE wishlist_items (
    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    movie_id            int
                        NOT NULL,
                        FOREIGN KEY (movie_id) REFERENCES movies(id),

    user_id             int
                        NOT NULL,
                        FOREIGN KEY (user_id) REFERENCES users(id),

    CONSTRAINT wishlist_items_user_id_movie_id_uq UNIQUE (user_id, movie_id)

);

CREATE TABLE playlists (
    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    user_id             int
                        NOT NULL,
                        FOREIGN KEY (user_id) REFERENCES users(id),

    description         varchar(1024)
                        NOT NULL
);

CREATE TABLE playlist_items (

    playlist_id         int
                        NOT NULL,
                        FOREIGN KEY (playlist_id) REFERENCES playlists(id),

    movie_id            int
                        NOT NULL,
                        FOREIGN KEY (movie_id) REFERENCES movies(id),

    PRIMARY KEY (playlist_id, movie_id)
);

CREATE TABLE reviews (

    movie_id            int
                        NOT NULL,
                        FOREIGN KEY (movie_id) REFERENCES movies(id),

    user_id             int
                        NOT NULL,
                        FOREIGN KEY (user_id) REFERENCES users(id),

    PRIMARY KEY (movie_id, user_id)
);

CREATE TABLE admin_movie_picks(
    movie_id            int
                        NOT NULL,
                        FOREIGN KEY (movie_id) REFERENCES movies(id),

    PRIMARY KEY (movie_id)
);
