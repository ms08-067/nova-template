<?php
/**
 * com_jv
 */
defined('_JEXEC') or die;
?>
<form class="form-validate" id="frmproduct" name="adminForm" method="post" action="<?php echo JRoute::_('index.php?option=com_jv&controller=product'); ?>">
<div class="form-inline form-inline-header">
	
<div class="span6">
<div class="control-group ">
<div class="control-label">
<label title="" class="required invalid" id="" aria-invalid="true">Title</label></div>
<div class="controls">
<input style="width: 100%;" type="text" aria-required="true" required="" size="40" class="input-large-text invalid" value="" id="title" name="title" aria-invalid="true">
</div>
</div>
</div>

<div class="span6">
<div class="control-group ">
<div class="control-label">
<label class="hasTooltip" id="">Short Description</label>
</div>
<div class="controls">

<input style="width: 100%;" type="text" size="40" value="" id="" name="short_des">

</div>
</div>
</div>

</div>

<div class="form-horizontal">		
<ul id="myTabTabs" class="nav nav-tabs">
<li class=" active"><a data-toggle="tab" href="#general">Content</a></li>
<li class=""><a data-toggle="tab" href="#images">Images</a></li>

</ul>
<div id="myTabContent" class="tab-content">
		
<div class="tab-pane active" id="general">
		<div class="row-fluid">
			<div class="span9">
				<?php
					$editor = JFactory::getEditor();
					echo $editor->display('des', "data-des", '100%', '450', '60', '20', false);
				?>
			</div>
			<div class="span3">
				<fieldset class="form-vertical">

<div class="control-group ">
<div class="control-label">
<label id="jform_catid-lbl">Category</label>
</div>

<div class="controls">

<select aria-required="true" required="" name="temp_catid" id="temp_catid"  class="">
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
<label id="temp_status_lbl" >Status</label>
</div>

<div class="controls">
<select name="temp_status" id="temp_status">
	<option value="1">Published</option>
	<option value="0">Unpublished</option>
</select>

</div>

</div>

</fieldset>
</div>
</div>
		
</div>
														
<div class="tab-pane" id="images">
			<div class="row-fluid form-horizontal-desktop">
				<div class="span12">
																

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" id="" >Intro Image</label></div>
		<div class="controls"><div class="input-prepend input-append">
<div class="media-preview add-on">
<span title="" class="hasTipPreview"><i class="icon-eye"></i></span>
</div>
	<input type="text" class="input-small" readonly="readonly" value="" id="" name="img_thumb">
<a rel="" href=""  class="modal btn">
Select</a>
</div></div>
</div>
																				

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip"  id="" >Alt text</label></div>
		<div class="controls"><input type="text" size="40" value="" id="" name="img_thumb_alt"></div>
</div>
																			

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip"  id="" >Full article image</label></div>
		<div class="controls"><div class="input-prepend input-append">
<div class="media-preview add-on">
<span title="" class="hasTipPreview"><i class="icon-eye"></i></span>
</div>
<input type="text" class="input-small" readonly="readonly" value="" id="" name="img">
<a rel="" href="" title="Select" class="modal btn">
Select</a><a onclick="" href="#" title="" class="btn hasTooltip" data-original-title="Clear">
<i class="icon-remove"></i></a>
</div></div>
</div>
											

											

<div class="control-group ">
<div class="control-label"><label title="" class="hasTooltip"  id="" >Alt text</label></div>
<div class="controls"><input type="text" size="20" value="" id="" name="img_alt"></div>
</div>

</div>
</div>
			
</div>				
</div>

<button class="btn btn-small btn-success"><span class="icon-apply icon-white"></span>Save</button>

<input type="hidden" value="" name="layout">
<input type="hidden" name="controller" value="product" />
<input type="hidden" name="task" value="" />
<?php echo JHTML::_( 'form.token' ); ?>

</div>
</form>
