<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function getUserData($userId)
    {
        $sql = "SELECT A.id, name, username
                FROM users A
                INNER JOIN contacts B ON A.id=B.userid
                WHERE A.id=?";

        return $this->db->query($sql, [$userId])->row();
    }
}
