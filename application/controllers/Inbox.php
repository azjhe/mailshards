<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $page = new Page();

        $content_data['testdata'] = 'this is sample data';

        $page->title             = 'Inbox';
        $page->page_subtitle     = 'Manage your recieved messages';
        $page->page_title        = 'Inbox';
        $page->main              = 'inbox/view_inbox';
        $page->data              = [];
        $page->active            = 'inbox';

        $this->render($page);
    }
}