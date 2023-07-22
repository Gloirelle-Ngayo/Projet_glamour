<?php
    class login_model extends CI_Model{
        public function insertion($identifiants){
            $this->db->insert('login',$identifiants);
        }

        public function get_data(){
            $query = $this->db->get('login');
            return $query->row_array();
        }
    }
?>