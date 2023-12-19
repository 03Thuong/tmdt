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

CREATE TABLE IF NOT EXISTS `#__komento_actions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `comment_id` bigint(20) unsigned NOT NULL,
  `action_by` bigint(20) unsigned NOT NULL DEFAULT 0,
  `actioned` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`),
  KEY `komento_actions` (`type`, `comment_id`, `action_by`),
  KEY `komento_actions_comment_id` (`comment_id`),
  KEY `idx_comment_types` (`comment_id`, `type`)
) DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;