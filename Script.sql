-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema course_service
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema course_service
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `course_service` DEFAULT CHARACTER SET utf8mb4 ;
-- -----------------------------------------------------
-- Schema recommendation_service
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema recommendation_service
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `recommendation_service` DEFAULT CHARACTER SET utf8mb4 ;
-- -----------------------------------------------------
-- Schema user_service
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema user_service
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `user_service` DEFAULT CHARACTER SET utf8mb4 ;
USE `course_service` ;

-- -----------------------------------------------------
-- Table `course_service`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`categories` (
  `category_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_category` VARCHAR(255) NOT NULL,
  `user_id` INT(11) NOT NULL,
  PRIMARY KEY (`category_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`courses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`courses` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `lecturer` VARCHAR(255) NOT NULL,
  `timestamp` DATETIME NOT NULL,
  `number_of_chapters` INT(11) NOT NULL,
  `number_of_lessons` INT(11) NOT NULL,
  `time_to_complete` INT(11) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `number_of_feedbacks` INT(11) NOT NULL,
  `avg_stars` DECIMAL(2,2) NOT NULL,
  `cost` INT(11) NOT NULL,
  `saleoff` DECIMAL(2,2) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`categories_for_course`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`categories_for_course` (
  `category_id` BIGINT(20) UNSIGNED NOT NULL,
  `course_id` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`category_id`, `course_id`),
  INDEX `categories_for_course_course_id_foreign` (`course_id` ASC) VISIBLE,
  CONSTRAINT `categories_for_course_category_id_foreign`
    FOREIGN KEY (`category_id`)
    REFERENCES `course_service`.`categories` (`category_id`),
  CONSTRAINT `categories_for_course_course_id_foreign`
    FOREIGN KEY (`course_id`)
    REFERENCES `course_service`.`courses` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`majority`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`majority` (
  `majority_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_majority` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`majority_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`categories_for_majority`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`categories_for_majority` (
  `majority_id` BIGINT(20) UNSIGNED NOT NULL,
  `category_id` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`majority_id`, `category_id`),
  INDEX `categories_for_majority_category_id_foreign` (`category_id` ASC) VISIBLE,
  CONSTRAINT `categories_for_majority_category_id_foreign`
    FOREIGN KEY (`category_id`)
    REFERENCES `course_service`.`categories` (`category_id`),
  CONSTRAINT `categories_for_majority_majority_id_foreign`
    FOREIGN KEY (`majority_id`)
    REFERENCES `course_service`.`majority` (`majority_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`failed_jobs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`failed_jobs` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` VARCHAR(255) NOT NULL,
  `connection` TEXT NOT NULL,
  `queue` TEXT NOT NULL,
  `payload` LONGTEXT NOT NULL,
  `exception` LONGTEXT NOT NULL,
  `failed_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`),
  UNIQUE INDEX `failed_jobs_uuid_unique` (`uuid` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`lesson`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`lesson` (
  `lesson_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` BIGINT(20) UNSIGNED NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `chapter` INT(11) NOT NULL,
  `date_uploaded` DATE NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `vid_length` INT(11) NOT NULL,
  `document` VARCHAR(255) NOT NULL,
  `media` VARCHAR(255) NOT NULL,
  `lecturer_name` VARCHAR(255) NOT NULL,
  `stop_minute` INT(11) NOT NULL,
  PRIMARY KEY (`lesson_id`),
  INDEX `lesson_course_id_foreign` (`course_id` ASC) VISIBLE,
  CONSTRAINT `lesson_course_id_foreign`
    FOREIGN KEY (`course_id`)
    REFERENCES `course_service`.`courses` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`users` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`listings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`listings` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` BIGINT(20) UNSIGNED NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `logo` VARCHAR(255) NULL DEFAULT NULL,
  `tags` VARCHAR(255) NOT NULL,
  `company` VARCHAR(255) NOT NULL,
  `location` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `website` VARCHAR(255) NOT NULL,
  `description` LONGTEXT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `listings_user_id_foreign` (`user_id` ASC) VISIBLE,
  CONSTRAINT `listings_user_id_foreign`
    FOREIGN KEY (`user_id`)
    REFERENCES `course_service`.`users` (`id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`road_map`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`road_map` (
  `roadmap_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`roadmap_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`map_for_course`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`map_for_course` (
  `roadmap_id` BIGINT(20) UNSIGNED NOT NULL,
  `course_id` BIGINT(20) UNSIGNED NOT NULL,
  `stage` INT(11) NOT NULL,
  PRIMARY KEY (`roadmap_id`, `course_id`),
  INDEX `map_for_course_course_id_foreign` (`course_id` ASC) VISIBLE,
  CONSTRAINT `map_for_course_course_id_foreign`
    FOREIGN KEY (`course_id`)
    REFERENCES `course_service`.`courses` (`id`),
  CONSTRAINT `map_for_course_roadmap_id_foreign`
    FOREIGN KEY (`roadmap_id`)
    REFERENCES `course_service`.`road_map` (`roadmap_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`migrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 37
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`my_cart`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`my_cart` (
  `user_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`),
  INDEX `my_cart_course_id_foreign` (`course_id` ASC) VISIBLE,
  CONSTRAINT `my_cart_course_id_foreign`
    FOREIGN KEY (`course_id`)
    REFERENCES `course_service`.`courses` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`user` (
  `user_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`my_course`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`my_course` (
  `user_id` BIGINT(20) UNSIGNED NOT NULL,
  `course_id` BIGINT(20) UNSIGNED NOT NULL,
  `last_access` DATETIME NOT NULL,
  `progress` DECIMAL(3,1) NOT NULL,
  `latest_section` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`user_id`, `course_id`),
  INDEX `my_course_course_id_foreign` (`course_id` ASC) VISIBLE,
  CONSTRAINT `my_course_course_id_foreign`
    FOREIGN KEY (`course_id`)
    REFERENCES `course_service`.`courses` (`id`),
  CONSTRAINT `my_course_user_id_foreign`
    FOREIGN KEY (`user_id`)
    REFERENCES `course_service`.`user` (`user_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`password_reset_tokens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`password_reset_tokens` (
  `email` VARCHAR(255) NOT NULL,
  `token` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`email`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`personal_access_tokens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`personal_access_tokens` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` VARCHAR(255) NOT NULL,
  `tokenable_id` BIGINT(20) UNSIGNED NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `token` VARCHAR(64) NOT NULL,
  `abilities` TEXT NULL DEFAULT NULL,
  `last_used_at` TIMESTAMP NULL DEFAULT NULL,
  `expires_at` TIMESTAMP NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `personal_access_tokens_token_unique` (`token` ASC) VISIBLE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type` ASC, `tokenable_id` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`recommend_for`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`recommend_for` (
  `user_id` BIGINT(20) UNSIGNED NOT NULL,
  `course_id` BIGINT(20) UNSIGNED NOT NULL,
  `tag` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`user_id`, `course_id`),
  INDEX `recommend_for_course_id_foreign` (`course_id` ASC) VISIBLE,
  CONSTRAINT `recommend_for_course_id_foreign`
    FOREIGN KEY (`course_id`)
    REFERENCES `course_service`.`courses` (`id`),
  CONSTRAINT `recommend_for_user_id_foreign`
    FOREIGN KEY (`user_id`)
    REFERENCES `course_service`.`user` (`user_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `course_service`.`wish_list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course_service`.`wish_list` (
  `user_id` BIGINT(20) UNSIGNED NOT NULL,
  `course_id` BIGINT(20) UNSIGNED NOT NULL,
  `last_update` DATE NOT NULL,
  PRIMARY KEY (`user_id`, `course_id`),
  INDEX `wish_list_course_id_foreign` (`course_id` ASC) VISIBLE,
  CONSTRAINT `wish_list_course_id_foreign`
    FOREIGN KEY (`course_id`)
    REFERENCES `course_service`.`courses` (`id`),
  CONSTRAINT `wish_list_user_id_foreign`
    FOREIGN KEY (`user_id`)
    REFERENCES `course_service`.`user` (`user_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

USE `recommendation_service` ;

-- -----------------------------------------------------
-- Table `recommendation_service`.`cache`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recommendation_service`.`cache` (
  `key` VARCHAR(255) NOT NULL,
  `value` MEDIUMTEXT NOT NULL,
  `expiration` INT(11) NOT NULL,
  PRIMARY KEY (`key`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `recommendation_service`.`cache_locks`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recommendation_service`.`cache_locks` (
  `key` VARCHAR(255) NOT NULL,
  `owner` VARCHAR(255) NOT NULL,
  `expiration` INT(11) NOT NULL,
  PRIMARY KEY (`key`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `recommendation_service`.`course_recommendation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recommendation_service`.`course_recommendation` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date_uploaded` DATE NOT NULL,
  `tag` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `recommendation_service`.`failed_jobs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recommendation_service`.`failed_jobs` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` VARCHAR(255) NOT NULL,
  `connection` TEXT NOT NULL,
  `queue` TEXT NOT NULL,
  `payload` LONGTEXT NOT NULL,
  `exception` LONGTEXT NOT NULL,
  `failed_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`),
  UNIQUE INDEX `failed_jobs_uuid_unique` (`uuid` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `recommendation_service`.`job_batches`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recommendation_service`.`job_batches` (
  `id` VARCHAR(255) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `total_jobs` INT(11) NOT NULL,
  `pending_jobs` INT(11) NOT NULL,
  `failed_jobs` INT(11) NOT NULL,
  `failed_job_ids` LONGTEXT NOT NULL,
  `options` MEDIUMTEXT NULL DEFAULT NULL,
  `cancelled_at` INT(11) NULL DEFAULT NULL,
  `created_at` INT(11) NOT NULL,
  `finished_at` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `recommendation_service`.`jobs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recommendation_service`.`jobs` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` VARCHAR(255) NOT NULL,
  `payload` LONGTEXT NOT NULL,
  `attempts` TINYINT(3) UNSIGNED NOT NULL,
  `reserved_at` INT(10) UNSIGNED NULL DEFAULT NULL,
  `available_at` INT(10) UNSIGNED NOT NULL,
  `created_at` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `jobs_queue_index` (`queue` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `recommendation_service`.`migrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recommendation_service`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `recommendation_service`.`password_reset_tokens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recommendation_service`.`password_reset_tokens` (
  `email` VARCHAR(255) NOT NULL,
  `token` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`email`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `recommendation_service`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recommendation_service`.`user` (
  `user_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `recommendation_service`.`recommend_for`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recommendation_service`.`recommend_for` (
  `course_id` BIGINT(20) UNSIGNED NOT NULL,
  `user_id` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`course_id`, `user_id`),
  INDEX `recommend_for_user_id_foreign` (`user_id` ASC) VISIBLE,
  CONSTRAINT `recommend_for_course_id_foreign`
    FOREIGN KEY (`course_id`)
    REFERENCES `recommendation_service`.`course_recommendation` (`id`),
  CONSTRAINT `recommend_for_user_id_foreign`
    FOREIGN KEY (`user_id`)
    REFERENCES `recommendation_service`.`user` (`user_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `recommendation_service`.`sessions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recommendation_service`.`sessions` (
  `id` VARCHAR(255) NOT NULL,
  `user_id` BIGINT(20) UNSIGNED NULL DEFAULT NULL,
  `ip_address` VARCHAR(45) NULL DEFAULT NULL,
  `user_agent` TEXT NULL DEFAULT NULL,
  `payload` LONGTEXT NOT NULL,
  `last_activity` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `sessions_user_id_index` (`user_id` ASC) VISIBLE,
  INDEX `sessions_last_activity_index` (`last_activity` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `recommendation_service`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `recommendation_service`.`users` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

USE `user_service` ;

-- -----------------------------------------------------
-- Table `user_service`.`cache`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_service`.`cache` (
  `key` VARCHAR(255) NOT NULL,
  `value` MEDIUMTEXT NOT NULL,
  `expiration` INT(11) NOT NULL,
  PRIMARY KEY (`key`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `user_service`.`cache_locks`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_service`.`cache_locks` (
  `key` VARCHAR(255) NOT NULL,
  `owner` VARCHAR(255) NOT NULL,
  `expiration` INT(11) NOT NULL,
  PRIMARY KEY (`key`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `user_service`.`failed_jobs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_service`.`failed_jobs` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` VARCHAR(255) NOT NULL,
  `connection` TEXT NOT NULL,
  `queue` TEXT NOT NULL,
  `payload` LONGTEXT NOT NULL,
  `exception` LONGTEXT NOT NULL,
  `failed_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`),
  UNIQUE INDEX `failed_jobs_uuid_unique` (`uuid` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `user_service`.`job_batches`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_service`.`job_batches` (
  `id` VARCHAR(255) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `total_jobs` INT(11) NOT NULL,
  `pending_jobs` INT(11) NOT NULL,
  `failed_jobs` INT(11) NOT NULL,
  `failed_job_ids` LONGTEXT NOT NULL,
  `options` MEDIUMTEXT NULL DEFAULT NULL,
  `cancelled_at` INT(11) NULL DEFAULT NULL,
  `created_at` INT(11) NOT NULL,
  `finished_at` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `user_service`.`jobs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_service`.`jobs` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` VARCHAR(255) NOT NULL,
  `payload` LONGTEXT NOT NULL,
  `attempts` TINYINT(3) UNSIGNED NOT NULL,
  `reserved_at` INT(10) UNSIGNED NULL DEFAULT NULL,
  `available_at` INT(10) UNSIGNED NOT NULL,
  `created_at` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `jobs_queue_index` (`queue` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `user_service`.`migrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_service`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `user_service`.`password_reset_tokens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_service`.`password_reset_tokens` (
  `email` VARCHAR(255) NOT NULL,
  `token` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`email`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `user_service`.`sessions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_service`.`sessions` (
  `id` VARCHAR(255) NOT NULL,
  `user_id` BIGINT(20) UNSIGNED NULL DEFAULT NULL,
  `ip_address` VARCHAR(45) NULL DEFAULT NULL,
  `user_agent` TEXT NULL DEFAULT NULL,
  `payload` LONGTEXT NOT NULL,
  `last_activity` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `sessions_user_id_index` (`user_id` ASC) VISIBLE,
  INDEX `sessions_last_activity_index` (`last_activity` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `user_service`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_service`.`user` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `majority` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `user_service`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user_service`.`users` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
