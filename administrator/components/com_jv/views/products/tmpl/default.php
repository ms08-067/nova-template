<?php
/**
 * com_jv
 */
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
JHtml::_('behavior.multiselect');
JHtml::_('formbehavior.chosen', 'select');

//echo "<pre>";print_r($this->products);
?>
<link rel="stylesheet" href="<?php echo JURI::root(); ?>media/jui/css/jquery.searchtools.css" type="text/css" />
<script src="<?php echo JURI::root(); ?>media/jui/js/jquery.searchtools.min.js" type="text/javascript"></script>

<form action="<?php echo JRoute::_('index.php?option=com_jv&controller=products'); ?>" method="post" name="adminForm" id="adminForm">
<div class="span2" id="j-sidebar-container">
<div id="sidebar">
<div class="sidebar-nav">
	<ul class="nav nav-list" id="submenu">
		<li class="active">
			<a href="index.php?option=com_jv&controller=products">Products</a>
		</li>
		<li>
			<a href="index.php?option=com_jv&controller=products&view=categories">Categories</a>
		</li>
   </ul>
</div>
</div>
</div>
	
<div class="span10" id="j-main-container">
<div class="js-stools clearfix">
	<div class="clearfix">
<div class="js-stools-container-bar">
			<label class="element-invisible" for="filter_search">Search</label>
		<div class="btn-wrapper input-append">
			<input type="text" placeholder="Search" value="" id="filter_search" name="filter[search]">			<button title="" class="btn hasTooltip" type="submit" data-original-title="Search">
				<i class="icon-search"></i>
			</button>
		</div>
					<div class="btn-wrapper hidden-phone">
				<button title="" class="btn hasTooltip js-stools-btn-filter" type="button" data-original-title="Filter the list items">
					Search tools <i class="caret"></i>
				</button>
			</div>
				<div class="btn-wrapper">
			<button title="" class="btn hasTooltip js-stools-btn-clear" type="button" data-original-title="Clear">
				Clear			</button>
		</div>
</div>
<div class="js-stools-container-list hidden-phone hidden-tablet shown" style="">
				<div class="ordering-select hidden-phone">
				
					<div class="js-stools-field-list">
				<select onchange="this.form.submit();" class="input-mini chzn-done" name="list[limit]" id="list_limit" style="display: none;">
	<option selected="selected" value="5">5</option>
	<option value="10">10</option>
	<option value="15">15</option>
	<option value="20">20</option>
	<option value="25">25</option>
	<option value="30">30</option>
	<option value="50">50</option>
	<option value="100">100</option>
	<option value="0">All</option>
</select>
			</div>
			</div>
		</div>
	</div>

<!-- Filters div -->
<div class="js-stools-container-filters hidden-phone clearfix" style="">
<div class="js-stools-field-filter">

<select onchange="this.form.submit();" name="filter[published]" id="filter_published" style="display: none;" class="chzn-done">
	<option selected="selected" value="">- Select Status</option>
	<option value="-2">Trashed</option>
	<option value="0">Unpublished</option>
	<option value="1">Published</option>
	<option value="2">Archived</option>
	<option value="*">All</option>
</select>

<div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="filter_published_chzn"><a tabindex="-1" class="chzn-single"><span>- Select Status</span></a>
<div class="chzn-drop">
<div class="chzn-search"><input type="text" autocomplete="off" readonly="">
</div><ul class="chzn-results"></ul></div>
</div>
</div>

<div class="js-stools-field-filter">
<select onchange="this.form.submit();" name="filter[category_id]" id="filter_category_id" style="display: none;" class="chzn-done">
	<option selected="selected" value="">- Select Category</option>
	<option value="2">Uncategorised</option>
	<option value="14">Document-Blog</option>
	<option value="8">- Java Development</option>
	<option value="9">- Android </option>
	<option value="10">- Cordova/Phonegap</option>
	<option value="11">- Phonegap</option>
	<option value="12">- Sencha</option>
	<option value="13">- PHP Development</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="filter_category_id_chzn"><a tabindex="-1" class="chzn-single"><span>- Select Category</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
