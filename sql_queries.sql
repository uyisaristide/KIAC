CREATE TABLE `somanet_db`.`drc_tokens` ( `id` INT NOT NULL AUTO_INCREMENT ,  `school_id` INT NOT NULL ,  `token` TEXT NOT NULL ,  `expires_at` DATETIME NOT NULL ,    PRIMARY KEY  (`id`),    UNIQUE  (`school_id`)) ENGINE = InnoDB;

ALTER TABLE `drc_tokens` CHANGE `expires_at` `expires_at` DATETIME NULL; 

ALTER TABLE `drc_tokens`  ADD `created_at` DATETIME NULL  AFTER `expires_at`,  ADD `updated_at` DATETIME NULL  AFTER `created_at`;

ALTER TABLE `schools` ADD `school_code` VARCHAR(255) NULL AFTER `name`; 

