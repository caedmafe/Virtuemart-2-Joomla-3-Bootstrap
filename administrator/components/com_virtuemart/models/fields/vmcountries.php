<?php
defined('JPATH_PLATFORM') or die;

/**
 *
 * @package	VirtueMart
 * @subpackage Plugins  - Elements
 * @author Valérie Isaksen
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2011 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: $
 */
/*
 * This class is used by VirtueMart Payment or Shipment Plugins
 * which uses JParameter
 * So It should be an extension of JElement
 * Those plugins cannot be configured througth the Plugin Manager anyway.
 */
  JFormHelper::loadFieldClass('list');
 
class JFormFieldVmCountries extends JFormFieldList {

	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  11.1
	 */
	public $type = 'vmcountries';

	protected function getOptions()
	{ 
		$options = array();

        $query = 'SELECT `virtuemart_country_id` AS value, `country_name` AS text FROM `#__virtuemart_countries`
               		WHERE `published` = 1 ORDER BY `country_name` ASC '
        ;
		$db =   JFactory::getDBO();
        $db->setQuery($query);
        $values = $db->loadObjectList();
		foreach ($values as $v) {
			$options[] = JHtml::_('select.option', $v->value, $v->text);
		}

        //BAD $class = 'multiple="true" size="10"';
		// Merge any additional options in the XML definition.
		$options = array_merge(parent::getOptions(), $options);

		return $options;
	}

}