<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function getAllMessages()
    {
        $sql = "SELECT A.userid, A.sendto, B.name, A.subject, A.content  
                FROM messages A
                INNER JOIN users B ON A.userid=B.id
                WHERE A.userid=1
                AND issent
                AND NOT isread
                ORDER BY dateadded DESC
                LIMIT 3;";

        return $this->db->query($sql);
    }

    function getUnreadMessageCount()
    {
        $sql = "SELECT A.userid, A.sendto, B.name, A.subject, A.content  
                FROM messages A
                INNER JOIN users B ON A.userid=B.id
                WHERE A.userid=1
                AND issent
                AND NOT isread";

        return $this->db->query($sql)->num_rows();
    }
}
