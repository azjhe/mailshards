<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends Controller {

    function __construct()
    {
        parent::__construct();

        $models = ['contacts_model'];

        $this->load->model($models);
    }

    function index()
    {
        $page = new Page();

        $contentData['contacts'] = $this->contacts_model->getAllContacts();

        $page->title             = 'Contacts';
        $page->page_subtitle     = 'Manage your contacts';
        $page->page_title        = 'Contacts';
        $page->main              = 'contacts/view_contacts';
        $page->data              = $contentData;
        $page->active            = 'contacts';

        $this->render($page);
    }
}