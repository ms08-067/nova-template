<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the component HTML helpers.
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');

JHtml::_('behavior.formvalidation');
JHtml::_('behavior.keepalive');
JHtml::_('formbehavior.chosen', 'select');

$this->hiddenFieldsets = array();
$this->hiddenFieldsets[0] = 'basic-limited';
$this->configFieldsets = array();
$this->configFieldsets[0] = 'editorConfig';


$app = JFactory::getApplication();
$input = $app->input;
$assoc = JLanguageAssociations::isEnabled();

?>

<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'cancel')
		{
			Joomla.submitform(task, document.getElementById('item-form'));
		}
		else if(document.formvalidator.isValid(document.id('item-form'))){
			Joomla.submitform(task, document.getElementById('item-form'));
		}
	}
</script>

<form action="<?php echo JRoute::_('index.php?option=com_jv&controller=product'); ?>" method="post" name="adminForm" id="item-form" class="form-validate">

<?php //echo "<pre>";print_r($this->form); ?>
<div class="form-inline form-inline-header">

<div class="control-group ">
<div class="control-label"><label>Project Name:</label></div>
<div class="controls">
<?php echo $this->form->getInput('name_project'); ?>
</div>
</div>

<div class="control-group ">
<div class="control-label"><label  class="hasTooltip" id="short_des_lbl">Short description</label></div>
<div class="controls">
<?php echo $this->form->getInput('short_des'); ?>
</div>
</div>
</div>


	<div class="form-horizontal">
		<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'general')); ?>

		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'general', JText::_('COM_JV_PRODUCT_CONTENT', true)); ?>
		<div class="row-fluid">
			<div class="span9">
				<fieldset class="adminform">
					<?php echo $this->form->getInput('des'); ?>
					<?php
					//$editor = JFactory::getEditor();
					//echo $editor->display('des', "data-des", '100%', '450', '60', '20', false);
				?>
				</fieldset>
			</div>
<div class="span3">
<fieldset class="form-vertical">

<div class="control-group ">
<div class="control-label">
<label>Category</label>
</div>

<div class="controls">
<select aria-required="true" required="" name="id_categories_product" id="id_categories_product"  class="">
	<option value="1">- Templates Boostrap</option>
	<option value="2">- Templates Admin</option>
	<option value="3">- Templates Responsive</option>
	<option value="4">- Extension Joomla</option>
	<option value="5">- Templates Joomla</option>
</select>
<?php //echo $this->form->getInput('catid'); ?>

</div>
</div>

<div class="control-group ">

<div class="control-label">
<label id="publish_lbl" >Status</label>
</div>

<div class="controls">
<select name="publish" id="publish">
	<option value="1">Published</option>
	<option value="0">Unpublished</option>
</select>

</div>

</div>

<div class="control-group ">

<div class="control-label">
<label id="price_lbl" >Price</label>
</div>

<div class="controls">
<?php echo $this->form->getInput('price'); ?>
</div>

</div>


</fieldset>
</div>
			
</div>
		<?php echo JHtml::_('bootstrap.endTab'); ?>

		<?php // Do not show the publishing options if the edit form is configured not to. ?>
		<?php if ($params->show_publishing_options == 1) : ?>
			<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'publishing', JText::_('COM_CONTENT_FIELDSET_PUBLISHING', true)); ?>
			<div class="row-fluid form-horizontal-desktop">
				<div class="span6">
					<?php echo JLayoutHelper::render('joomla.edit.publishingdata', $this); ?>
				</div>
				<div class="span6">
					<?php echo JLayoutHelper::render('joomla.edit.metadata', $this); ?>
				</div>
			</div>
			<?php echo JHtml::_('bootstrap.endTab'); ?>
		<?php endif; ?>

		<?php // Do not show the images and links options if the edit form is configured not to. ?>
		<?php //if ($params->show_urls_images_backend == 1) : ?>
			<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'images', JText::_('COM_JV_PRODUCT_IMAGES', true)); ?>
			<div class="row-fluid form-horizontal-desktop">
				<div class="span6">
																

<div class="control-group ">
<div class="control-label"><label class="hasTooltip" id="img_thumb_lbl" >Images Thumb</label></div>

<div class="controls">
<?php echo $this->form->getInput('img_thumb'); ?>

</div>
</div>
											

<div class="control-group ">
<div class="control-label"><label  class="hasTooltip"  id="img_thumb_alt_lbl" >Alt images</label></div>
<div class="controls">
<?php echo $this->form->getInput('img_thumb_alt'); ?>
</div>
</div>
											

<div class="control-group ">
<div class="control-label">
<label class="hasTooltip"  id="jform_images_image_fulltext-lbl"  aria-invalid="false">Images</label>
</div>

<div class="controls">
<?php echo $this->form->getInput('img'); ?>
</div>
</div>

<div class="control-group">
<div class="control-label">
<label class="hasTooltip" id="img_alt_lbl"  aria-invalid="false">Alt images</label>
</div>
<div class="controls">
<?php echo $this->form->getInput('img_alt'); ?>
</div>
</div>
</div>

</div>

<?php echo JHtml::_('bootstrap.endTab'); ?>
		<input type="hidden" name="task" value="" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
