<?php
/**
* @version    $Id: tracks.php 109 2008-05-24 11:05:07Z julienv $ 
* @package    JoomlaTracks
* @copyright	Copyright (C) 2008 Julien Vonthron. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla Tracks is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// ACL rules
//$acl = &JFactory::getACL();
//$acl->addACL( 'com_tracks', 'manage', 'users', 'super administrator' );
/* Additional access groups */
//$acl->addACL( 'com_tracks', 'manage', 'users', 'administrator' );
    
// Require the base controller
require_once (JPATH_COMPONENT.DS.'controller.php');
require_once (JPATH_COMPONENT.DS.'helpers'.DS.'bhaa.php');
require_once (JPATH_COMPONENT.DS.'helpers'.DS.'bhaahtml.php');
//require_once(JPATH_COMPONENT_ADMINISTRATOR.DS.'helpers'.DS.'joodb.php');
//JTable::addIncludePath(JPATH_COMPONENT_ADMINISTRATOR.DS.'models');
//JTable::addIncludePath(JPATH_COMPONENT_ADMINISTRATOR.DS.'tables');


// Require specific controller if requested
if($controller = JRequest::getWord('controller')) {
    $path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
    if (file_exists($path)) {
        require_once $path;
    } else {
        $controller = '';
    }
}

// Create the controller
$classname	= 'BhaaController'.ucfirst($controller);
$controller = new $classname( );

//$controller->addModelPath(JPATH_COMPONENT_ADMINISTRATOR.DS.'models');

// Perform the Request task
$controller->execute( JRequest::getVar('task'));

// Redirect if set by the controller
$controller->redirect();
