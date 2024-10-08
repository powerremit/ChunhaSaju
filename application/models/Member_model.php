<?php
class Member_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function check_member_id($id){
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->where('id',$id);

        return $this->db->get()->row();
    }
    function insert_member($option)
    {
        $this->db->set('id', $option['id']);
        $this->db->set('pw', $option['pw']);
        $this->db->set('name', $option['name']);
        $this->db->set('email', $option['email']);
        $this->db->set('birthday', $option['birthday']);

        // 회원정보 추가해야할사항
        $this->db->set('tel', $option['tel']);
        $this->db->set('region', $option['region']);
        $this->db->set('ip', $option['ip']);

        $this->db->set('reg_dt', 'NOW()', FALSE);
        $this->db->insert('tbl_member');
        return $this->db->insert_id();
    }



}