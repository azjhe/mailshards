<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function getInbox($sendto)
    {
        $sql = "SELECT * FROM messages WHERE sendto=? ORDER BY isread";

        return $this->db->query($sql, [$sendto]);
    }
}
