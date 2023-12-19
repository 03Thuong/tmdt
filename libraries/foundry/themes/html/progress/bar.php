<?php
/**
* @package		Foundry
* @copyright	Copyright (C) Stack Ideas Sdn Bhd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Foundry is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
defined('_JEXEC') or die('Unauthorized Access');
?>
<div class="o-progress" data-fd-progress
	role="progressbar"
	aria-valuenow="<?php echo $progress;?>"
	aria-valuemin="0"
	aria-valuemax="100"
>
	<div style="width: <?php echo $progress;?>%" class="o-progress__bar" data-fd-progress-bar></div>
</div>