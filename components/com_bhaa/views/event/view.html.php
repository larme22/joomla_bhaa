<?php
/**
* @version    $Id: view.html.php 109 2008-05-24 11:05:07Z julienv $ 
* @package    JoomlaTracks
* @copyright	Copyright (C) 2008 Julien Vonthron. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla Tracks is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the Tracks component
 *
 * @static
 * @package		Tracks
 * @since 0.1
 */
class BHAAViewEvent extends JView
{
	function display($tpl = null)
	{	
		$application = &JFactory::getApplication();
		$params	= &$application->getParams();
		
		$id = &JRequest::getVar("e","0");
		
		//$model =& $this->getModel();
		//$events = $model->getEvents();
		$this->assignRef( 'params',$params );
		$this->assignRef( 'id',$id );
		
		$appparams =& JComponentHelper::getParams('com_bhaa');
		$this->assignRef('appparams',$appparams );
		
		parent::display($tpl);
	}
}
?>