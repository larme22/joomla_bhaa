<?php
/**
* @version    $Id: base.php 54 2008-04-22 14:50:30Z julienv $ 
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

jimport('joomla.application.component.model');

require_once( 'bhaa.php' );

/**
 * Joomla Tracks Component Front page Model
 *
 * @package		Tracks
 * @since 0.1
 */
class BhaaModelEvent extends BhaaModel
{
	function getResults()
	{
		$id = JRequest::getInt('e',1);
		$query = sprintf('SELECT rr.race,rr.runner,rr.position,r.surname,r.firstname FROM raceresult rr 
JOIN runner r on rr.runner=r.id 
WHERE rr.race = %d ORDER by rr.position;',$id);
		$this->getDB()->setQuery( $query );
		$x = $this->getDB()->loadAssocList();
		return $x;
	}
}
?>