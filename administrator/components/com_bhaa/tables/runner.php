<?php

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include library dependencies
jimport('joomla.filter.input');

/**
* Event Table class
*/
class BhaaTableRunner extends JTable
{
	var $id = null;
	var $alias;
  	var $name;
  	var $checked_out;
  	var $checked_out_time;


	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 * @since 1.0
	 */
	function __construct(& $db) {
		parent::__construct('#__bhaa_runner', 'id', $db);
	}
}
?>