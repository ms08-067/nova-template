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
	if (task == 'article.cancel' || document.formvalidator.isValid(document.id('item-form')))
	{
		Joomla.submitform(task, document.getElementById('item-form'));
	}
}

</script>

<form action="<?php echo JRoute::_('index.php?option=com_jv&controller=product'); ?>" method="post" name="adminForm" id="item-form" class="form-validate">

	<?php echo JLayoutHelper::render('joomla.edit.title_alias', $this); ?>

	<div class="form-horizontal">
		<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'general')); ?>

		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'general', JText::_('COM_JV_PRODUCT_CONTENT', true)); ?>
		<div class="row-fluid">
			<div class="span9">
				<fieldset class="adminform">
					<?php echo $this->form->getInput('articletext'); ?>
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

<select aria-required="true" required="" name="product_catid" id="product_catid"  class="">
	<option value="1">- Templates Boostrap</option>
	<option value="2">- Templates Admin</option>
	<option value="3">- Templates Responsive</option>
	<option value="4">- Extension Joomla</option>
	<option value="5">- Templates Joomla</option>
</select>

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
<input  type="text" size="40" id="price" name="price">
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
			<div class="control-label"><label class="hasTooltip" for="jform_images_image_intro" id="jform_images_image_intro-lbl" >Images Thumb</label></div>
		<div class="controls"><div class="input-prepend input-append">
<div class="media-preview add-on">
<span title="" class="hasTipPreview"><i class="icon-eye"></i></span>
</div>
	<input type="text" class="input-small" readonly="readonly" value="" id="jform_images_image_intro" name="image_intro">
<a rel="{handler: 'iframe', size: {x: 800, y: 500}}" href="index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;asset=com_jv&amp;author=&amp;fieldid=jform_images_image_intro&amp;folder=" class="modal btn">
Select</a><a onclick="
jInsertFieldValue('', 'jform_images_image_intro');
return false;
" href="#" title="" class="btn hasTooltip" data-original-title="Clear">
<i class="icon-remove"></i></a>
</div></div>
</div>
											

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip"  id="jform_images_image_intro_alt-lbl" >Alt images</label></div>
			<div class="controls"><input type="text" size="20" value="" id="jform_images_image_intro_alt" name="image_intro_alt"></div>
</div>
											

<div class="control-group ">
			<div class="control-label"><label class="hasTooltip"  id="jform_images_image_fulltext-lbl"  aria-invalid="false">Images</label></div>
		<div class="controls"><div class="input-prepend input-append">
<div class="media-preview add-on">
<span title="" class="hasTipPreview"><i class="icon-eye"></i></span>
</div>
	<input type="text" class="input-small" readonly="readonly" value="" id="jform_images_image_fulltext" name="image_fulltext" aria-invalid="false">
<a rel="{handler: 'iframe', size: {x: 800, y: 500}}" href="index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;asset=com_jv&amp;author=&amp;fieldid=jform_images_image_fulltext&amp;folder=" class="modal btn">
Select</a><a onclick="
jInsertFieldValue('', 'jform_images_image_fulltext');
return false;
" href="#" title="" class="btn hasTooltip" data-original-title="Clear">
<i class="icon-remove"></i></a>
</div></div>
</div>
											

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_images_image_fulltext_alt" id="jform_images_image_fulltext_alt-lbl"  aria-invalid="false">Alt images</label></div>
		<div class="controls"><input type="text" size="20" value="" id="jform_images_image_fulltext_alt" name="image_fulltext_alt" aria-invalid="false"></div>
</div>
									</div>
			</div>
			<?php echo JHtml::_('bootstrap.endTab'); ?>
		<?php //endif; ?>
		
		<button class="btn btn-small btn-success"><span class="icon-apply icon-white"></span>Save</button>
		<input type="hidden" name="task" value="" />
		<?php echo JHtml::_('form.token'); ?>
		</div>
</form>
