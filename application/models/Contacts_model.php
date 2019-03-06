<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function getAllContacts()
    {
        return $this->db->get('contacts');
    }
}