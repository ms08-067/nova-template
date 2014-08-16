<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
//echo "<pre>";print_r($this->product);
?>
<section id="product" class="container main">    
<div class="row gallery col-4">
<div class="span8">
<div itemtype="http://schema.org/Blog" itemscope="" class="blog">
<div class="well items-leading clearfix">
<!------------------------------------------------------------------------------------------------------------->
<div class="inner">
<?php if(!empty($this->product->img)): ?>
<div class="image">
<a target="_blank" rel="nofollow" title="SmartAdmin - Responsive WebApp" href="http://wrapbootstrap.com/preview/WB0573SK0" class="screenshot">
<img id="thing_image" width="100%" alt="<?php echo $this->product->img_alt; ?>" title="<?php echo $this->product->img_alt; ?>" src="<?php echo $this->product->img; ?>" />
</a>
<div class="wrap_link_demo">
	<a title="Live preview" rel="nofollow" href="javascript:void(0)" class="btn primary live_preview"><span>Live preview</span></a>&nbsp;
	<a rel="nofollow" title="Purchase now using PayPal" href="javascript::void(0)" class="btn">Purchase now »</a>
<!--onclick="document.getElementById('order').submit(); return false;" --> 
</div>
</div>
<?php endif;?>

<div id="description">
<hr />
	<?php echo $this->product->des; ?>
</div>
<?php 
	$product_related = JvHelper::getProductRelated($this->product->id_categories_product,$this->product->id);
	//echo "<pre>";print_r($product_related);exit;
	if(count($product_related)):
?>

<h2 id="seller_items_header">Product Related</h2>

<ul id="seller_items">
<?php for($i = 0; $i < 4; $i++):
if(!empty($product_related[$i]->img)) {  
?>
<li>
<a title="<?php echo $product_related[$i]->name_project; ?>" href="<?php echo JRoute::_('index.php?option=com_jv&view=product&Itemid=108&id='.$product_related[$i]->id); ?>">
<img style="width: 90%;" src="<?php echo $product_related[$i]->img; ?>"></a>
</li>
<?php 
}
endfor; ?>
</ul>

<?php endif; ?>

</div>
<!-------------------------------------------------------------------------------------------------------------->				
</div><!-- end items-leading -->
</div>
</div>
			
            <!--Item 3-->
<aside class="span4">
<div class="search">
	<h2><?php echo $this->product->name_project; ?></h2>
</div>
<div class="product_info">
<!--                       
<form target="_blank" method="post" action="https://www.paypal.com/cgi-bin/webscr" id="order">
	
	<a onclick="document.getElementById('order').submit(); return false;" rel="nofollow" href="#" class="btn primary btn-xlarge" id="buynow"><span style="" itemprop="price" id="offer_price">$18</span></a>
   
</form>
                        
<div class="purchase_info">
	<div class="purchases">
		<span class="count five_digits">10259</span>
		<span class="count_label"> Purchases</span>
	</div>
</div>
-->
<div class="info_wrapper">
<table class="attributes zebra-striped">
<tbody>
<tr class="first"><td class="key"><strong>Version:</strong></td><td class="value"><span itemprop="version" id="creativework_version">1.4.1</span></td></tr>
<tr>
<td class="key"><strong>Bootstrap:</strong></td>
<td class="value">Compatible with 3.2.x</td>
</tr>
<tr>
<td class="key"><strong>Categories:</strong></td>
<td class="value">
	<ul>
	<li><a title="<?php echo JvHelper::getCategories($this->product->id_categories_product)->name; ?>" href="javascript:void(0)"><span id="offer_category"><?php echo JvHelper::getCategories($this->product->id_categories_product)->name; ?></span></a></li>
	</ul>
</td>
</tr>

</tbody>
</table>
</div>
<div class="info_wrapper">
</div><br/>
<p class="item_cs_header"><strong>Other Product</strong></p>
<div class="item_cs"><a title="Clean Concept - Colorize Theme" href="#">
<img width="252" height="158" src="//d85wutc1n854v.cloudfront.net/live/products/icons/WB0R48JC2.jpg?v=1.0.1"></a></div>
</div>

</aside>			
</div>
     
        
</section>
<section class="main" id="bottom">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span4">
                <h4>ADDRESS</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Address:</strong> 32/35 Bui Dinh Tuy street,12 Ward,Binh Thanh District,HCM city,Vietnam country
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Email: </strong><a href="">hunguit@yahoo.com</a>
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Website:</strong><a href="">www.joomlavi.net</a>
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Tel:</strong> (+84) 982.043.592
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div class="span4" id="tweets">
                <h4>OUR COMPANY</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Copyright</a></li>
                        <li><a href="#">We are hiring</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>  
            </div>
            <!--Important Links-->

            <!--Archives-->
            <div class="span4" id="archives">
                <h4>ARCHIVES</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">December 2012 (1)</a></li>
                        <li><a href="#">November 2012 (5)</a></li>
                        <li><a href="#">October 2012 (8)</a></li>
                        <li><a href="#">September 2012 (10)</a></li>
                        <li><a href="#">August 2012 (29)</a></li>
                        <li><a href="#">July 2012 (1)</a></li>
                        <li><a href="#">June 2012 (31)</a></li>
                    </ul>
                </div>
            </div>
            <!--End Archives-->

            <div class="span3">
                

        </div>

    </div>
    <!--/row-fluid-->
</div>
<!--/container-->

</section>	
	