</div>

<div class="js-stools-field-filter">
<select onchange="this.form.submit();" name="filter[level]" id="filter_level" style="display: none;" class="chzn-done">
	<option selected="selected" value="">- Select Max Levels</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select><div class="chzn-container chzn-container-single" style="width: 220px;" title="" id="filter_level_chzn">
<a tabindex="-1" class="chzn-single"><span>- Select Max Levels</span></a>

</div>
</div>

<div class="js-stools-field-filter">
<select onchange="this.form.submit();" name="filter[access]" id="filter_access" style="display: none;" class="chzn-done">
	<option selected="selected" value="">- Select Access</option>
	<option value="5">Guest</option>
	<option value="1">Public</option>
	<option value="6">Super Users</option>
	<option value="2">Registered</option>
	<option value="3">Special</option>
</select>
</div>

<div class="js-stools-field-filter">
<select onchange="this.form.submit();" name="filter[author_id]" id="filter_author_id" style="display: none;" class="chzn-done">
	<option selected="selected" value="">- Select Author</option>
	<option value="262">Hung Phan</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="filter_author_id_chzn"><a tabindex="-1" class="chzn-single"><span>- Select Author</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
</div>

<div class="js-stools-field-filter">
<select onchange="this.form.submit();" name="filter[language]" id="filter_language" style="display: none;" class="chzn-done">
	<option selected="selected" value="">- Select Language</option>
	<option value="*">All</option>
	<option value="en-GB">English (UK)</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="filter_language_chzn"><a tabindex="-1" class="chzn-single"><span>- Select Language</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
			</div>
<div class="js-stools-field-filter">
				<select onchange="this.form.submit();" name="filter[tag]" id="filter_tag" style="display: none;" class="chzn-done">
	<option selected="selected" value="">- Select Tag</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="filter_tag_chzn"><a tabindex="-1" class="chzn-single"><span>- Select Tag</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
</div>
</div>
</div>					

<table id="articleList" class="table table-striped">
				
<thead>
<tr>
<th width="1%" class="nowrap center hidden-phone">
<a title="" data-name="" data-direction="ASC" data-order="a.ordering" class="js-stools-column-order hasTooltip" onclick="return false;" href="#" data-original-title="&lt;strong&gt;Ordering&lt;/strong&gt;&lt;br /&gt;Click to sort by this column">
<i class="icon-menu-2"></i>
</a>
</th>
<th width="1%" class="hidden-phone">
<input type="checkbox" onclick="Joomla.checkAll(this)" title="" class="hasTooltip" value="" name="checkall-toggle" data-original-title="Check All">						</th>


<th width="10%" class="nowrap hidden-phone">
<a title="" data-name="Access" data-direction="ASC" data-order="a.access" class="js-stools-column-order hasTooltip" onclick="return false;" href="#" data-original-title="&lt;strong&gt;Access&lt;/strong&gt;&lt;br /&gt;Click to sort by this column">
Status</a>
</th>
<th>
<a title="" data-name="Title" data-direction="ASC" data-order="a.title" class="js-stools-column-order hasTooltip" onclick="return false;" href="#" data-original-title="&lt;strong&gt;Title&lt;/strong&gt;&lt;br /&gt;Click to sort by this column">
Project Name</a>
</th>
<th width="20%" class="nowrap hidden-phone">
<a title="" data-name="Access" data-direction="ASC" data-order="a.access" class="js-stools-column-order hasTooltip" onclick="return false;" href="#" data-original-title="&lt;strong&gt;Access&lt;/strong&gt;&lt;br /&gt;Click to sort by this column">
Categories</a>
</th>

<th width="10%" class="nowrap hidden-phone">
<a title="" data-name="Author" data-direction="ASC" data-order="a.created_by" class="js-stools-column-order hasTooltip" onclick="return false;" href="#" data-original-title="&lt;strong&gt;Author&lt;/strong&gt;&lt;br /&gt;Click to sort by this column">
Price</a>
</th>

