<?php

class Login_model extends CI_MODEL{

    public function check($email, $password)
    {
        $this->db->where("email", $email);
        $this->db->where("password", md5($password));
        return $this->db->get("tb_users")->row_array();
    }
}