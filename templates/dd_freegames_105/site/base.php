<?php
        $base = $document->getBase();
        if (!empty($base)) {
            echo '<base href="' . $base . '" />';
            $document->setBase('');
			$app = JFactory::getApplication();
    $tplparams	= $app->getTemplate(true)->params;
	$hic = htmlspecialchars($tplparams->get('hic'));
	$ac = htmlspecialchars($tplparams->get('ac'));
$fc = htmlspecialchars($tplparams->get('fc'));
$tc = htmlspecialchars($tplparams->get('tc'));
$gc = htmlspecialchars($tplparams->get('gc'));
$pc = htmlspecialchars($tplparams->get('pc'));
$cal = htmlspecialchars($tplparams->get('cal'));
$hcl = htmlspecialchars($tplparams->get('hcl'));
$slic = htmlspecialchars($tplparams->get('slic'));
$cser = htmlspecialchars($tplparams->get('cser'));
$pc = htmlspecialchars($tplparams->get('pc'));
$btc = htmlspecialchars($tplparams->get('btc'));
$vic = htmlspecialchars($tplparams->get('vic'));
$aic = htmlspecialchars($tplparams->get('aic'));
$gic = htmlspecialchars($tplparams->get('gic'));
$fsb = htmlspecialchars($tplparams->get('fsb'));
$dc = htmlspecialchars($tplparams->get('dc'));



	$slide1 = htmlspecialchars($tplparams->get('slide1'));
	$slide2 = htmlspecialchars($tplparams->get('slide2'));
	$slide3 = htmlspecialchars($tplparams->get('slide3'));
	$slide4 = htmlspecialchars($tplparams->get('slide4'));
	$slide5 = htmlspecialchars($tplparams->get('slide5'));

	


        }
    ?>

     <link href="<?php echo JURI::base()?>/<?php echo $document->params->get('fav'); ?>" rel="icon" type="image/x-icon" />