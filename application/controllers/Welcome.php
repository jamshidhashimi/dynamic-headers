<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Welcome
 * @author Jamshid Hashimi
 * @version 1.0
 */

class Welcome extends CI_Controller {

    //Class constructor
    function __construct()
    {
        parent::__construct();
        $this->load->helper('function');
    }

    //Default function
    public function index()
    {
        //Adding two CSS files, which are required only in this page
        add_css(array('jamshid.css','hashimi.css'));
        //Adding a JavaScrip file that is only required in this page
        add_js('jamshid.js');
        $this->load->view('welcome_message');
    }

    //Here we are adding codeweekend.css which is required only for this page
    public function new_headers()
    {
        add_css('codeWeekend.css');
        $this->load->view('welcome_message');
    }
}
