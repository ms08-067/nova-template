<?php

/**
 * @package		Simple Disqus Comments - Plugin for Joomla!
 * @author		DeConf - http://www.deconf.com
 * @copyright	Copyright (c) 2010 - 2012 DeConf.com
 * @license		GNU/GPL license: http://www.gnu.org/licenses/gpl-2.0.html
 */
 
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.plugin.plugin' );

class plgContentSimpleDisqus extends JPlugin {

 function plgContentSimpleDisqus(&$subject, $params) { 
 
	parent::__construct($subject, $params); 
    
	$mode = $this->params->def('mode', 1);
 
 }
	
	function exclude($paramName,$value){
		$excludeArticlesIds=$this->params->get($paramName);
		$excludeArticlesIdsArray=explode(',',$excludeArticlesIds);

		if(empty($excludeArticlesIdsArray)){
			return 0;
		}
		if(!$value){
			return 0;
		}
		
		if(in_array($value,$excludeArticlesIdsArray,false)){
			return 1;
		}
		return 0;
	} 
 
 function onContentBeforeDisplay( $context, &$article, &$params ) {
	
	$app = JFactory::getApplication();
	if( $app->isAdmin() ){
		return;
	}
	
	global $mainframe; 
	$identifier_prefix = "Joomla_Disqus_UID_"; 
	if (!isset($article->id)){
		return;
	}
	if (($this->exclude('Exclude_Article_Ids',$article->id)==0) AND ($this->exclude('Exclude_Category_Ids',$article->catid)==0)){	
		
		$lang = JFactory::getLanguage();
		$lang_shortcode=explode('-',$lang->getTag());
		
		if ($this->params->get('Merge_Comments')==0){
			$lang_code="_".$lang_shortcode[0];
		}
		else{
			$lang_code='';
		}
		
		if( JRequest::getVar( 'view' ) == 'article' ){
			$text='<div style="clear:both;"></div><div id="disqus_thread"></div>
			<script type="text/javascript">
				var disqus_identifier = "'.$identifier_prefix.$article->id.$lang_code.'";
				var disqus_shortname = "'.$this->params->get('disqus_shortname').'"; // required: replace example with your forum shortname
				var disqus_config = function () { 
					this.language = "'.$lang_shortcode[0].'";
				};
				(function() {
					var dsq = document.createElement("script"); dsq.type = "text/javascript"; dsq.async = true;
					dsq.src = "http://" + disqus_shortname + ".disqus.com/embed.js";
					(document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(dsq);
				})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</noscript>';

			$article->text.= $text;
			
		  }
	}
  }
 }
?>