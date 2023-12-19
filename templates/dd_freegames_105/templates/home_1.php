<!DOCTYPE html>
<html dir="ltr">
<head>
<?php include("$themeDir/site/base.php"); ?>
<?php include("$themeDir/site/style.php"); ?>
    
</head>
<body class=" bootstrap bd-body-1 
 bd-homepage bd-pagebackground-124 bd-margins">
    <?php include("$themeDir/site/header.php"); ?>
	
		<section class=" bd-section-6 bd-page-width bd-tagstyles bd-bootstrap-btn bd-btn-default " id="section6" data-section-title="Section">
    <div class="bd-container-inner bd-margins clearfix">
        <?php
    renderTemplateFromIncludes('hmenu_3', array());
?>
    </div>
</section>
	<?php if ($slic == 1 | $slic == 2) { ?><?php include("$themeDir/site/slideshow.php"); ?><?php } ?>
    <?php if ($pc == 1 | $pc == 2) { ?><?php include("$themeDir/site/poster.php"); ?><?php } ?>
	<?php if ($btc == 1 | $btc == 2) { ?><?php include("$themeDir/site/text.php"); ?><?php } ?>
    <?php if ($vic == 1 | $vic == 2) { ?><?php include("$themeDir/site/video.php"); ?><?php } ?>
    <?php if ($aic == 1 | $aic == 2) { ?><?php include("$themeDir/site/text1.php"); ?><?php } ?>	
	
		

		<div class="bd-containereffect-2 container-effect container ">
<div class=" bd-stretchtobottom-1 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-9">
<div class="bd-contentlayout-9   bd-sheetstyles  bd-no-margins bd-margins" >
    <div class="bd-container-inner">

        <div class="bd-flex-vertical bd-stretch-inner bd-contentlayout-offset">
            
 <?php renderTemplateFromIncludes('sidebar_area_1'); ?>
            <div class="bd-flex-horizontal bd-flex-wide bd-no-margins">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide bd-no-margins">
                    
 <?php renderTemplateFromIncludes('sidebar_area_5'); ?>

                    <div class=" bd-layoutitemsbox-27 bd-flex-wide bd-no-margins">
    <div class=" bd-content-9">
    <?php
            $document = JFactory::getDocument();
            echo $document->view->renderSystemMessages();
    $document->view->componentWrapper('common');
    echo '<jdoc:include type="component" />';
    ?>
</div>
</div>

                    
 <?php renderTemplateFromIncludes('sidebar_area_6'); ?> 
                </div>
                
 <?php renderTemplateFromIncludes('sidebar_area_2'); ?>
            </div>
            
 <?php renderTemplateFromIncludes('sidebar_area_4'); ?>
        </div>

    </div>
</div></div>
</div>
	
		<section class=" bd-section-13 bd-tagstyles bd-bootstrap-btn bd-btn-default" id="box9" data-section-title="box9">
    <div class="bd-container-inner bd-margins clearfix">
        <?php
    renderTemplateFromIncludes('joomlaposition_10');
?>
    </div>
</section>
	
	<?php if ($gic == 1 | $gic == 2) { ?><?php include("$themeDir/site/gallery.php"); ?><?php } ?>
	
		<?php if ($fsb == 1 | $fsb == 2) { ?><?php include("$themeDir/site/footer.php"); ?><?php } ?>
       <?php include("$themeDir/site/design.php"); ?>
	
		<div data-smooth-scroll data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1 ">
    <span class="bd-icon-66 bd-icon "></span>
</a></div>
</body>
</html>