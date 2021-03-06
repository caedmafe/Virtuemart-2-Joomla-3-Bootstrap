<?php
/**
 *
 * Description
 *
 * @package	VirtueMart
 * @subpackage Config
 * @author RickG
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2010 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: default_shopfront.php 6459 2012-09-16 16:08:50Z Milbo $
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

?>
<div class="row-fluid">
<div class="span6">
	<fieldset>
		<legend><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_MORE_CORE_SETTINGS') ?></legend>
		<table width="100%">
			<tr>
				<td class="key"><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_SHOW_EMAILFRIEND_TIP'); ?>">
						<label for="show_emailfriend"><?php echo JText::_('COM_VIRTUEMART_ADMIN_SHOW_EMAILFRIEND') ?>
					</label> </div>
				</td>
				<td>
				<?php echo VmHTML::checkbox('show_emailfriend', VmConfig::get('show_emailfriend',0)); ?>
				</td>
			</tr>
			<tr>
				<td class="key"><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_SHOW_PRINTICON_TIP'); ?>">
						<label for="show_printicon"><?php echo JText::_('COM_VIRTUEMART_ADMIN_SHOW_PRINTICON') ?>
					</label> </div>
				</td>
				<td>
				<?php echo VmHTML::checkbox('show_printicon', VmConfig::get('show_printicon',1)); ?>
				</td>
			</tr>

			<tr>
				<td class="key"><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_PDF_ICON_SHOW_EXPLAIN'); ?>">
						<label for="pdf_icon"><?php echo JText::_('COM_VIRTUEMART_PDF_ICON_SHOW') ?>
					</label> </div>
				</td>
				<td>
				<?php echo VmHTML::checkbox('pdf_icon', VmConfig::get('pdf_icon')); ?>
				</td>
			</tr>
			<tr>
				<td class="key"><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_ASK_QUESTION_SHOW_EXPLAIN'); ?>">
						<label for="ask_question"><?php echo JText::_('COM_VIRTUEMART_ASK_QUESTION_SHOW') ?>
					</label> </div>
				</td>
				<td>
				<?php echo VmHTML::checkbox('ask_question', VmConfig::get('ask_question')); ?>
				</td>
			</tr>
			<tr>
				<td class="key"><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_ASK_QUESTION_MIN_LENGTH_EXPLAIN'); ?>">
						<label for="asks_minimum_comment_length"><?php echo JText::_('COM_VIRTUEMART_ASK_QUESTION_MIN_LENGTH') ?>
					</label> </div>
				</td>
				<td>
					<input type="text" value="<?php echo VmConfig::get('asks_minimum_comment_length',50); ?>" class="inputbox input-mini" size="4" name="asks_minimum_comment_length">
				</td>
			</tr>
			<tr>
				<td class="key"><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_ASK_QUESTION_MAX_LENGTH_EXPLAIN'); ?>">
						<label for="asks_maximum_comment_length"><?php echo JText::_('COM_VIRTUEMART_ASK_QUESTION_MAX_LENGTH') ?>
					</label> </div>
				</td>
				<td>
					<input type="text" value="<?php echo VmConfig::get('asks_maximum_comment_length',2000); ?>" class="inputbox input-mini" size="4" name="asks_maximum_comment_length">
				</td>
			</tr>
			<tr>
				<td class="key"><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_PRODUCT_NAVIGATION_SHOW_EXPLAIN'); ?>">
						<label for="product_navigation"><?php echo JText::_('COM_VIRTUEMART_PRODUCT_NAVIGATION_SHOW') ?>
					</label> </div>
				</td>
				<td>
				<?php echo VmHTML::checkbox('product_navigation', VmConfig::get('product_navigation')); ?>
				</td>
			</tr>
			<tr>
				<td class="key"><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_RECCOMEND_UNATUH_EXPLAIN'); ?>">
						<label for="recommend_unauth"><?php echo JText::_('COM_VIRTUEMART_RECCOMEND_UNATUH') ?>
					</label> </div>
				</td>
				<td>
				<?php echo VmHTML::checkbox('recommend_unauth', VmConfig::get('recommend_unauth')); ?>
				</td>
			</tr>
			<tr>
			<td class="key">
				<div class="hasTooltip" title="<?php echo JText::_('COM_VIRTUEMART_LIST_LIMIT_EXPLAIN'); ?>">
				<label for="list_limit"><?php echo JText::_('COM_VIRTUEMART_LIST_LIMIT') ?></label>
				</div>
			</td>
			<td>
				<input type="text" value="<?php echo VmConfig::get('list_limit',10); ?>" class="inputbox input-mini" size="4" name="list_limit">
			</td>
			</tr>
<?php	/*		<tr>
	    	<td class="key">
				<div class="hasTooltip" title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN'); ?>">
				<label for="show_products_out_of_stock"><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS') ?></label>
				</div>
	    	</td>
	    	<td valign="top">
				<?php echo VmHTML::checkbox('show_products_out_of_stock', VmConfig::get('show_products_out_of_stock')); ?>
	    	</td>
			</tr>
			<tr> */?>
			<tr>
	    	<td class="key">
				<div class="hasTooltip" title="<?php echo JText::_('COM_VIRTUEMART_DISPLAY_STOCK_EXPLAIN'); ?>">
				<label for="display_stock"><?php echo JText::_('COM_VIRTUEMART_DISPLAY_STOCK') ?></label>
				</div>
	   	 	</td>
	    	<td>
				<?php echo VmHTML::checkbox('display_stock', VmConfig::get('display_stock')); ?>
	    	</td>
			</tr>
			<tr>
	    	<td class="key">
				<div class="hasTooltip" title="<?php echo JText::_('COM_VIRTUEMART_COUPONS_ENABLE_EXPLAIN'); ?>">
				<label for="coupons_enable"><?php echo JText::_('COM_VIRTUEMART_COUPONS_ENABLE') ?></label>
				</div>
	   	 	</td>
	    	<td>
				<?php echo VmHTML::checkbox('coupons_enable', VmConfig::get('coupons_enable')); ?>
	    	</td>
			</tr>
			<tr>
	    	<td class="key">
				<div class="hasTooltip" title="<?php echo JText::_('COM_VIRTUEMART_UNCAT_CHILD_PRODUCTS_SHOW_EXPLAIN'); ?>">
				<label for="show_uncat_child_products"><?php echo JText::_('COM_VIRTUEMART_UNCAT_CHILD_PRODUCTS_SHOW') ?></label>
				</div>
	   	 	</td>
	    	<td>
				<?php echo VmHTML::checkbox('show_uncat_child_products', VmConfig::get('show_uncat_child_products')); ?>
	    	</td>
			</tr>
			<tr>
	    	<td class="key">
				<div class="hasTooltip" title="<?php echo JText::_('COM_VIRTUEMART_COUPONS_EXPIRE_EXPLAIN'); ?>">
				<label for="coupons_default_expire"><?php echo JText::_('COM_VIRTUEMART_COUPONS_EXPIRE') ?></label>
				</div>
	    	</td>
			<td>
				<?php
					// TODO This must go to the view.html.php.... but then... that goes for most of the config sruff I'ld say :-S
					$_defaultExpTime = array(
						 '1,D' => '1 '.JText::_('COM_VIRTUEMART_DAY')
						,'1,W' => '1 '.JText::_('COM_VIRTUEMART_WEEK')
						,'2,W' => '2 '.JText::_('COM_VIRTUEMART_WEEK_S')
						,'1,M' => '1 '.JText::_('COM_VIRTUEMART_MONTH')
						,'3,M' => '3 '.JText::_('COM_VIRTUEMART_MONTH_S')
						,'6,M' => '6 '.JText::_('COM_VIRTUEMART_MONTH_S')
						,'1,Y' => '1 '.JText::_('COM_VIRTUEMART_YEAR')
					);
				echo VmHTML::selectList('coupons_default_expire',VmConfig::get('coupons_default_expire'),$_defaultExpTime,1, '', '','input-medium')
				?>
			</td>
		</tr>
		<tr>
	    	<td class="key">
				<div class="hasTooltip" title="<?php echo JText::_('COM_VIRTUEMART_WEIGHT_UNIT_DEFAULT_EXPLAIN'); ?>">
				<label for="weight_unit_default"><?php echo JText::_('COM_VIRTUEMART_WEIGHT_UNIT_DEFAULT') ?></label>
				</div>
	    	</td>
			<td>
				<?php
				echo ShopFunctions::renderWeightUnitList('weight_unit_default', VmConfig::get('weight_unit_default') );
				?>
			</td>
			</tr>

			<tr>
	    	<td class="key">
				<div class="hasTooltip" title="<?php echo JText::_('COM_VIRTUEMART_LWH_UNIT_DEFAULT_EXPLAIN'); ?>">
				<label for="weight_unit_default"><?php echo JText::_('COM_VIRTUEMART_LWH_UNIT_DEFAULT') ?></label>
				</div>
	    	</td>
			<td>
				<?php
				echo ShopFunctions::renderLWHUnitList('lwh_unit_default', VmConfig::get('lwh_unit_default') );
				?>
			</td>
			</tr>
			
			<tr>
	    	<td class="key">
				<div class="hasTooltip" title="<?php echo JText::_('COM_VIRTUEMART_LATEST_PRODUCTS_DAYS_EXPLAIN'); ?>">
				<label for="latest_products_weeks"><?php echo JText::_('COM_VIRTUEMART_LATEST_PRODUCTS_DAYS') ?></label>
				</div>
	    	</td>
			<td>
				<input type="text" value="<?php echo VmConfig::get('latest_products_days',7); ?>" class="inputbox input-mini" size="4" name="latest_products_days">
			</td>
			</tr>
			
			<tr>
	    	<td class="key">
				<div class="hasTooltip" title="<?php echo JText::_('COM_VIRTUEMART_LATEST_PRODUCTS_ORDERBY_EXPLAIN'); ?>">
				<label for="latest_products_orderBy"><?php echo JText::_('COM_VIRTUEMART_LATEST_PRODUCTS_ORDERBY') ?></label>
				</div>
	    	</td>
			<td>
				<?php
					
					$latest_products_orderBy = array(
						'modified_on'	=>	JText::_('JGLOBAL_FIELD_MODIFIED_LABEL'),
						'created_on'	=>	JText::_('JGLOBAL_CREATED_DATE')
					);
				echo VmHTML::selectList('latest_products_orderBy',VmConfig::get('latest_products_orderBy','created_on'),$latest_products_orderBy, 1, '', '','input-medium');
				?>
			</td>
			</tr>

		</table>
	</fieldset>
