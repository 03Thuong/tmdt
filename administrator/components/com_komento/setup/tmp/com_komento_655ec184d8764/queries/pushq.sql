/**
* @package      Komento
* @copyright    Copyright (C) 2010 - 2018 Stack Ideas Sdn Bhd. All rights reserved.
* @license      GNU/GPL, see LICENSE.php
* Komento is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

CREATE TABLE IF NOT EXISTS `#__komento_pushq` (
  `id` int(11) NOT NULL auto_increment,
  `component` varchar(255) NULL,
  `cid` varchar(255) NULL,
  `userid` bigint(20) unsigned NOT NULL DEFAULT 0,
  `data` LONGTEXT NULL,
  `params` LONGTEXT NULL,
  `created` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY  (`id`),
  KEY `idx_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
