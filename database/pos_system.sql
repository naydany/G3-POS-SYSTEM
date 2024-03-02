


CREATE TABLE `staffs`(
    `cas_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `cas_name` VARCHAR(255) NOT NULL,
    `cas_number` INT NOT NULL,
    `cas_email` VARCHAR(255) NOT NULL,
    `cas_password` VARCHAR(255) NOT NULL,
    `date` DATETIME NOT NULL,
    `staff_addres` VARCHAR(255) NOT NULL,
    `role_id` BIGINT NOT NULL
);


ALTER TABLE
    `staffs` ADD INDEX `staffs_role_id_index`(`role_id`);


CREATE TABLE `payments`(
    `pay_id` VARCHAR(255) NOT NULL,
    `pay_code` VARCHAR(255) NOT NULL,
    `ordre_id` VARCHAR(255) NOT NULL,
    `order_code` VARCHAR(255) NOT NULL,
    `cus_id` INT NOT NULL,
    `pay_atm` VARCHAR(255) NOT NULL,
    `method` VARCHAR(255) NOT NULL,
    `pay_date` DATETIME NOT NULL
);


ALTER TABLE
    `payments` ADD PRIMARY KEY(`pay_id`);

ALTER TABLE
    `payments` ADD INDEX `payments_ordre_id_index`(`ordre_id`);

ALTER TABLE
    `payments` ADD INDEX `payments_cus_id_index`(`cus_id`);

CREATE TABLE `Admins`(
    `Admin_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Admin_name` VARCHAR(255) NOT NULL,
    `Admin_email` VARCHAR(255) NOT NULL,
    `Admin_emage` VARCHAR(255) NOT NULL,
    `Admin_passwbigintord` VARCHAR(255) NOT NULL
);


CREATE TABLE `orders`(
    `order_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `order_date` DATETIME NOT NULL
);



CREATE TABLE `suppliers`(
    `sup_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `sup_name` VARCHAR(255) NOT NULL,
    `sup_country` VARCHAR(255) NOT NULL,
    `sup_address` VARCHAR(255) NOT NULL
);



CREATE TABLE `orders_detail`(
    `order_detail_id` INT NOT NULL,
    `order_id` INT NOT NULL,
    `cus_id` INT NOT NULL,
    `pro_id` INT NOT NULL,
    `pro_name` VARCHAR(255) NOT NULL,
    `pro_price` VARCHAR(255) NOT NULL,
    `pro_qty` INT NOT NULL,
    `order_status` VARCHAR(255) NOT NULL,
    `order_date` DATETIME NOT NULL
);


ALTER TABLE
    `orders_detail` ADD PRIMARY KEY(`order_detail_id`);
ALTER TABLE
    `orders_detail` ADD INDEX `orders_detail_cus_id_index`(`cus_id`);
ALTER TABLE
    `orders_detail` ADD INDEX `orders_detail_pro_id_index`(`pro_id`);


CREATE TABLE `categories`(
    `cate_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `cate_name` VARCHAR(255) NOT NULL,
    `cate_date` DATETIME NOT NULL,
    `cate_desc` VARCHAR(255) NOT NULL
);



ALTER TABLE
    `categories` ADD PRIMARY KEY(`cate_id`);

CREATE TABLE `products`(
    `pro_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `pro_name` VARCHAR(255) NOT NULL,
    `pro_code` VARCHAR(255) NOT NULL,
    `pro_img` VARCHAR(255) NOT NULL,
    `pro_desc` VARCHAR(255) NOT NULL,
    `pro_price` VARCHAR(255) NOT NULL,
    `pro_date` DATETIME NOT NULL,
    `cate_name` VARCHAR(100) NOT NULL,
    `supplier` VARCHAR(100) NOT NULL,
    `sup_id` INT NOT NULL,
    
);


INSERT INTO `users`(`name`, `password`, `email`, `role`) 
VALUES ('dany',123456,'admin@gmail.com','admin');


INSERT INTO `staffs`(`name`, `password`, `email`, `role`) 
VALUES ('dyna',123456,'staff@gmail.com','staffs');


ALTER TABLE
    `products` ADD INDEX `products_sup_id_index`(`sup_id`);
ALTER TABLE
    `products` ADD INDEX `products_cate_id_index`(`cate_id`);
ALTER TABLE
    `products` ADD CONSTRAINT `products_pro_name_foreign` FOREIGN KEY(`pro_name`) REFERENCES `orders_detail`(`cus_id`);
ALTER TABLE
    `products` ADD CONSTRAINT `products_pro_id_foreign` FOREIGN KEY(`pro_id`) REFERENCES `suppliers`(`sup_id`);
ALTER TABLE
    `orders_detail` ADD CONSTRAINT `orders_detail_pro_price_foreign` FOREIGN KEY(`pro_price`) REFERENCES `payments`(`pay_id`);
ALTER TABLE
    `roles` ADD CONSTRAINT `roles_role_type_foreign` FOREIGN KEY(`role_type`) REFERENCES `staffs`(`cas_number`);
ALTER TABLE
    `orders_detail` ADD CONSTRAINT `orders_detail_pro_price_foreign` FOREIGN KEY(`pro_price`) REFERENCES `orders`(`order_id`);
ALTER TABLE
    `Admins` ADD CONSTRAINT `admins_admin_name_foreign` FOREIGN KEY(`Admin_name`) REFERENCES `categories`(`cate_id`);
ALTER TABLE
    `Admins` ADD CONSTRAINT `admins_admin_email_foreign` FOREIGN KEY(`Admin_email`) REFERENCES `staffs`(`cas_email`);
ALTER TABLE
    `staffs` ADD CONSTRAINT `staffs_cas_name_foreign` FOREIGN KEY(`cas_name`) REFERENCES `products`(`pro_price`);
ALTER TABLE
    `products` ADD CONSTRAINT `products_pro_img_foreign` FOREIGN KEY(`pro_img`) REFERENCES `Admins`(`Admin_id`);
ALTER TABLE
    `products` ADD CONSTRAINT `products_pro_name_foreign` FOREIGN KEY(`pro_name`) REFERENCES `categories`(`cate_id`);


