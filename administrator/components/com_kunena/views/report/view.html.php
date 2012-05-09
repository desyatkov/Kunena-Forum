<?php
/**
 * Kunena Component
 * @package Kunena.Administrator
 * @subpackage Views
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

/**
 * Kunena report view for Kunena backend
 */
class KunenaAdminViewReport extends KunenaView {
	function displayDefault() {
		$this->systemreport = $this->get('SystemReport');
		JToolBarHelper::title ( '&nbsp;', 'kunena.png' );
		$this->display ();
	}
}