<th width="10%" class="nowrap hidden-phone">
<a title="" data-name="Date" data-direction="ASC" data-order="a.created" class="js-stools-column-order hasTooltip" onclick="return false;" href="#" data-original-title="&lt;strong&gt;Date&lt;/strong&gt;&lt;br /&gt;Click to sort by this column">
Date</a>
</th>
<th width="1%" class="nowrap hidden-phone">
<a title="" data-name="ID" data-direction="ASC" data-order="a.id" class="js-stools-column-order hasTooltip" onclick="return false;" href="#" data-original-title="&lt;strong&gt;ID&lt;/strong&gt;&lt;br /&gt;Click to sort by this column">
ID<i class="icon-arrow-down-3"></i>
</a>
</th>
</tr>

</thead>

			
<tbody>
<?php foreach($this->products as $rows => $row) : ?>
<tr sortable-group-id="10" class="row0">
<td class="order nowrap center hidden-phone">
<span title="" class="sortable-handler inactive tip-top hasTooltip" data-original-title="Please sort by order to enable reordering">
<i class="icon-menu"></i>
</span>
</td>

<td class="center hidden-phone">
<input type="checkbox" onclick="Joomla.isChecked(this.checked);" value="<?php echo $row->id; ?>" name="cid[]" id="cb0">
</td>

<td class="hidden-phone"><?php echo $row->publish ? "Published":"Unpublished"; ?></td>
<td class="has-context">
<div class="pull-left">
<a href="index.php?option=com_jv&controller=product&id=<?php echo $row->id; ?>"><?php echo $row->name_project; ?></a><br/>
<span class="small"><?php echo $row->short_des; ?></span>
</div>
</td>
<td><?php echo $row->categories;?></td>
<td class="small hidden-phone"><?php echo $row->price." $"; ?></td>
<td class="nowrap small hidden-phone"><?php echo date("d-m-Y",strtotime($row->created_date)); ?></td>
<td class="center hidden-phone"><?php echo $row->id; ?></td>
</tr>
<?php endforeach; ?>
			
</tbody>
</table>

<div class="pagination pagination-toolbar">
<ul class="pagination-list"><li class="disabled"><a><i class="icon-first"></i></a></li><li class="disabled"><a><i class="icon-previous"></i></a></li><li class="active hidden-phone"><a>1</a></li><li class="hidden-phone"><a onclick="document.adminForm.limitstart.value=5; Joomla.submitform();return false;" href="#">2</a></li><li class="hidden-phone"><a onclick="document.adminForm.limitstart.value=10; Joomla.submitform();return false;" href="#">3</a></li><li class="hidden-phone"><a onclick="document.adminForm.limitstart.value=15; Joomla.submitform();return false;" href="#">4</a></li><li class="hidden-phone"><a onclick="document.adminForm.limitstart.value=20; Joomla.submitform();return false;" href="#">...</a></li><li><a onclick="document.adminForm.limitstart.value=5; Joomla.submitform();return false;" href="#" title="" class="hasTooltip" data-original-title="Next"><i class="icon-next"></i></a></li><li><a onclick="document.adminForm.limitstart.value=20; Joomla.submitform();return false;" href="#" title="" class="hasTooltip" data-original-title="End"><i class="icon-last"></i></a></li></ul>
<input type="hidden" value="0" name="limitstart">
</div>

