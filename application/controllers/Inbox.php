<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends Controller {

    function __construct()
    {
        parent::__construct();

        $models = ['inbox_model'];

        $this->load->model($models);
    }

    function index()
    {
        $this->load->helper('customstr_helper');

        $page = new Page();

        $data['inboxData'] = $this->inbox_model->getInbox(2);

        $page->title             = 'Inbox';
        $page->page_subtitle     = 'Manage your recieved messages';
        $page->page_title        = 'Inbox';
        $page->main              = 'inbox/view_inbox';
        $page->data              = $data;
        $page->active            = 'inbox';

        $this->render($page);
    }
}
