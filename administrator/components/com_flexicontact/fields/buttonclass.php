<?php
/********************************************************************
Product		: Flexicontact
Date		: 26 September 2023
Copyright	: Les Arbres Design 2023
Contact		: https://www.lesarbresdesign.info
Licence		: GNU General Public License
*********************************************************************/
defined('_JEXEC') or die('Restricted Access');

class JFormFieldButtonClass extends JFormField
{
protected $type = 'buttonclass';

protected function getInput()
{
	if (!file_exists(LAFC_SITE_CSS_PATH))
		{
		FCP_trace::trace("*** buttonclass field can't find ".LAFC_SITE_CSS_PATH);
		return '';
		}

// load the front end language file and the front end CSS

    $lang = JFactory::getLanguage();
	$lang->load('com_flexicontact', JPATH_SITE.'/components/com_flexicontact');
	$document = JFactory::getDocument();
	$document->addStyleSheet(LAFC_SITE_CSS_URL.'?'.filemtime(LAFC_SITE_CSS_PATH));

// make the colour buttons

	$classes = array('fc_button', 'fc_button fc_green', 'fc_button fc_red', 'fc_button fc_orange', 'fc_button fc_black');
	$html = '<div class="fc_send">';
	foreach ($classes as $class)
		$html .= '<input type="submit" class="fcj-colour-picker '.$class.'" value="">';

// draw the preview button

	$default_text = JText::_('COM_FLEXICONTACT_SEND_BUTTON');
	$html .= '<br><input type="submit" class="fcj-button-preview fc_button" data-default="'.$default_text.'" value="'.$default_text.'">';
	$html .= '</div>';
	return $html;
}

}