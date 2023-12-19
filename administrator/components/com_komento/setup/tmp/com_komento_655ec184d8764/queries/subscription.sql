/**
* @package      Komento
* @copyright    Copyright (C) 2010 - 2016 Stack Ideas Sdn Bhd. All rights reserved.
* @license      GNU/GPL, see LICENSE.php
* Komento is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

CREATE TABLE IF NOT EXISTS `#__komento_subscription` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `component` varchar(255) NOT NULL,
  `cid` bigint(20) unsigned NOT NULL,
  `userid` bigint(20) unsigned NOT NULL DEFAULT 0,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` DATETIME  NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `interval` varchar(25) default 'instant',
  `sent_out` datetime null,
  `count` int(11) default 10,
  PRIMARY KEY (`id`),
  KEY `komento_subscription` (`type`, `component`, `cid`),
  KEY `idx_sub_counts` (`component` (64), `cid`, `userid`),
  KEY `idx_digest_subscribers` (`published`, `interval`, `sent_out`),
  KEY `idx_digest_emails` (`published`, `interval`, `email`, `sent_out`),
  KEY `idx_userid` (`userid`),
  KEY `idx_subs_interval` (`component` (128), `cid`, `published`, `interval`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
