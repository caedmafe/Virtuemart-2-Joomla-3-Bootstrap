<?php
/**
*
* User listing view
*
* @package	VirtueMart
* @subpackage User
* @author Oscar van Eijk
* @link http://www.virtuemart.net
* @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* @version $Id: default.php 6477 2012-09-24 14:33:54Z Milbo $
*/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
?>
	<div id="resultscounter"><?php echo $this->pagination->getResultsCounter();?></div>
	<table class="table table-striped">
		<thead>
		<tr>
			<th width="10">
				<input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this);" />
			</th>

			<th><?php echo $this->sort('ju.username', 'COM_VIRTUEMART_USERNAME')  ?></th>
			<th><?php echo $this->sort('ju.name', 'COM_VIRTUEMART_USER_DISPLAYED_NAME')  ?></th>
			<th class="autosize"><?php echo JText::_('COM_VIRTUEMART_EMAIL'); ?></th>
			<th><?php echo JText::_('COM_VIRTUEMART_USER_GROUP'); ?></th>
			<th><?php echo $this->sort('shopper_group_name', 'COM_VIRTUEMART_SHOPPERGROUP')  ?></th>
			<?php if(Vmconfig::get('multix','none')!=='none'){ ?>
			<th class="autosize"><?php echo JText::_('COM_VIRTUEMART_USER_IS_VENDOR'); ?></th>
			<?php } ?>
			<th><?php echo  JText::_('COM_VIRTUEMART_ID') ?></th>
		</tr>
		</thead>
		<?php

		for ($i = 0, $n = count($this->userList); $i < $n; $i++) {
			$row = $this->userList[$i];
			$checked = JHTML::_('grid.id', $i, $row->id);
			$is_vendor = $this->toggle($row->is_vendor, $i, 'toggle.user_is_vendor');
		?>
			<tr >
				<td>
					<?php echo $checked; ?>
				</td>

				<td align="left">
					<?php echo $this->editLink($row->id, $row->username, 'virtuemart_user_id[]');  ?>">
				</td>
				<td align="left">
					<?php echo $row->name; ?>
				</td>
				<td align="left" class="autosize">
					<?php echo $row->email; ?>
				</td>
				<td align="left">
					<?php
					echo $this->perm->getPermissions($row->id);
					if(empty($row->perms)) $row->perms = 'shopper';
					echo ' (' . $row->perms . ')';
					?>
				</td>
				<td align="left">
					<?php
					if(empty($row->shopper_group_name)) $row->shopper_group_name = $this->defaultShopperGroup;
					echo $row->shopper_group_name;
					?>
				</td>
				<?php if(Vmconfig::get('multix','none')!=='none'){ ?>
				<td align="center">
					<?php echo $is_vendor; ?>
				</td>
				<?php } ?>
				<td align="right">
					<?php echo $row->id; ?>
				</td>
			</tr>
			<?php
		}
		?>
		<tfoot>
			<tr>
				<td colspan="9">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
	</table>

	<?php echo $this->addStandardHiddenToForm(); ?>

