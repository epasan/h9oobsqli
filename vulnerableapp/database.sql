CREATE DATABASE IF NOT EXISTS proclive CHARACTER SET utf8;

use proclive;

CREATE TABLE IF NOT EXISTS viewers_user_agent(
    useragentsha256 VARCHAR(64) UNIQUE NOT NULL,
    useragent TEXT NOT NULL,
    counter INT UNSIGNED NOT NULL,
    couldBeABot VARCHAR(50)
) ENGINE = InnoDB DEFAULT CHARSET utf8;
