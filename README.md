

    1) composer install

    2) mysql command

CREATE TABLE user ( github_id int(11) UNSIGNED NOT NULL, github_login varchar(255) NOT NULL, PRIMARY KEY (github_id) ) ENGINE=InnoDB;

    3) Change DB params in config.php 
    4) Run in console php index.php
