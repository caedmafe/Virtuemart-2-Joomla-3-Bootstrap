<?php
/**
*
* Description
*
* @package	VirtueMart
* @subpackage
* @author
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id: view.html.php 3006 2011-04-08 13:16:08Z Milbo $
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

// Load the view framework
if(!class_exists('VmView'))require(JPATH_VM_ADMINISTRATOR.DS.'helpers'.DS.'vmview.php');

/**
 * HTML View class for the VirtueMart Component
 *
 * @package		VirtueMart
 * @author
 */
class VirtuemartViewCustom extends VmView {

	function display($tpl = null) {

		// Load the helper(s)


		$this->loadHelper('html');
		$this->loadHelper('vmcustomplugin');
		$model = VmModel::getModel();
		$this->loadHelper('permissions');
		// TODO Make an Icon for custom
		JToolBarHelper::custom('createClone', 'copy', 'copy',  JText::_('COM_VIRTUEMART_CLONE'), true);
		JToolBarHelper::custom('toggle.admin_only.1', 'publish','', JText::_('COM_VIRTUEMART_TOGGLE_ADMIN'), true);
		JToolBarHelper::custom('toggle.admin_only.0', 'unpublish','', JText::_('COM_VIRTUEMART_TOGGLE_ADMIN'), true);
		JToolBarHelper::custom('toggle.is_hidden.1', 'publish','', JText::_('COM_VIRTUEMART_TOGGLE_HIDDEN'), true);
		JToolBarHelper::custom('toggle.is_hidden.0', 'unpublish','', JText::_('COM_VIRTUEMART_TOGGLE_HIDDEN'), true);

		$this->addStandardDefaultViewCommands();
		$this->addStandardDefaultViewLists($model);

		$this->customs = $model->getCustoms(JRequest::getInt('custom_parent_id'),JRequest::getWord('keyword'));
		$this->pagination = $model->getPagination();

		parent::display('results');
		echo $this->AjaxScripts();
	}
}
// pure php no closing tag