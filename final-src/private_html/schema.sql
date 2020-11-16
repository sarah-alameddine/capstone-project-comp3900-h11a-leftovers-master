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

    is_admin            varchar(1),

    CONSTRAINT users_username_uq UNIQUE (username),
    CONSTRAINT users_email_uq UNIQUE (email)
);

CREATE TABLE movies (
    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    title               varchar(128)
                        collate utf8mb4_general_ci
                        NOT NULL,

    release_date        DATE
                        NOT NULL,

    description         varchar(1024)
                        NOT NULL,

    image_path          varchar(512)
                        NOT NULL,

    CONSTRAINT movies_title_release_date_uq UNIQUE (title, release_date)
);

CREATE TABLE directors (

    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    name                varchar(128)
                        NOT NULL,

    CONSTRAINT directors_name_uq UNIQUE (name)
);

CREATE TABLE movie_directors (
    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    movie_id            int
                        NOT NULL,
                        FOREIGN KEY (movie_id) REFERENCES movies(id),

    director_id         int
                        NOT NULL,
                        FOREIGN KEY (director_id) REFERENCES directors(id)
);

CREATE TABLE actors (

    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    name                varchar(128)
                        NOT NULL,

    CONSTRAINT actors_name_uq UNIQUE (name)

);

CREATE TABLE movie_cast (
    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    movie_id            int
                        NOT NULL,
                        FOREIGN KEY (movie_id) REFERENCES movies(id),

    actor_id            int
                        NOT NULL,
                        FOREIGN KEY (actor_id) REFERENCES actors(id)
);

CREATE TABLE genres (
    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    genre               varchar(64)
                        NOT NULL,

    CONSTRAINT genres_genre_uq UNIQUE (genre)
);

CREATE TABLE movie_genres (
    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    movie_id            int
                        NOT NULL,
                        FOREIGN KEY (movie_id) REFERENCES movies(id),

    genre_id            int
                        NOT NULL,
                        FOREIGN KEY (genre_id) REFERENCES genres(id)
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

    name                varchar(64)
                        NOT NULL,

    description         varchar(1024)
);

CREATE TABLE playlist_items (

    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    playlist_id         int
                        NOT NULL,
                        FOREIGN KEY (playlist_id) REFERENCES playlists(id),

    movie_id            int
                        NOT NULL,
                        FOREIGN KEY (movie_id) REFERENCES movies(id),

    CONSTRAINT playlist_items_playlist_id_movie_id_uq UNIQUE (playlist_id, movie_id)
);

CREATE TABLE reviews (

    movie_id            int
                        NOT NULL,
                        FOREIGN KEY (movie_id) REFERENCES movies(id),

    user_id             int
                        NOT NULL,
                        FOREIGN KEY (user_id) REFERENCES users(id),

    rating              int
                        NOT NULL,

    comment             varchar(512)
                        NOT NULL,

    post_date           datetime
                        NOT NULL,

    PRIMARY KEY (movie_id, user_id)
);

CREATE TABLE admin_movie_picks(
    movie_id            int
                        NOT NULL,
                        FOREIGN KEY (movie_id) REFERENCES movies(id),

    PRIMARY KEY (movie_id)
);

CREATE TABLE user_bans (

    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    user_id             int
                        NOT NULL,
                        FOREIGN KEY (user_id) REFERENCES users(id),

    banned_user_id      int
                        NOT NULL,
                        FOREIGN KEY (user_id) REFERENCES users(id),

    CONSTRAINT user_bans_user_idbanned_user_id_uq UNIQUE (user_id, banned_user_id)

);

CREATE TABLE editor_picks (
    id                  int
                        AUTO_INCREMENT
                        PRIMARY KEY,

    movie_id            int
                        NOT NULL,
                        FOREIGN KEY (movie_id) REFERENCES movies(id),

    CONSTRAINT editor_picks_movie_id_uq UNIQUE (movie_id)

);