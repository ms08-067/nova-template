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
			default: 
				JRequest::setVar( 'view'  , 'temp');
			break;
		}
		parent::display();
		
	}
	public function  add() {
		
		JRequest::setVar( 'layout', 'edit'  );
		JRequest::setVar( 'view'  , 'temp');
		parent::display();
	}
	public  function  cannel() {
		
		echo 123;exit;
	}
	
}
?>
