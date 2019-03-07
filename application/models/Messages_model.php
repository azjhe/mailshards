<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function getAllMessages($userId)
    {
        $sql = "SELECT A.contactid, A.sendto, B.name, A.subject, A.content
                FROM messages A
                INNER JOIN contacts B ON A.sendto=B.id
                WHERE B.userid=?
                AND issent
                AND NOT isread
                ORDER BY dateadded DESC
                LIMIT 3;";

        return $this->db->query($sql, [$userId]);
    }

    function getMessageById($sendTo, $messageId)
    {
        $sql = "SELECT A.contactid, A.sendto, B.name, A.subject, A.content, A.dateadded
                FROM messages A
                INNER JOIN contacts B ON A.contactid=B.id
                INNER JOIN users C ON B.userid=C.id
                WHERE A.sendto=?
                AND issent
                AND A.id=?";

        return $this->db->query($sql, [$sendTo, $messageId]);
    }

    function getUnreadMessageCount($sendTo)
    {
        $sql = "SELECT * FROM messages WHERE issent AND NOT isread AND sendto=?";

        return $this->db->query($sql, [$sendTo])->num_rows();
    }
}
