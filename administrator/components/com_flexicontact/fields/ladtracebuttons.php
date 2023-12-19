<?php
/********************************************************************
Product		: Multiple Products
Date		: 12 June 2023
Copyright	: Les Arbres Design 2010-2023
Contact		: https://www.lesarbresdesign.info
Licence		: GNU General Public License
*********************************************************************/
defined('_JEXEC') or die('Restricted Access');

class JFormFieldLadTraceButtons extends JFormField
{
protected $type = 'ladtracebuttons';

protected function getInput()
{    
	$component = $this->element['component'];
    $controls = ' <button type="button" class="btn btn-primary ladj-click-submit" data-task="trace_on">On</button>';
    $controls .= ' <button type="button" class="btn btn-primary ladj-click-submit" data-task="trace_off">Off</button>';
	if (file_exists(JPATH_ROOT.'/components/'.$component.'/trace.txt'))
		$controls .= ' <span><a href="'.JURI::root().'components/'.$component.'/trace.txt'.'" target="_blank"> Trace File</a></span>';
	else
		$controls .= ' <span>Tracing is currently OFF</span>';
    return $controls;
}

}