<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sent extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $page = new Page();

        $page->title             = 'Sent';
        $page->page_subtitle     = 'Manage your sent messages';
        $page->page_title        = 'Sent';
        $page->main              = 'view_test';
        $page->data              = [];
        $page->active            = 'sent';

        $this->render($page);
    }
}
