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

CREATE TABLE IF NOT EXISTS `#__komento_migrators` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `internal_id` bigint(20) NOT NULL,
  `external_id` bigint(20) NOT NULL,
  `component` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_external_id` (`external_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
