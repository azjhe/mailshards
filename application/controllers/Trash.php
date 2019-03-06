<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trash extends Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->model('messages_model');
    }

    function index()
    {
        $page = new Page();

        $content_data['testdata'] = 'this is sample data';

        $page->title             = 'Trash';
        $page->page_subtitle     = 'Manage your deleted messages';
        $page->page_title        = 'Trash';
        $page->main              = 'view_test';
        $page->data              = [];
        $page->active            = 'trash';

        //var_dump($page);

        $this->render($page);
    }

}
