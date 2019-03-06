<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('Page');
    }
}

class Controller extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        //$this->check_logged_in();
    }

    function render(Page $page)
    {
        // load view header
        $this->load->view('template/header', $page);

        // sidebar
        $this->load->view('template/sidebar', TRUE);

        // main container
        $this->load->view('template/main', $page);

        // nav bar
        $this->load->view('template/navbar', $page);

        // alert box
        $this->load->view('template/alert', $page);

        // content container
        $this->load->view('template/content_container', $page);

        // content of the page
        $this->load->view($page->main, $page);

        // end content container
        $this->load->view('template/content_container_end', TRUE);

        // sticky footer
        $this->load->view('template/stickyfooter', TRUE);

        // end main container
        $this->load->view('template/main_end', TRUE);

        $this->load->view('template/footer', $page);
    }

    function check_logged_in()
    {
        if ($this->session->logged_in == null)
        {
            redirect('auth');
        }
    }

}

class Auth_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render(Page $page)
    {
        // load main view
        $this->load->view($page->main, $page);
    }

    function check_logged_in()
    {
        if (!$this->session->logged_in == null)
        {
            redirect('dashboard');
        }
    }
}
