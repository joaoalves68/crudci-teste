<?php

Class Search_model extends CI_Model{

    public function buscar($busca)
    {
        if(empty($busca)) 
        {
            return array();
        }

        $this->db->like("name", $busca);
        return $this->db->get("tb_games")->result_array();
    }
}