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

CREATE TABLE movies (
    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    title               varchar(128)
                        NOT NULL,

    release_date        datetime
                        NOT NULL,

    description         varchar(1024)
                        NOT NULL,

    -- Views are used to find trending movies
    views               int
                        NOT NULL
);

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