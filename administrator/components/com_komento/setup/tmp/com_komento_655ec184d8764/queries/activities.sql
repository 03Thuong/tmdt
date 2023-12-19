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

CREATE TABLE IF NOT EXISTS `#__komento_activities` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `comment_id` bigint(20) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_commentid` (`comment_id`),
  KEY `idx_created` (`created`),
  KEY `idx_activities` (`published`, `type`, `created`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;