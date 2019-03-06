<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $page = new Page();

        $content_data['testdata'] = 'this is sample data1';

        $page->title             = 'Home';
        $page->page_subtitle     = 'Subtitle for test';
        $page->page_title        = 'Test Page';
        $page->active            = 'test';
        $page->main              = 'view_test';
        $page->data              = $content_data;

        var_dump($page);

        //$this->render($page);
    }

}
