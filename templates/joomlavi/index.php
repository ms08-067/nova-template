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
    
	<?php $this->setMetaData('generator','Joomlavi | Joomla templates, Joomla extensions, JV Framework'); ?>
	<jdoc:include type="head" />    
    <!-- Le styles -->
    <link href="<?php echo $temp_path; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $temp_path; ?>/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo $temp_path; ?>/css/main.css" rel="stylesheet">
    <link href="<?php echo $temp_path; ?>/css/font-awesome.min.css" rel="stylesheet">
	
	
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
	
	<?php if ($this->countModules('right')) { ?>
	
    <section id="about-us" class="container main">
		<div class="row-fluid">
            
            <div class="span8">
                
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			</div> 
			<aside class="span4">
				<jdoc:include type="modules" name="right" style="none" />
			</aside>
		</div>

	</section>
	<?php } else { ?>
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	<?php } ?>
    
<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 cp">
                &copy; 2014 Joomlavi. All Rights Reserved.
           
                <ul class="social pull-right">
                    <li><a target="_blank" href="https://www.facebook.com/Joomlavi.net"><i class="icon-facebook"></i></a></li>
                    <!--<li><a href="#"><i class="icon-google-plus"></i></a></li>-->   
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
	<script>
		$(document).ready(function(){
			//alert($(window).height());
		});
	</script>
  </body>
</html>
