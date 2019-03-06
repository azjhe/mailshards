<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drafts extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $page = new Page();

        $page->title             = 'Drafts';
        $page->page_subtitle     = 'Manage your draft messages';
        $page->page_title        = 'Drafts';
        $page->main              = 'inbox/view_inbox';
        $page->data              = [];
        $page->active            = 'drafts';

        $this->render($page);
    }
}