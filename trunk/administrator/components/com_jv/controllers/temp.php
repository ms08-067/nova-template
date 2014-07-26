<?php
/**
 * @version $Id: controller.php 422 2012-03-19 06:52:46Z lnmtrung $
 */
 
//no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class JvControllerTemp extends JControllerLegacy {
	
	public function __construct($config = array())
	{
		parent::__construct($config);
	}
	
	public function display($cachable = false, $urlparams = false) {
		
		switch($this->getTask()){
			/*case 'add':{
				JRequest::setVar( 'layout', 'form'  );
				JRequest::setVar( 'view'  , 'profile');
			} 
			break;*/
			default: 
				JRequest::setVar( 'view'  , 'temp');
			break;
		}
		
		parent::display();
		
	}
}
?>
