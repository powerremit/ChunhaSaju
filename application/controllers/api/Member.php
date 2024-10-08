<?php
require_once APPPATH . 'controllers/common/CommonLoader.php';

class Member extends CommonLoader
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
    }


    function insert_member()
    {
        $id= $this->input->post('id');
        $pw = $this->input->post('pw');

        // 아이디 중복 체크
//        $check = $this->Member_model->check_member_id($id);
//        if($check != NULL) {
//            echo $this->ajax_error_form('아이디가 존재합니다.');
//            return;
//        }

//        $checkRegion = $this->checkRegion();
        $ip = $this->getUserIP();
        $region = $this->getLocation($ip);

        $input_data = array(
            'id' => $id,
            'pw' => password_hash($pw, PASSWORD_BCRYPT),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'birthday' => $this->input->post('birthday'),
            'tel' => $this->input->post('tel'),
            'region' => is_null($region) ? null : $region['countryCode'],
            'ip' => $ip,
        );

        $res = $this->Member_model->insert_member($input_data);
        if ($res > 0) {
            echo $this->ajax_success_form('회원가입성공');
        } else {
            echo $this->ajax_error_form('회원가입실패');
        }

    }

    function login() {
        $input_data = array(
            'id' => $this->input->post('id'),
            'pw' => cryptoJSdecrypt($this->input->post('pw'),CRYPTOJS_KEY)
        );
    }





}

