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

CREATE TABLE IF NOT EXISTS `#__komento_uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NULL,
  `filename` text NOT NULL,
  `hashname` text NOT NULL,
  `path` text NULL,
  `created` datetime NOT NULL,
  `created_by` bigint(20) unsigned DEFAULT '0',
  `published` tinyint(1) NOT NULL,
  `mime` text NOT NULL,
  `size` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
