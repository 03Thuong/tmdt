<!DOCTYPE html>
<html dir="ltr">
<head>
     <?php include("$themeDir/site/base.php"); ?>
<?php include("$themeDir/site/style.php"); ?>
</head>
<body class=" bootstrap bd-body-7  bd-pagebackground bd-margins">
				<?php include("$themeDir/site/header.php"); ?>
        	<?php if ($slic == 2) { ?><?php include("$themeDir/site/slideshow.php"); ?><?php } ?>
    <?php if ($pc == 2) { ?><?php include("$themeDir/site/poster.php"); ?><?php } ?>
	<?php if ($btc == 2) { ?><?php include("$themeDir/site/text.php"); ?><?php } ?>
    <?php if ($vic == 2) { ?><?php include("$themeDir/site/video.php"); ?><?php } ?>
    <?php if ($aic == 2) { ?><?php include("$themeDir/site/text1.php"); ?><?php } ?>
		<div class=" bd-stretchtobottom-2 bd-stretch-to-bottom" data-control-selector=".bd-contentlayout-7">
  <div class="bd-contentlayout-7  bd-sheetstyles  bd-no-margins bd-margins" >
    <div class="bd-container-inner">

        <div class="bd-flex-vertical bd-stretch-inner bd-contentlayout-offset">
            
 <?php renderTemplateFromIncludes('sidebar_area_1'); ?>
            <div class="bd-flex-horizontal bd-flex-wide bd-no-margins">
                
 <?php renderTemplateFromIncludes('sidebar_area_3'); ?>
                <div class="bd-flex-vertical bd-flex-wide bd-no-margins">
                    

                    <div class=" bd-layoutitemsbox-24 bd-flex-wide bd-no-margins">
    <div class=" bd-content-7">
    <?php
            $document = JFactory::getDocument();
            echo $document->view->renderSystemMessages();
    $document->view->componentWrapper('blog_5');
    echo '<jdoc:include type="component" />';
    ?>
</div>
</div>

                    
 <?php renderTemplateFromIncludes('sidebar_area_6'); ?>
                </div>
                
 <?php renderTemplateFromIncludes('sidebar_area_2'); ?>
            </div>
            
        </div>

    </div>
</div></div>
<?php if ($gic == 2) { ?><?php include("$themeDir/site/gallery.php"); ?><?php } ?>
	
		<?php if ($fsb == 2) { ?><?php include("$themeDir/site/footer.php"); ?><?php } ?>
       <?php include("$themeDir/site/design.php"); ?>
		<div data-smooth-scroll data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1 ">
    <span class="bd-icon-66 bd-icon "></span>
</a></div>
</body>
</html>