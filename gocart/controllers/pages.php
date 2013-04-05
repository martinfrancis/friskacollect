<?php
// Added by Martin Francis 28.03.13
//This controller is for extra pages that are not created through the admin GUI
// Changed gocart/config/routes.php to shorten the url

class Pages extends Front_Controller {

	function __construct()
	{
		parent::__construct();
		
		//make sure we're not always behind ssl
		remove_ssl();
	}

	function page($pagename)
	{		
     	$this->load->view($pagename);
	}
}	