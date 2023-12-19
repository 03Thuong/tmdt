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

CREATE TABLE IF NOT EXISTS `#__komento_mailq` (
  `id` int(11) NOT NULL auto_increment,
  `mailfrom` varchar(255) NULL,
  `fromname` varchar(255) NULL,
  `recipient` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `body` LONGTEXT,
  `created` datetime NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'text',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `template` varchar(255) default '',
  `data` LONGTEXT NULL,
  `params` LONGTEXT NULL,
  PRIMARY KEY  (`id`),
  KEY `komento_mailq_status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
