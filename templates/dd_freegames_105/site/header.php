<header class=" bd-headerarea-1  bd-margins">
        <section class=" bd-section-34 hidden-xs bd-tagstyles bd-bootstrap-btn bd-btn-default" id="section21" data-section-title="HOTINFO">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutbox-6 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutbox-16 bd-no-margins clearfix">
    <div class="bd-container-inner">
       <?php if ($hic == 1) { ?><img class="bd-imagelink-9 bd-own-margins bd-imagestyles   "  src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/megaphone.png">
	
		<p class=" bd-textblock-20 bd-content-element">
<?php echo $document->params->get('hin'); ?><?php } ?>
</p>
    </div>
</div>
	
		<div class=" bd-layoutbox-18 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-customhtml-3 bd-tagstyles bd-bootstrap-btn bd-btn-default">
    <div class="bd-container-inner bd-content-element">
<?php if ($hic == 1) { ?><marquee direction="left" scrollamount="<?php echo $document->params->get('speedh'); ?>" scrolldelay="1" onmouseover="this.stop()" onmouseout="this.start()"><a href="<?php echo $document->params->get('hil'); ?>"><?php echo $document->params->get('hi'); ?></a>
</marquee><?php } ?> </div>
</div>
    </div>
</div>
	
		<div class=" bd-layoutbox-20 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-socialicons-4">
    
        <?php if ($cal == 1) { ?> <?php if ($fc == 1) { ?><a target="_blank" class=" bd-socialicon-31 bd-socialicon" href="<?php echo $document->params->get('facebook'); ?>">
    <span class="bd-icon"></span><span></span>
</a><?php } ?>
    
        <?php if ($tc == 1) { ?><a target="_blank" class=" bd-socialicon-32 bd-socialicon" href="<?php echo $document->params->get('twitter'); ?>">
    <span class="bd-icon"></span><span></span>
</a><?php } ?>
    
        <?php if ($gc == 1) { ?><a target="_blank" class=" bd-socialicon-33 bd-socialicon" href="<?php echo $document->params->get('google'); ?>">
    <span class="bd-icon"></span><span></span>
</a><?php } ?>
    
       <?php if ($pc == 1) { ?> <a target="_blank" class=" bd-socialicon-34 bd-socialicon" href="<?php echo $document->params->get('pinterest'); ?>">
    <span class="bd-icon"></span><span></span>
</a><?php } ?><?php } ?>
    
    
    
    
    
    
</div>
    </div>
</div>
	
		<div class=" bd-layoutbox-22 bd-no-margins clearfix">
    <div class="bd-container-inner">
       <?php if ($cser == 1) { ?> <form id="search-6" role="form" class=" bd-search-6 hidden-xs form-inline" name="search" <?php echo funcBuildRoute(JFactory::getDocument()->baseurl . '/index.php', 'action'); ?> method="post">
    <div class="bd-container-inner">
        <input type="hidden" name="task" value="search">
        <input type="hidden" name="option" value="com_search">
        <div class="bd-search-wrapper">
            
                <input type="text" name="searchword" class=" bd-bootstrapinput-12 form-control input-sm" placeholder="Search">
                <a href="#" class="bd-icon-29 bd-icon " link-disable="true"></a>
        </div>
        <script>
            (function (jQuery, $) {
                jQuery('.bd-search-6 .bd-icon-29').on('click', function (e) {
                    e.preventDefault();
                    jQuery('#search-6').submit();
                });
            })(window._$, window._$);
        </script>
    </div>
</form><?php } ?>
    </div>
</div>
    </div>
</div>
    </div>
</section>
	
		<section class=" bd-section-40 bd-page-width bd-tagstyles bd-bootstrap-btn bd-btn-default " id="section7" data-section-title="Logo">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutbox-24 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <div class=" bd-layoutbox-26 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <?php
$app = JFactory::getApplication();
$themeParams = $app->getTemplate(true)->params;
$sitename = $app->getCfg('sitename');
$logoSrc = '';
ob_start();
?>
src="<?php echo JURI::base() . 'templates/' . JFactory::getApplication()->getTemplate(); ?>/images/designer/logo.png"
<?php

$logoSrc = ob_get_clean();
$logoLink = '';

if ($themeParams->get('logoFile'))
    $logoSrc = 'src="' . JURI::root() . $themeParams->get('logoFile') . '"';

if ($themeParams->get('logoLink'))
    $logoLink = $themeParams->get('logoLink');

if (!$logoLink)
    $logoLink = JUri::base(true);

?>
<a class=" bd-logo-2" href="<?php echo $logoLink; ?>">
<img class=" bd-imagestyles-53 animated bd-animation-29" data-animation-name="flipInY" data-animation-event="onload" data-animation-duration="1000ms" data-animation-delay="0ms" data-animation-infinited="false" <?php echo $logoSrc; ?> alt="<?php echo $sitename; ?>">
</a>
    </div>
</div>
	
		<div class=" bd-layoutbox-29 hidden-sm hidden-xs bd-no-margins clearfix">
    <div class="bd-container-inner">
        <a class="bd-imagelink-17  bd-own-margins "  href="<?php echo $document->params->get('bannerl'); ?>">
<img class=" bd-imagestyles-56 bd-no-margins" src="<?php echo JURI::base()?>/<?php echo $document->params->get('banner'); ?>"
 alt="banner">
</a>
    </div>
</div>
    </div>
</div>
    </div>
</section>
	
		<?php
    renderTemplateFromIncludes('hmenu_1', array());
?>
</header>