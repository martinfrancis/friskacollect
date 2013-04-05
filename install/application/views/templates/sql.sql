CREATE TABLE `prefix_admin` (
`id` int(10) unsigned NOT NULL auto_increment,
`firstname` varchar(32) default NULL,
`lastname` varchar(32) default NULL,
`email` varchar(128) NOT NULL,
`access` varchar(11) NOT NULL,
`password` varchar(40) NOT NULL,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_banners` (
`id` int(11) NOT NULL auto_increment,
`title` varchar(128) NOT NULL default '',
`enable_on` date NOT NULL default '0000-00-00',
`disable_on` date NOT NULL default '0000-00-00',
`image` varchar(64) NOT NULL,
`link` varchar(128) default NULL,
`new_window` tinyint(1) NOT NULL default '0',
`sequence` int(11) NOT NULL default '0',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_boxes` (
`id` int(11) NOT NULL auto_increment,
`title` varchar(128) NOT NULL default '',
`enable_on` date NOT NULL default '0000-00-00',
`disable_on` date NOT NULL default '0000-00-00',
`image` varchar(64) NOT NULL,
`link` varchar(128) default NULL,
`new_window` tinyint(1) NOT NULL default '0',
`sequence` int(11) NOT NULL default '0',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_canned_messages` (
`id` int(11) NOT NULL auto_increment,
`deletable` tinyint(1) NOT NULL default '1',
`type` enum('internal','order') default NULL,
`name` varchar(50) default NULL,
`subject` varchar(100) default NULL,
`content` text,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_categories` (
`id` int(10) unsigned NOT NULL auto_increment,
`parent_id` int(10) unsigned NOT NULL,
`name` varchar(64) NOT NULL,
`slug` varchar(64) NOT NULL,
`route_id` int(11) NOT NULL,
`description` text NOT NULL,
`excerpt` text NOT NULL,
`sequence` int(10) unsigned NOT NULL,
`image` varchar(255) default NULL,
`seo_title` text NOT NULL,
`meta` text NOT NULL,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_category_products` (
`product_id` int(10) unsigned NOT NULL,
`category_id` int(10) unsigned NOT NULL,
`sequence` int(10) unsigned NOT NULL default '0',
PRIMARY KEY  (`product_id`,`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_countries` (
`id` int(11) NOT NULL auto_increment,
`sequence` int(11) NOT NULL default '0',
`name` varchar(128) collate utf8_bin NOT NULL,
`iso_code_2` varchar(2) collate utf8_bin NOT NULL default '',
`iso_code_3` varchar(3) collate utf8_bin NOT NULL default '',
`address_format` text character set utf8 NOT NULL,
`postcode_required` int(1) NOT NULL default '0',
`status` int(1) NOT NULL default '1',
`tax` float(10,5) NOT NULL default '0.00000',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `prefix_country_zone_areas` (
`id` int(11) NOT NULL auto_increment,
`zone_id` int(11) NOT NULL,
`code` varchar(15) NOT NULL,
`tax` float(10,5) NOT NULL default '0.00000',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_country_zones` (
`id` int(11) NOT NULL auto_increment,
`country_id` int(11) NOT NULL,
`code` varchar(32) collate utf8_bin NOT NULL default '',
`name` varchar(128) collate utf8_bin NOT NULL,
`status` int(1) NOT NULL default '1',
`tax` float(10,5) NOT NULL default '0.00000',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `prefix_coupons` (
`id` int(10) unsigned NOT NULL auto_increment,
`code` varchar(50) NOT NULL,
`start_date` date NOT NULL,
`end_date` date NOT NULL,
`whole_order_coupon` tinyint(1) NOT NULL,
`max_product_instances` mediumint(8) unsigned NOT NULL default '0',
`max_uses` mediumint(8) unsigned NOT NULL,
`num_uses` mediumint(8) unsigned NOT NULL,
`reduction_target` varchar(8) NOT NULL,
`reduction_type` varchar(10) NOT NULL,
`reduction_amount` float NOT NULL,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_coupons_products` (
`coupon_id` int(11) NOT NULL,
`product_id` int(11) NOT NULL,
`sequence` int(11) NOT NULL,
KEY `promotion_id` (`coupon_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_customer_groups` (
`id` int(11) NOT NULL auto_increment,
`discount` float default NULL,
`name` varchar(50) default NULL,
`discount_type` enum('fixed','percent') default 'percent',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_customers` (
`id` int(10) unsigned NOT NULL auto_increment,
`firstname` varchar(32) NOT NULL,
`lastname` varchar(32) NOT NULL,
`email` varchar(128) NOT NULL,
`email_subscribe` tinyint(1) default NULL,
`phone` varchar(32) NOT NULL,
`company` varchar(128) NOT NULL,
`default_billing_address` int(11) default NULL,
`default_shipping_address` int(11) default NULL,
`ship_to_bill_address` enum('false','true') NOT NULL default 'true',
`password` varchar(40) NOT NULL,
`active` tinyint(1) NOT NULL,
`group_id` int(11) NOT NULL default '1',
`confirmed` tinyint(1) NOT NULL default '0',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_customers_address_bank` (
`id` int(11) NOT NULL auto_increment,
`customer_id` int(11) default NULL,
`entry_name` varchar(20) default NULL,
`field_data` text,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_digital_products` (
`id` int(11) NOT NULL auto_increment,
`filename` varchar(100) NOT NULL,
`max_downloads` int(11) NOT NULL,
`title` varchar(100) NOT NULL,
`version` varchar(150) NOT NULL,
`size` varchar(20) NOT NULL,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_download_package_files` (
`package_id` int(11) NOT NULL,
`file_id` int(11) NOT NULL,
`downloads` int(11) NOT NULL,
`link` varchar(32) NOT NULL,
KEY `package_id` (`package_id`),
KEY `package_id_2` (`package_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_download_packages` (
`id` int(11) NOT NULL auto_increment,
`order_id` varchar(60) NOT NULL,
`customer_id` int(11) NOT NULL,
`code` varchar(16) NOT NULL,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_gift_cards` (
`id` int(10) unsigned NOT NULL auto_increment,
`order_number` varchar(60) NOT NULL,
`code` varchar(16) NOT NULL,
`expiry_date` date NOT NULL,
`beginning_amount` float NOT NULL,
`amount_used` float NOT NULL,
`to_name` varchar(70) default NULL,
`to_email` varchar(75) NOT NULL,
`from` varchar(70) default NULL,
`personal_message` mediumtext,
`activated` tinyint(1) NOT NULL default '0',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_option_values` (
`id` int(11) NOT NULL auto_increment,
`option_id` int(11) NOT NULL,
`name` varchar(255) NOT NULL,
`value` varchar(255) NOT NULL,
`price` float(10,2) NOT NULL,
`weight` float(10,2) NOT NULL,
`sequence` int(11) NOT NULL,
`limit` int(11) default NULL,
PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_options` (
`id` int(11) NOT NULL auto_increment,
`product_id` int(11) NOT NULL,
`sequence` int(11) NOT NULL,
`name` varchar(64) NOT NULL,
`type` varchar(24) NOT NULL,
`required` tinyint(1) NOT NULL,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_order_items` (
`id` bigint(20) NOT NULL auto_increment,
`order_id` int(11) default NULL,
`product_id` int(11) NOT NULL,
`quantity` int(11) NOT NULL,
`contents` longtext,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_orders` (
`id` int(10) unsigned NOT NULL auto_increment,
`order_number` varchar(60) NOT NULL,
`customer_id` int(10) unsigned default NULL,
`status` varchar(255) NOT NULL,
`ordered_on` datetime NOT NULL,
`shipped_on` datetime default NULL,
`tax` float(10,2) NOT NULL,
`total` float(10,2) NOT NULL,
`subtotal` float(10,2) NOT NULL,
`gift_card_discount` float(10,2) NOT NULL,
`coupon_discount` float(10,2) NOT NULL,
`shipping` float(10,2) NOT NULL,
`shipping_notes` text NOT NULL,
`shipping_method` tinytext NOT NULL,
`notes` text DEFAULT NULL,
`payment_info` text NOT NULL,
`referral` text NOT NULL,
`company` varchar(255) default NULL,
`firstname` varchar(255) default NULL,
`lastname` varchar(255) default NULL,
`phone` varchar(40) default NULL,
`email` varchar(255) default NULL,
`ship_company` varchar(255) default NULL,
`ship_firstname` varchar(255) default NULL,
`ship_lastname` varchar(255) default NULL,
`ship_email` varchar(255) default NULL,
`ship_phone` varchar(40) default NULL,
`ship_address1` varchar(255) default NULL,
`ship_address2` varchar(255) default NULL,
`ship_city` varchar(255) default NULL,
`ship_zip` varchar(11) default NULL,
`ship_zone` varchar(255) default NULL,
`ship_zone_id` int(11) default NULL,
`ship_country` varchar(255) default NULL,
`ship_country_code` varchar(10) default NULL,
`ship_country_id` int(11) default NULL,
`bill_company` varchar(255) default NULL,
`bill_firstname` varchar(255) default NULL,
`bill_lastname` varchar(255) default NULL,
`bill_email` varchar(255) default NULL,
`bill_phone` varchar(40) default NULL,
`bill_address1` varchar(255) default NULL,
`bill_address2` varchar(255) default NULL,
`bill_city` varchar(255) default NULL,
`bill_zip` varchar(11) default NULL,
`bill_zone` varchar(255) default NULL,
`bill_zone_id` int(11) default NULL,
`bill_country` varchar(255) default NULL,
`bill_country_code` varchar(10) default NULL,
`bill_country_id` int(11) default NULL,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_pages` (
`id` int(11) NOT NULL auto_increment,
`parent_id` int(11) NOT NULL,
`title` varchar(128) NOT NULL,
`menu_title` varchar(128) NOT NULL,
`slug` varchar(255) NOT NULL,
`route_id` int(128) NOT NULL,
`content` longtext NOT NULL,
`sequence` int(11) NOT NULL default '0',
`seo_title` text NOT NULL,
`meta` text NOT NULL,
`url` varchar(255) default NULL,
`new_window` tinyint(1) default '0',
PRIMARY KEY  (`id`),
FULLTEXT KEY `title` (`title`,`content`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_products` (
`id` int(10) unsigned NOT NULL auto_increment,
`sku` varchar(30) default NULL,
`name` varchar(128) default NULL,
`slug` varchar(128) default NULL,
`route_id` int(11) NOT NULL,
`description` text,
`excerpt` text,
`price` float(10,2) NOT NULL default '0.00',
`saleprice` float(10,2) NOT NULL default '0.00',
`free_shipping` tinyint(1) NOT NULL default '0',
`shippable` tinyint(1) NOT NULL default '1',
`taxable` tinyint(1) NOT NULL default '1',
`fixed_quantity` tinyint(1) NOT NULL default '0',
`weight` varchar(10) NOT NULL default '0',
`track_stock` tinyint(1) NOT NULL default '0',
`quantity` int(11) NOT NULL,
`related_products` text,
`images` text,
`seo_title` text,
`meta` text,
`enabled` tinyint(1) NOT NULL default '1',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_products_files` (
`product_id` int(11) NOT NULL,
`file_id` int(11) NOT NULL,
KEY `product_id` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_routes` (
`id` int(11) NOT NULL auto_increment,
`slug` varchar(255) NOT NULL,
`route` varchar(32) default NULL,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_search` (
`code` varchar(40) NOT NULL,
`term` varchar(255) NOT NULL,
PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_sessions` (
`session_id` varchar(40) NOT NULL default '0',
`ip_address` varchar(45) NOT NULL default '0',
`user_agent` varchar(120) default NULL,
`last_activity` int(10) unsigned NOT NULL default '0',
`user_data` text NOT NULL,
PRIMARY KEY  (`session_id`),
KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `prefix_settings` (
`id` int(11) NOT NULL auto_increment,
`code` varchar(255) NOT NULL,
`setting_key` varchar(255) NOT NULL,
`setting` longtext NOT NULL,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

