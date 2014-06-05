<?php 
$app = JFactory::getApplication();
$temp_path = JURI::base() . 'templates/' . $app->getTemplate();
//echo $templateDir;exit;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <jdoc:include type="head" />    
    <!-- Le styles -->
    <link href="<?php echo $temp_path; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $temp_path; ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo $temp_path; ?>/css/main.css" rel="stylesheet">
    <link href="<?php echo $temp_path; ?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo $temp_path; ?>/css/template1.css" rel="stylesheet"> 
	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo $temp_path; ?>/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $temp_path; ?>/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $temp_path; ?>/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $temp_path; ?>/images/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $temp_path; ?>/images/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="<?php echo $temp_path; ?>/images/favicon.png">
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-32806964-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	
  </head>

  <body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
         
		<div class="navbar-inner">
           
			
			<div class="container">
				 <?php if ($this->countModules('hotline')) : ?>
				   <div class="row-fluid hotline">
					<div class="span12 head_contact">
						<jdoc:include type="modules" name="hotline" />
					</div>
				   </div>
				   <?php endif;?>
			
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="./"></a>
                <div class="nav-collapse collapse pull-right">
                    
                    <jdoc:include type="modules" name="menutop" style="none" />       
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->

    <section id="about-us" class="container main">
		<div class="row-fluid">
            
            <div class="span8">
                <!--
				<div class="blog">
                    <div class="blog-item well">
                        <a href="#"><h2>Duis sed odio sit amet nibh vulputate cursus</h2></a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">
                              <i class="icon-user"></i> by <a href="#">John</a> | <i class="icon-folder-close"></i> Category <a href="#">Bootstrap</a> | <i class="icon-calendar"></i> Sept 16th, 2012
                          </p>
                          <p class="pull-right"><i class="icon-comment pull"></i> <a href="blog-item.html#comments">3 Comments</a></p>
                      </div>
                      <p><img src="<?php echo $temp_path; ?>/images/sample/blog1.jpg" width="100%" alt="" /></p>
                      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                      <a class="btn btn-link" href="#">Read More <i class="icon-angle-right"></i></a>
                  </div>
                  <!-- End Blog Item -->
				 <!--		
                  <div class="blog-item well">
                    <a href="#"><h2>Duis sed odio sit amet nibh vulputate cursus a sit</h2></a>
                    <div class="blog-meta clearfix">
                        <p class="pull-left">
                          <i class="icon-user"></i> by <a href="#">John</a> | <i class="icon-folder-close"></i> Category <a href="#">Bootstrap</a> | <i class="icon-calendar"></i> Sept 16th, 2012
                      </p>
                      <p class="pull-right"><i class="icon-comment pull"></i> <a href="blog-item.html#comments">3 Comments</a></p>
                  </div>
                  <p><img src="images/sample/blog1.jpg" width="100%" alt="" /></p>
                  <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                  <a class="btn btn-link" href="#">Read More <i class="icon-angle-right"></i></a>
              </div>
              <!-- End Blog Item -->
			<!--	
              <div class="gap"></div>

             
              <div class="pagination">
                <ul>
                    <li><a href="#"><i class="icon-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i></a></li>
                </ul>
              </div>


        </div>-->
		<jdoc:include type="message" />
		<jdoc:include type="component" />
    </div> 
    <aside class="span4">
        <!--
		<div class="widget search">
            <form>
                <input type="text" class="input-block-level" placeholder="Search">
            </form>
        </div>
       

        <div class="widget ads">
            <div class="row-fluid">
                <div class="span6">
                    <a href="#"><img src="<?php echo $temp_path; ?>/images/ads/ad1.png" alt=""></a>
                </div>

                <div class="span6">
                    <a href="#"><img src="<?php echo $temp_path; ?>/images/ads/ad2.png" alt=""></a>
                </div>
            </div>
            <p> </p>
            <div class="row-fluid">
                <div class="span6">
                    <a href="#"><img src="<?php echo $temp_path; ?>/images/ads/ad3.png" alt=""></a>
                </div>

                <div class="span6">
                    <a href="#"><img src="<?php echo $temp_path; ?>/images/ads/ad4.png" alt=""></a>
                </div>
            </div>
        </div>
       

        <div class="widget widget-popular">
            <h3>Popular Posts</h3>
            <div class="widget-blog-items">
                <div class="widget-blog-item media">
                    <div class="pull-left">
                        <div class="date">
                            <span class="month">Jun</span>
                            <span class="day">24</span>
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>
                    </div>
                </div>

                <div class="widget-blog-item media">
                    <div class="pull-left">
                        <div class="date">
                            <span class="month">Jun</span>
                            <span class="day">24</span>
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>
                    </div>
                </div>

                <div class="widget-blog-item media">
                    <div class="pull-left">
                        <div class="date">
                            <span class="month">Jun</span>
                            <span class="day">24</span>
                        </div>
                    </div>
                    <div class="media-body">
                        <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>
                    </div>
                </div>

            </div>                        
        </div>
                

        <div class="widget">
            <h3>Blog Categories</h3>
            <div>
                <div class="row-fluid">
                    <div class="span6">
                        <ul class="unstyled">
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Updates</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>

                    <div class="span6">
                        <ul class="unstyled">
                            <li><a href="#">Joomla</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Drupal</a></li>
                            <li><a href="#">Magento</a></li>
                            <li><a href="#">Bootstrap</a></li>
                        </ul>
                    </div>
                </div>

            </div>                       
        </div>
       

        <div class="widget">
            <h3>Tag Cloud</h3>
            <ul class="tag-cloud unstyled">
                <li><a class="btn btn-mini btn-primary" href="#">CSS3</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">HTML5</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">WordPress</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Joomla</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Drupal</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Bootstrap</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">jQuery</a></li>

                <li><a class="btn btn-mini btn-primary" href="#">Tutorial</a></li>
                <li><a class="btn btn-mini btn-primary" href="#">Update</a></li>
            </ul>
        </div> 
        

        <div class="widget">
            <h3>Archive</h3>
            <ul class="archive arrow">
                <li><a href="#">May 2013</a></li>
                <li><a href="#">April 2013</a></li>
                <li><a href="#">March 2013</a></li>
                <li><a href="#">February 2013</a></li>
            </ul>
        </div> 
       -->
		<jdoc:include type="modules" name="right" style="none" />
    </aside>
</div>

</section>
    
<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 cp">
                &copy; 2013 Joomlavi. All Rights Reserved.
           
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>   
					<li class="go_top"> <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a></li>	
                </ul>
           
               
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $temp_path; ?>/js/jquery.js"></script>
    <script src="<?php echo $temp_path; ?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo $temp_path; ?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo $temp_path; ?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo $temp_path; ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo $temp_path; ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo $temp_path; ?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo $temp_path; ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo $temp_path; ?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo $temp_path; ?>/js/bootstrap-button.js"></script>
    <script src="<?php echo $temp_path; ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo $temp_path; ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo $temp_path; ?>/js/bootstrap-typeahead.js"></script>

  </body>
</html>
