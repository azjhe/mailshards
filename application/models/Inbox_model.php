<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    function getInbox($sendTo)
    {
        $sql = "SELECT A.id,
                       A.contactid,
                       B.name,
                       B.email,
                       A.subject,
                       content,
                       issent,
                       isread,
                       isdraft,
                       isimportant,
                       dateadded
                FROM messages A
                INNER JOIN contacts B ON A.contactid=B.userid
                INNER JOIN users C ON B.userid=C.id
                WHERE sendto=?
                ORDER BY isread;";

        return $this->db->query($sql, [$sendTo]);
    }

    function setMessageAsRead($messageId)
    {
        $sql = "UPDATE messages SET isread=1 WHERE id=?";

        $this->db->query($sql, [$messageId]);
    }

}
