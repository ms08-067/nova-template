
 <div class="container-fluid container-main">
	<section id="content">
		<!-- Begin Content -->
		
		<div class="row-fluid">
							<div class="span12">
										
<div id="system-message-container">
</div>

<form class="form-validate" id="item-form" name="adminForm" method="post" action="/nova/administrator/index.php?option=com_content&amp;layout=edit&amp;id=0">

	<div class="form-inline form-inline-header">
	
<div class="span6">
<div class="control-group ">
<div class="control-label">
<label title="" class="hasTooltip required invalid" for="jform_title" id="jform_title-lbl" data-original-title="&lt;strong&gt;Title&lt;/strong&gt;" aria-invalid="true">Title<span class="star">&nbsp;*</span></label></div>
<div class="controls">
<input style="width: 100%;" type="text" aria-required="true" required="" size="40" class=" input-large-text invalid" value="" id="title" name="title" aria-invalid="true">
	</div>
</div>
</div>

<div class="span6">
<div class="control-group ">
<div class="control-label">
<label title="" class="hasTooltip" for="jform_alias" id="jform_alias-lbl">Short Description</label>
</div>
<div class="controls">

<input style="width: 100%;" type="text" size="40" value="" id="jform_alias" name="short_des">

</div>
</div>
</div>

</div>

	<div class="form-horizontal">
		
<ul id="myTabTabs" class="nav nav-tabs">
<li class=" active"><a data-toggle="tab" href="#general">Content</a></li>
<li class=""><a data-toggle="tab" href="#images">Images and links</a></li>

</ul>
<div id="myTabContent" class="tab-content">
		
<div class="tab-pane active" id="general">
		<div class="row-fluid">
			<div class="span9">
				<?php
					$editor = JFactory::getEditor();
					echo $editor->display('temp', "", '100%', '450', '60', '20', false);
					
				?>
			</div>
			<div class="span3">
				<fieldset class="form-vertical">

<div class="control-group ">
<div class="control-label">
<label id="jform_catid-lbl">Category</label>
</div>

<div class="controls">
<select aria-required="true" required="" name="jform[catid]" id="jform_catid"  class="chzn-done">
	<option value="2">- Uncategorised</option>
	<option value="14">- Document-Blog</option>
	<option value="8">- - Java Development</option>
	<option value="9">- - Android </option>
	<option value="10">- - Cordova/Phonegap</option>
	<option value="11">- - Phonegap</option>
	<option value="12">- - Sencha</option>
	<option value="13">- - PHP Development</option>
</select>

</div>
</div>




<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_state" id="jform_state-lbl" data-original-title="&lt;strong&gt;Status&lt;/strong&gt;&lt;br /&gt;Set publication status.">Status</label></div>
			<div class="controls">
		<select size="1" class="chzn-color-state chzn-done" name="jform[state]" id="jform_state">
	<option selected="selected" value="1">Published</option>
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
			<div class="control-label"><label title="" class="hasTooltip" for="jform_images_image_intro" id="jform_images_image_intro-lbl" data-original-title="&lt;strong&gt;Intro Image&lt;/strong&gt;&lt;br /&gt;Image for the intro text layouts such as blogs and featured">Intro Image</label></div>
		<div class="controls"><div class="input-prepend input-append">
<div class="media-preview add-on">
<span title="" class="hasTipPreview"><i class="icon-eye"></i></span>
</div>
	<input type="text" class="input-small" readonly="readonly" value="" id="jform_images_image_intro" name="img_thumb">
<a rel="{handler: 'iframe', size: {x: 800, y: 500}}" href="index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;asset=com_content&amp;author=&amp;fieldid=jform_images_image_intro&amp;folder=" title="Select" class="modal btn">
Select</a><a onclick="
jInsertFieldValue('', 'jform_images_image_intro');
return false;
" href="#" title="" class="btn hasTooltip" data-original-title="Clear">
<i class="icon-remove"></i></a>
</div></div>
</div>
																				

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip"  id="jform_images_image_intro_alt-lbl" data-original-title="&lt;strong&gt;Alt text&lt;/strong&gt;&lt;br /&gt;Alternative text used for visitors without access to images. Replaced with caption text if it is present.">Alt text</label></div>
		<div class="controls"><input type="text" size="40" value="" id="jform_images_image_intro_alt" name="img_thumb_alt"></div>
</div>
																			

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_images_image_fulltext" id="jform_images_image_fulltext-lbl" data-original-title="&lt;strong&gt;Full article image&lt;/strong&gt;&lt;br /&gt;Image for the single article display">Full article image</label></div>
		<div class="controls"><div class="input-prepend input-append">
<div class="media-preview add-on">
<span title="" class="hasTipPreview"><i class="icon-eye"></i></span>
</div>
	<input type="text" class="input-small" readonly="readonly" value="" id="jform_images_image_fulltext" name="jform[images][image_fulltext]">
<a rel="{handler: 'iframe', size: {x: 800, y: 500}}" href="index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;asset=com_content&amp;author=&amp;fieldid=jform_images_image_fulltext&amp;folder=" title="Select" class="modal btn">
Select</a><a onclick="
jInsertFieldValue('', 'jform_images_image_fulltext');
return false;
" href="#" title="" class="btn hasTooltip" data-original-title="Clear">
<i class="icon-remove"></i></a>
</div></div>
</div>
											

											

<div class="control-group ">
			<div class="control-label"><label title="" class="hasTooltip" for="jform_images_image_fulltext_alt" id="jform_images_image_fulltext_alt-lbl" data-original-title="&lt;strong&gt;Alt text&lt;/strong&gt;&lt;br /&gt;Alternative text used for visitors without access to images. Replaced with caption text if it is present.">Alt text</label></div>
		<div class="controls"><input type="text" size="20" value="" id="jform_images_image_fulltext_alt" name="jform[images][image_fulltext_alt]"></div>
</div>
											
</div>

			</div>
			
</div>				
</div>

<input type="hidden" value="" name="task">
<input type="hidden" value="" name="return">
		

</div>
</form>

</div>
</div>
						<!-- End Content -->
	</section>

	</div>