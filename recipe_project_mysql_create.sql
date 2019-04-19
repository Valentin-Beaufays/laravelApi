CREATE TABLE `accounts` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`first_name` varchar(255) NOT NULL DEFAULT 'NULL',
	`surname` varchar(255) NOT NULL DEFAULT 'NULL',
	`email` varchar(255) NOT NULL DEFAULT 'NULL',
	`password` varchar(255) NOT NULL DEFAULT 'NULL',
	`created_at` DATETIME NOT NULL,
	`updated_at` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `recipes` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`title` varchar(255) NOT NULL,
	`account_id` bigint NOT NULL,
	`created_at` DATETIME NOT NULL,
	`updated_at` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `categories` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`account_id` bigint NOT NULL,
	`created_at` DATETIME NOT NULL,
	`updated_at` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `recipes_categories` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`recipe_id` bigint NOT NULL,
	`category_id` bigint NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `recipes_content` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`recipe_id` bigint NOT NULL,
	`position` int NOT NULL,
	`content` longtext,
	PRIMARY KEY (`id`)
);

CREATE TABLE `ingredients` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `recipes_ingredients` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`recipe_id` bigint NOT NULL,
	`ingredient_id` bigint NOT NULL,
	`quantity` int NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `recipes` ADD CONSTRAINT `recipes_fk0` FOREIGN KEY (`account_id`) REFERENCES `accounts`(`id`);

ALTER TABLE `categories` ADD CONSTRAINT `categories_fk0` FOREIGN KEY (`account_id`) REFERENCES `accounts`(`id`);

ALTER TABLE `recipes_categories` ADD CONSTRAINT `recipes_categories_fk0` FOREIGN KEY (`recipe_id`) REFERENCES `recipes_content`(`id`);

ALTER TABLE `recipes_categories` ADD CONSTRAINT `recipes_categories_fk1` FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`);

ALTER TABLE `recipes_content` ADD CONSTRAINT `recipes_content_fk0` FOREIGN KEY (`recipe_id`) REFERENCES `recipes`(`id`);

ALTER TABLE `recipes_ingredients` ADD CONSTRAINT `recipes_ingredients_fk0` FOREIGN KEY (`recipe_id`) REFERENCES `recipes`(`id`);

ALTER TABLE `recipes_ingredients` ADD CONSTRAINT `recipes_ingredients_fk1` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients`(`id`);

