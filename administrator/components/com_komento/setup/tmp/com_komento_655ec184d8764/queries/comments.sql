/**
* @package      Komento
* @copyright    Copyright (C) Stack Ideas Sdn Bhd. All rights reserved.
* @license      GNU/GPL, see LICENSE.php
* Komento is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

CREATE TABLE IF NOT EXISTS `#__komento_comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `component` varchar(255) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `comment` TEXT CHARACTER SET utf8mb4,
  `preview` LONGTEXT CHARACTER SET utf8mb4 NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT '',
  `url` varchar(255) DEFAULT '',
  `ip` varchar(255) DEFAULT '',
  `created_by` bigint(20) unsigned DEFAULT '0',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` bigint(20) unsigned DEFAULT '0',
  `modified` datetime DEFAULT '0000-00-00 00:00:00',
  `deleted_by` bigint(20) unsigned DEFAULT '0',
  `deleted` datetime DEFAULT '0000-00-00 00:00:00',
  `flag` tinyint(1) DEFAULT '0',
  `published` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `publish_up` datetime DEFAULT '0000-00-00 00:00:00',
  `publish_down` datetime DEFAULT '0000-00-00 00:00:00',
  `sticked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sent` tinyint(1) DEFAULT '0',
  `parent_id` int(11) unsigned DEFAULT '0',
  `lft` int(11) unsigned NOT NULL DEFAULT '0',
  `rgt` int(11) unsigned NOT NULL DEFAULT '0',
  `depth` int(11) unsigned NOT NULL DEFAULT '0',
  `latitude` VARCHAR(255) NULL,
  `longitude` VARCHAR(255) NULL,
  `address` TEXT NULL,
  `params` TEXT NULL,
  `ratings` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `komento_threaded` (`component`, `cid`, `published`, `lft`, `rgt`),
  KEY `komento_threaded_reverse` (`component`, `cid`, `published`, `rgt`),
  KEY `komento_module_comments` (`component`, `cid`, `published`, `created`),
  KEY `komento_backend` (`parent_id`, `component`, `cid`, `created`),
  KEY `idx_published_comments` (`published`, `created`),
  KEY `idx_parent_comments` (`component` (128), `cid`, `published`, `parent_id`, `created`),
  KEY `idx_user_last_comment` (`email` (128), `component` (64), `cid`),
  KEY `idx_top_rated` (`published`, `ratings`, `created`, `component` (64), `cid`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;