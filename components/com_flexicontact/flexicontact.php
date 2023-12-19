<?php
/********************************************************************
Product		: Flexicontact
Date		: 29 September 2023
Copyright	: Les Arbres Design 2009-2023
Contact		: https://www.lesarbresdesign.info
Licence		: GNU General Public License
*********************************************************************/
defined('_JEXEC') or die('Restricted Access');

require_once JPATH_ADMINISTRATOR.'/components/com_flexicontact/helpers/flexicontact_helper.php';
require_once LAFC_HELPER_PATH.'/trace_helper.php';

FC_trace::trace_entry_point(true);

$document = JFactory::getDocument();
$ftime = @filemtime(LAFC_SITE_CSS_PATH);
if (!$ftime)
	$ftime = '0';
$document->addStyleSheet(LAFC_SITE_CSS_URL.'?'.$ftime);
$document->addScript(JURI::root(true).'/media/com_flexicontact/js/com_flexicontact.js?2');

require_once( JPATH_SITE.'/components/com_flexicontact/controller.php' );
$controller = new FlexicontactController();

$jinput = JFactory::getApplication()->input;
$task = $jinput->get('task', '', 'STRING');
if (!in_array($task, array('','display','send','image')))
    {
    http_response_code(400);    // bad request
    exit;
    }

$controller->execute($task);
$controller->redirect();