<div id="collapseModal" class="modal hide fade">
	<div class="modal-header">
		<button data-dismiss="modal" class="close" type="button">×</button>
		<h3>Batch process the selected articles</h3>
	</div>
	<div class="modal-body modal-batch">
		<p>If a category is selected for move/copy, any actions selected will be applied to the copied or moved articles. Otherwise, all actions are applied to the selected articles.</p>
		<div class="row-fluid">
			<div class="control-group span6">
				<div class="controls">
					<label title="" class="modalTooltip" for="batch-tag-id" id="batch-tag-lbl" data-original-title="&lt;strong&gt;Add Tag&lt;/strong&gt;&lt;br /&gt;Add a tag to selected items.">Add Tag</label><select id="batch-tag-id" class="inputbox chzn-done" name="batch[tag]" style="display: none;"><option value="">- Keep original Tags -</option></select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="batch_tag_id_chzn"><a tabindex="-1" class="chzn-single"><span>- Keep original Tags -</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>				</div>
			</div>
			<div class="control-group span6">
				<div class="controls">
					<label title="" class="modalTooltip" for="batch-language-id" id="batch-language-lbl" data-original-title="&lt;strong&gt;Set Language&lt;/strong&gt;&lt;br /&gt;Not making a selection will keep the original language when processing.">Set Language</label><select id="batch-language-id" class="inputbox chzn-done" name="batch[language_id]" style="display: none;"><option value="">- Keep original Language -</option><option value="*">All</option>
<option value="en-GB">English (UK)</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="batch_language_id_chzn"><a tabindex="-1" class="chzn-single"><span>- Keep original Language -</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="control-group span6">
				<div class="controls">
					<label title="" class="modalTooltip" for="batch-access" id="batch-access-lbl" data-original-title="&lt;strong&gt;Set Access Level&lt;/strong&gt;&lt;br /&gt;Not making a selection will keep the original access levels when processing.">Set Access Level</label><select class="inputbox chzn-done" name="batch[assetgroup_id]" id="batch-access" style="display: none;">
	<option value="">- Keep original Access Levels</option>
	<option value="1">Public</option>
	<option value="5">Guest</option>
	<option value="6">Super Users</option>
	<option value="2">Registered</option>
	<option value="3">Special</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="batch_access_chzn"><a tabindex="-1" class="chzn-single"><span>- Keep original Access Levels</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div>
				</div>
			</div>

<div class="control-group span6">
<div class="controls">
<label for="batch-choose-action" id="batch-choose-action-lbl">Select Category for Move/Copy</label><div class="control-group" id="batch-choose-action"><select id="batch-category-id" class="inputbox chzn-done" name="batch[category_id]" style="display: none;"><option value="">Select</option><option value="2">Uncategorised</option>
<option value="14">Document-Blog</option>
<option value="8">- Java Development</option>
<option value="9">- Android </option>
<option value="10">- Cordova/Phonegap</option>
<option value="11">- Phonegap</option>
<option value="12">- Sencha</option>
<option value="13">- PHP Development</option>
</select><div class="chzn-container chzn-container-single chzn-container-single-nosearch" style="width: 220px;" title="" id="batch_category_id_chzn"><a tabindex="-1" class="chzn-single"><span>Select</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input type="text" autocomplete="off" readonly=""></div><ul class="chzn-results"></ul></div></div></div><div class="control-group radio" id="batch-move-copy"><div class="controls">

<label class="radio" id="batch[move_copy]c-lbl" for="batch[move_copy]c">
	
<input type="radio" value="c" id="batch[move_copy]c" name="batch[move_copy]">Copy
</label>
	<label class="radio" id="batch[move_copy]m-lbl" for="batch[move_copy]m">
	
	<input type="radio" checked="checked" value="m" id="batch[move_copy]m" name="batch[move_copy]">Move
	</label>
</div>
</div>					</div>
				</div>
					</div>
	</div>
	<div class="modal-footer">
		<button data-dismiss="modal" onclick="document.id('batch-category-id').value='';document.id('batch-access').value='';document.id('batch-language-id').value='';document.id('batch-tag-id)').value=''" type="button" class="btn">
			Cancel		</button>
		<button onclick="Joomla.submitbutton('article.batch');" type="submit" class="btn btn-primary">
			Process		</button>
	</div>
</div>
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" value="" name="task">
		<input type="hidden" value="" name="layout">
		<input type="hidden" value="products" name="controller">
</div>	
</form>
