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
