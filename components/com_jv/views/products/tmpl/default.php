<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
//echo "<pre>";print_r($this->products);exit;
?>
<section class="title">
        <div class="container">
            <div class="row-fluid">
                
            </div>
        </div>
</section>
<section id="portfolio" class="container">    
<div id="plist" class="row gallery col-4">
<?php $i=0; foreach ($this->products as $rows => $row) : $i++;?>
<?php if(!empty($row->img_thumb)):?>
<div class="span4">
	<div class="preview">
		<img style="width: 100%" alt=" " src="<?php echo $row->img_thumb;?>">
		<div class="overlay">
		</div>
		<div class="links">
			<a href="<?php echo JRoute::_('index.php?option=com_jv&view=product&Itemid=108&id='.$row->id); ?>">
			View Detail
			</a>
			<a href="<?php echo JRoute::_('http://joomlavi.net/demo/cus'.$row->id); ?>" target="_blank">
			Live Preview
			</a>                                
		</div>
	</div>
	<div class="desc">
		<h5><?php echo $row->name_project; ?></h5>
		<small><?php echo $row->short_des; ?></small>
		<div class="price">$<?php echo $row->price; ?></div>
	</div>
	<!---->
	                
</div>
<?php endif;?>
<!--/Item 1--> 
<?php endforeach;?> 

</div>
<div class="divshowmore"><a id="showmore" rel="3" class="more-jobs-link span4" href="javascript:void(0);">Show More</a></div>
</section>
