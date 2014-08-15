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

<section id="portfolio" class="container main">    
			<div class="row gallery col-4">
<?php $i=0; foreach ($this->products as $rows => $row) : $i++;?>
			<?php if(!empty($row->img_thumb)):?>
			<div class="span4">
                <div class="preview">
                    <img style="width: 100%" alt=" " src="<?php echo $row->img_thumb;?>">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a href="#">
						View Detail
						</a>
						<a href="#">
						Live Preview
						
						</a>                                
                    </div>
                </div>
                <div class="desc">
                    <h5>SFB Research & Trainning</h5>
                    <small>Template html - Slice as bootstrap 3 - Templates responsive</small>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="<?php echo $row->img;?>" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </div>
            <?php endif;?>
            <!--/Item 1--> 

 <?php endforeach;?>                     
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
	