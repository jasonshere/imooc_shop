DROP TABLE IF EXISTS `shop_admin`;
CREATE TABLE IF NOT EXISTS `shop_admin`(
    `adminid` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID',
    `adminuser` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '管理员账号',
    `adminpass` CHAR(32) NOT NULL DEFAULT '' COMMENT '管理员密码',
    `adminemail` VARCHAR(50) NOT NULL DEFAULT '' COMMENT '管理员电子邮箱',
    `logintime` INT UNSIGNED NOT NULL DEFAULT '0' COMMENT '登录时间',
    `loginip` BIGINT NOT NULL DEFAULT '0' COMMENT '登录IP',
    `createtime` INT UNSIGNED NOT NULL DEFAULT '0' COMMENT '创建时间',
    PRIMARY KEY(`adminid`),
    UNIQUE shop_admin_adminuser_adminpass(`adminuser`, `adminpass`),
    UNIQUE shop_admin_adminuser_adminemail(`adminuser`, `adminemail`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `shop_admin`(adminuser,adminpass,adminemail,createtime) VALUES('admin', md5('123'), 'shop@imooc.com', UNIX_TIMESTAMP());

DROP TABLE IF EXISTS `shop_user`;
CREATE TABLE IF NOT EXISTS `shop_user`(
    `userid` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID',
    `username` VARCHAR(32) NOT NULL DEFAULT '',
    `userpass` CHAR(32) NOT NULL DEFAULT '',
    `useremail` VARCHAR(100) NOT NULL DEFAULT '',
    `createtime` INT UNSIGNED NOT NULL DEFAULT '0',
    UNIQUE shop_user_username_userpass(`username`,`userpass`),
    UNIQUE shop_user_useremail_userpass(`useremail`,`userpass`),
    PRIMARY KEY(`userid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `shop_profile`;
CREATE TABLE IF NOT EXISTS `shop_profile`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键ID',
    `truename` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '真实姓名',
    `age` TINYINT UNSIGNED NOT NULL DEFAULT '0' COMMENT '年龄',
    `sex` ENUM('0','1','2') NOT NULL DEFAULT '0' COMMENT '性别',
    `birthday` date NOT NULL DEFAULT '2016-01-01' COMMENT '生日',
    `nickname` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '昵称',
    `company` VARCHAR(100) NOT NULL DEFAULT '' COMMENT '公司',
    `userid` BIGINT UNSIGNED NOT NULL DEFAULT '0' COMMENT '用户的ID',
    `createtime` INT UNSIGNED NOT NULL DEFAULT '0' COMMENT '创建时间',
    PRIMARY KEY(`id`),
    UNIQUE shop_profile_userid(`userid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `shop_category`;
CREATE TABLE IF NOT EXISTS `shop_category`(
    `cateid` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(32) NOT NULL DEFAULT '',
    `parentid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `createtime` INT UNSIGNED NOT NULL DEFAULT '0',
    PRIMARY KEY(`cateid`),
    KEY shop_category_parentid(`parentid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `shop_product`;
CREATE TABLE IF NOT EXISTS `shop_product`(
    `productid` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `cateid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `title` VARCHAR(200) NOT NULL DEFAULT '',
    `descr` TEXT,
    `num` INT UNSIGNED NOT NULL DEFAULT '0',
    `price` DECIMAL(10,2) NOT NULL DEFAULT '0.00',
    `cover` VARCHAR(200) NOT NULL DEFAULT '',
    `pics` TEXT,
    `issale` ENUM('0','1') NOT NULL DEFAULT '0',
    `ishot` ENUM('0','1') NOT NULL DEFAULT '0',
    `istui` ENUM('0','1') NOT NULL DEFAULT '0',
    `saleprice` DECIMAL(10,2) NOT NULL DEFAULT '0.00',
    `ison` ENUM('0','1') NOT NULL DEFAULT '1',
    `createtime` INT UNSIGNED NOT NULL DEFAULT '0',
    KEY shop_product_cateid(`cateid`),
    KEY shop_product_ison(`ison`)
)ENGINE=InnoDB DEFAULT CHARSET='utf8';

DROP TABLE IF EXISTS `shop_cart`;
CREATE TABLE IF NOT EXISTS `shop_cart`(
    `cartid` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `productid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `productnum` INT UNSIGNED NOT NULL DEFAULT '0',
    `price` DECIMAL(10,2) NOT NULL DEFAULT '0.00',
    `userid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `createtime` INT UNSIGNED NOT NULL DEFAULT '0',
    KEY shop_cart_productid(`productid`),
    KEY shop_cart_userid(`userid`)
)ENGINE=InnoDB DEFAULT CHARSET='utf8';

DROP TABLE IF EXISTS `shop_order`;
CREATE TABLE IF NOT EXISTS `shop_order`(
    `orderid` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `userid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `addressid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `amount` DECIMAL(10,2) NOT NULL DEFAULT '0.00',
    `status` INT UNSIGNED NOT NULL DEFAULT '0',
    `expressid` INT UNSIGNED NOT NULL DEFAULT '0',
    `expressno` VARCHAR(50) NOT NULL DEFAULT '',
    `tradeno` VARCHAR(100) NOT NULL DEFAULT '',
    `tradeext` TEXT,
    `createtime` INT UNSIGNED NOT NULL DEFAULT '0',
    `updatetime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    KEY shop_order_userid(`userid`),
    KEY shop_order_addressid(`addressid`),
    KEY shop_order_expressid(`expressid`)
)ENGINE=InnoDB DEFAULT CHARSET='utf8';


DROP TABLE IF EXISTS `shop_order_detail`;
CREATE TABLE IF NOT EXISTS `shop_order_detail`(
    `detailid` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `productid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `price` DECIMAL(10,2) NOT NULL DEFAULT '0.00',
    `productnum` INT UNSIGNED NOT NULL DEFAULT '0',
    `orderid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `createtime` INT UNSIGNED NOT NULL DEFAULT '0',
    KEY shop_order_detail_productid(`productid`),
    KEY shop_order_detail_orderid(`orderid`)
)ENGINE=InnoDB DEFAULT CHARSET='utf8';


DROP TABLE IF EXISTS `shop_address`;
CREATE TABLE IF NOT EXISTS `shop_address`(
    `addressid` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `firstname` VARCHAR(32) NOT NULL DEFAULT '',
    `lastname` VARCHAR(32) NOT NULL DEFAULT '',
    `company` VARCHAR(100) NOT NULL DEFAULT '',
    `address` TEXT,
    `postcode` CHAR(6) NOT NULL DEFAULT '',
    `email` VARCHAR(100) NOT NULL DEFAULT '',
    `telephone` VARCHAR(20) NOT NULL DEFAULT '',
    `userid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `createtime` INT UNSIGNED NOT NULL DEFAULT '0',
    KEY shop_address_userid(`userid`)
)ENGINE=InnoDB DEFAULT CHARSET='utf8';























