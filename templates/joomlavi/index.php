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
				<jdoc:include type="modules" name="jvinfo" />
			</div> 
			<aside class="span4">
				<jdoc:include type="modules" name="right" style="none" />
			</aside>
		</div>

	</section>
	<?php } else { ?>
		<jdoc:include type="message" />
		<jdoc:include type="component" />
		<jdoc:include type="modules" name="jvinfo" />
	<?php } ?>
    
<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span12 cp">
                &copy; 2014 Mwebs. All Rights Reserved.
           
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
	<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>-->
	
	<script src="<?php echo $temp_path; ?>/js/jv.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-54348730-1', 'auto');
	  ga('send', 'pageview');

	</script>
  </body>
</html>
