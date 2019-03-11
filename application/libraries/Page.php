<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page {

    function __construct()
    {
        $this->title                = '';
        $this->page_subtitle        = '';
        $this->page_title           = '';
        $this->active               = 'dashboard';
        $this->main                 = '';
        $this->data                 = array();
        $this->css                  = array();
        $this->js                   = array();
    }

    // title of the page
    public $title;

    // title of the caption
    public $page_subtitle;

    // description of the caption
    public $page_title;

    // active / selected menu
    public $active_link;

    // main view to be display
    public $main;

    // data to be display in the page
    public $data;

    // additional class
    public $css;

    // additional js
    public $js;
}
