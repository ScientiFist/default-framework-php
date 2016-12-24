<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {

  public function __construct(){
      parent::__construct();
  }

	public function index()
	{
    /* TEST MOBILE */
    $detect = new Mobile_Detect();
    if ($detect->isMobile()) {
    $testMobile = TRUE ;
    }else{
    $testMobile = FALSE ;
    }
    /* END TEST */

    $ValueDefault = array('header' => 'HomePageDefault',
                          'mobile' => $testMobile);
		$this->load->view('IndexView', $ValueDefault);
	}
}
