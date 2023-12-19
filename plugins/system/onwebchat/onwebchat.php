<?php
/**
* @package		onWebChat.com Integration for Joomla!
* @type		    Plugin (System)
* @filename	    onwebchat.php
* @folder		<root>/plugins/system/onwebchat
* @version      2.3.4
* @modified		21 November 2023
* @author		onwebchat.com / onWebChat
* @website		http://www.onwebchat.com
* @license		GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
*
* @copyright (C) 2015-2023 onwebchat.com
*
* This program can be used under the terms of the GNU General Public License
* as published by the Free Software Foundation, either version 3 of the License.
*
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>
**/
defined( '_JEXEC' ) or die( 'Restricted access' );

use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Uri\Uri;
use Joomla\String\StringHelper;
use Joomla\CMS\HTML\HTMLHelper;

class plgSystemOnWebchat extends CMSPlugin
{
	protected $app;
	protected $runApp=0;
	
	function onBeforeRender()
	{
		$doc = $this->app->getDocument();
		if($doc->getType()!='html') return;
		
		if(!$this->app->isClient('site') && $this->app->input->getCmd('option')=='com_plugins' && $this->app->input->getCmd('layout')=='edit')
		{
			HTMLHelper::_('jquery.framework');
			$doc->addScript(Uri::root(true)."/plugins/system/onwebchat/onwebchat.js");
		}
		else if($this->app->isClient('site'))
		{
			$this->runApp=1;
		}
	}
		
	public function onAfterRender()
	{
		if(!$this->runApp)
		{
			return;
		}
				
		$chatid=StringHelper::trim($this->params->get('chatid',''));
		if(empty($chatid)) return;
		
		$pagesselect=(int)$this->params->get('pages-select',1);

		$showonpages=array_filter(explode(',',StringHelper::trim($this->params->get('showonpages',''))));
		$hideonpages=array_filter(explode(',',StringHelper::trim($this->params->get('hideonpages',''))));

		$currentPage=Uri::getInstance();
		$buffer = $this->app->getBody();

		$scripts=array();
		$scripts[]='<!-- onWebChat START -->';
        $scripts[]="<script type='text/javascript'>var onWebChat={ar:[], set: function(a,b){if (typeof onWebChat_==='undefined'){this.ar.push([a,b]);}else{onWebChat_.set(a,b);}},get:function(a){return(onWebChat_.get(a));},w:(function(){ var ga=document.createElement('script'); ga.type = 'text/javascript';ga.async=1;ga.src=('https:'==document.location.protocol?'https:':'http:') + '//www.onwebchat.com/clientchat/".$chatid."';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})()}</script>";

		$onwebchatapi = StringHelper::trim($this->params->get('onwebchatapi',''));
        if(!empty($onwebchatapi))
		{
            $scripts[]= '<script type="text/javascript">'.$onwebchatapi.'</script>';
        }
		
		$user = Factory::getUser();
		if(!$user->guest)
		{
			$scripts[]='<script type="text/javascript">onWebChat.set("name","'.$user->name.'");onWebChat.set("email","'.$user->email.'");</script>';
		}
		$scripts[]='<!-- onWebChat END -->';

		switch ($pagesselect)
		{
			case 2:
				$showSelect=false;
				foreach ($showonpages as $page)
				{
					$page = trim($page);
					if ($page=='home')
					{
					 	if (@$this->app->getMenu()->getActive()->home)
						{
							$showSelect = true;
						}
					}
					else if (strpos($currentPage, $page) !== false)
					{ // page!=home
						$showSelect = true;
					}
				}
				break;
			case 3:
				$showSelect=true;
				foreach ($hideonpages as $page)
				{
					$page = trim($page);
					if ($page=='home')
					{
						if (@$this->app->getMenu()->getActive()->home)
						{
							$showSelect = false;
						}
					}
					else if (strpos($currentPage, $page) !== false) 
					{
						$showSelect = false;
					}
				}
				break;
			default:
				$showSelect=true;
		}
		
		if($showSelect)
		{
			$buffer = str_replace("</body>",implode("\n",$scripts)."</body>",$buffer);
			$this->app->setBody($buffer);
		}
	}
}