<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends Controller {

    function __construct()
    {
        parent::__construct();

        $models = array(
            'inbox_model'    => 'inboxModel',
            'messages_model' => 'messageModel'
        );

        $this->load->model($models);
    }

    function index()
    {
        $this->load->helper('customstr_helper');

        $page = new Page();

        $userId = $this->config->item('userid');

        $data['inboxData'] = $this->inboxModel->getInbox($userId);

        $page->title             = 'Inbox';
        $page->page_subtitle     = 'Manage your recieved messages';
        $page->page_title        = 'Inbox';
        $page->main              = 'inbox/view_inbox';
        $page->data              = $data;
        $page->active            = 'inbox';

        $this->render($page);
    }

    function read($messageId)
    {
        // Set message as read upon opening the message
        $this->inboxModel->setMessageAsRead($messageId);

        $page = new Page();

        $userId = $this->config->item('userid');

        $data['message'] = $this->messageModel->getMessageById($userId, $messageId)->row();

        $page->title             = 'Inbox';
        $page->page_subtitle     = $data['message']->name;
        $page->page_title        = $data['message']->subject;
        $page->main              = 'inbox/view_inbox_read';
        $page->data              = $data;
        $page->active            = 'inbox';

        //var_dump($page);

        $this->render($page);
    }
}
