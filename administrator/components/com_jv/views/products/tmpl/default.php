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
			<a href="index.php?option=com_jv&controller=categories">Categories</a>
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
Total: <?php echo $this->pagination->total; ?>				
<div class="js-stools-field-list">
<select onchange="submitform(this.value);" class="input-mini chzn-done" name="limit" id="limit">
	<option <?php echo ($this->limit == 5) ? "selected" : "" ; ?> value="5">5</option>
	<option <?php echo ($this->limit == 10) ? "selected" : "" ; ?> value="10">10</option>
	<option <?php echo ($this->limit == 15) ? "selected" : "" ; ?> value="15">15</option>
	<option <?php echo ($this->limit == 20) ? "selected" : "" ; ?> value="20">20</option>
	<option <?php echo ($this->limit == 25) ? "selected" : "" ; ?> value="25">25</option>
	<option <?php echo ($this->limit == 30) ? "selected" : "" ; ?> value="30">30</option>
	<option <?php echo ($this->limit == 50) ? "selected" : "" ; ?> value="50">50</option>
	<option <?php echo ($this->limit == 100) ? "selected" : "" ; ?> value="100">100</option>
	<option <?php echo ($this->limit == 0) ? "selected" : "" ; ?> value="0">All</option>
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
</div>
</div>					

<table id="articleList" class="table table-striped">
				
<thead>
<tr>
<th width="1%" class="nowrap center hidden-phone">
Order
</th>
<th width="1%" class="hidden-phone">
<input type="checkbox" onclick="Joomla.checkAll(this)" class="hasTooltip" value="" name="checkall-toggle">
</th>


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
<?php $i=0; foreach($this->products as $rows => $row) : $i++;?>
<tr sortable-group-id="10" class="row0">
<td class="order nowrap center hidden-phone">
<?php echo $i;?>
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
<?php 
//echo "<pre>";print_r($this->pagination);
echo $this->pagination->getListFooter(); ?>
<input type="hidden" value="" name="task">
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" value="" name="task">
<input type="hidden" value="" name="layout">
<input type="hidden" value="products" name="controller">

</div>	
</form>
<script>
function submitform(v){
	jQuery("input[name ='limitstart']").val(0);
	jQuery("#limit").val(v);
	Joomla.submitform();
	return true;
}
</script>