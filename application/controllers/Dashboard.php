<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Controller {

    function __construct()
    {
        parent::__construct();

        //$this->load->model('messages_model');
    }

    function index()
    {
        $page = new Page();

        $content_data['testdata'] = 'this is sample data';

        $page->title             = 'Dashboard';
        $page->page_subtitle     = 'Overview';
        $page->page_title        = 'Dashboard';
        $page->main              = 'dashboard';
        $page->data              = $content_data;

        //var_dump($page);

        $this->render($page);
    }

}