</div>
<div class="span6">
	<fieldset class="form-horizontal">
		<legend><div class="hasTooltip" title="<?php echo JText::_('COM_VIRTUEMART_CFG_POOS_ENABLE_EXPLAIN'); ?>">
			<?php echo JText::_('COM_VIRTUEMART_CFG_POOS_ENABLE') ?></div></legend>

		<?php

		$options = array(
		'none'	=>	JText::_('COM_VIRTUEMART_ADMIN_CFG_POOS_NONE'),
		'disableit'	=>	JText::_('COM_VIRTUEMART_ADMIN_CFG_POOS_DISABLE_IT'),
		'disableit_children'	=>	JText::_('COM_VIRTUEMART_ADMIN_CFG_POOS_DISABLE_IT_CHILDREN'),
		'disableadd'	=>	JText::_('COM_VIRTUEMART_ADMIN_CFG_POOS_DISABLE_ADD'),
		'risetime'	=> JText::_('COM_VIRTUEMART_ADMIN_CFG_POOS_RISE_AVATIME')
	);

		echo VmHTML::selectList('stockhandle', VmConfig::get('stockhandle','none'),$options, 1, '', '','input-xlarge');
		?>
		<div class="control-group">
			<span class="control-label hasTooltip"
				title="<?php echo JText::_('COM_VIRTUEMART_CFG_LOWSTOCK_NOTIFY_TIP'); ?>">
				<?php echo JText::_('COM_VIRTUEMART_CFG_LOWSTOCK_NOTIFY') ?>
			</span>
			<div class="controls">

			<?php echo VmHTML::checkbox('lstockmail', VmConfig::get('lstockmail')); ?>
			</div>
		</div>
		<div style="font-weight:bold;" class="hasTooltip" title="<?php echo JText::_('COM_VIRTUEMART_AVAILABILITY_EXPLAIN'); ?>">
					<?php echo JText::_('COM_VIRTUEMART_AVAILABILITY') ?>
		</div>
		<div class="control-group">
			<span class="control-label hasTooltip">
				<?php echo JText::_('COM_VIRTUEMART_AVAILABILITY') ?>
			</span>
			<div class="controls">
				<input type="text" class="input-mini hasTooltip" title="<?php echo '<b>'.JText::_('COM_VIRTUEMART_AVAILABILITY').'</b><br/ >'.JText::_('COM_VIRTUEMART_PRODUCT_FORM_AVAILABILITY_TOOLTIP1') ?>" id="product_availability" name="rised_availability" value="<?php echo VmConfig::get('rised_availability'); ?>" />
			</div>
		</div>
		<?php echo JHTML::_('list.images', 'image', VmConfig::get('rised_availability'), " ", $this->imagePath); ?>
		<span class="icon-nofloat vmicon vmicon-16-info hasTooltip" title="<?php echo '<b>'.JText::_('COM_VIRTUEMART_AVAILABILITY').'</b><br/ >'.JText::sprintf('COM_VIRTUEMART_PRODUCT_FORM_AVAILABILITY_TOOLTIP2',  $this->imagePath ) ?>"></span>
		<div class="clearfix"></div>
		<img border="0" id="imagelib" alt="<?php echo JText::_('COM_VIRTUEMART_PREVIEW'); ?>" name="imagelib" src="<?php if (VmConfig::get('rised_availability')) echo JURI::root(true).$this->imagePath.VmConfig::get('rised_availability');?>"/>
	</fieldset>
	<fieldset class="row-fluid">
		<legend><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_TITLE') ?></legend>
		<table width="100%">
			<tr>
				<td class="key"><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_REVIEWS_AUTOPUBLISH_TIP'); ?>">
						<label for="reviews_autopublish"><?php echo JText::_('COM_VIRTUEMART_REVIEWS_AUTOPUBLISH') ?>
						</label> </div>
				</td>
				<td>
					<?php echo VmHTML::checkbox('reviews_autopublish', VmConfig::get('reviews_autopublish')); ?>
				</td>
			</tr>
			<tr>
				<td class="key"><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH_TIP'); ?>">
						<label for="reviews_minimum_comment_length"><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH') ?>
						</label> </div>
				</td>
				<td><input
					type="text"
					size="6"
					id="reviews_minimum_comment_length"
					name="reviews_minimum_comment_length"
					class="inputbox input-mini"
					value="<?php echo VmConfig::get('reviews_minimum_comment_length'); ?>" />
				</td>
			</tr>
			<tr>
				<td class="key"><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH_TIP'); ?>">
						<label><?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH'); ?>
						</label> </div>
				</td>
				<td><input
					type="text"
					size="6"
					id="reviews_maximum_comment_length"
					name="reviews_maximum_comment_length"
					class="inputbox input-mini"
					value="<?php echo VmConfig::get('reviews_maximum_comment_length'); ?>" />
				</td>
			</tr>
			<tr>
				<td colspan=2><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_SHOW_EXPLAIN'); ?>">
					<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_SHOW') ?>
					</div>
				<?php
				$showReviewFor = array(	'none' => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_SHOW_NONE'),
									'registered' => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_SHOW_REGISTERED'),
									'all' => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_SHOW_ALL')
				); //showReviewFor
				echo VmHTML::selectList('showReviewFor', VmConfig::get('showReviewFor',2),$showReviewFor, 1, '', '','input-xlarge'); ?>
				</td>
			</tr>

			<tr>
				<td colspan=2><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_EXPLAIN'); ?>">
					<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW') ?>
					</div>

					<?php
					$showReviewFor = array('none' => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MODE_NONE'),
									'bought' => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MODE_BOUGHT_PRODUCT'),
									'registered' => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MODE_REGISTERED'),
					//	3 => JText::_('COM_VIRTUEMART_ADMIN_CFG_REVIEW_MODE_ALL')
					);
					echo VmHTML::selectList('reviewMode', VmConfig::get('reviewMode',2),$showReviewFor, 1, '', '','input-xlarge'); ?>
				</td>
			</tr>

			<tr>
				<td colspan=2><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_SHOW_EXPLAIN'); ?>">
							<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_SHOW') ?>
					</div>
					<?php
					$showReviewFor = array(	'none' => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_SHOW_NONE'),
										'registered' => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_SHOW_REGISTERED'),
										'all' => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_SHOW_ALL')
					);
					echo VmHTML::selectList('showRatingFor', VmConfig::get('showRatingFor',2),$showReviewFor, 1, '', '','input-xlarge'); ?>
					</td>
			</tr>
			<tr>
				<td colspan=2><div
					class="hasTooltip"
					title="<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_EXPLAIN'); ?>">
						<?php echo JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING') ?>
					</div>
						<?php
						$showReviewFor = array('none' => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_MODE_NONE'),
										'bought' => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_MODE_BOUGHT_PRODUCT'),
										'registered' => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_MODE_REGISTERED'),
						//	3 => JText::_('COM_VIRTUEMART_ADMIN_CFG_RATING_MODE_ALL')	//TODO write system for all users (cookies)
						);
						echo VmHTML::selectList('ratingMode', VmConfig::get('ratingMode',2),$showReviewFor, 1, '', '','input-xlarge'); ?>
				</td>
			</tr>

		</table>
	</fieldset>
</div>
</div>
<script type="text/javascript">
	jQuery('#image').change( function() {
		var $newimage = jQuery(this).val();
		jQuery('#product_availability').val($newimage);
		jQuery('#imagelib').attr({ src:'<?php echo JURI::root(true).$this->imagePath ?>'+$newimage, alt:$newimage });
		})
</script>