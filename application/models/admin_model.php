<?php
    class admin_model extends CI_Model{
        
        public function insert_data($infoAdmin){ //insertion des donnees dans la BDD
            $this->db->insert('admins',$infoAdmin);
       }
        public function get_data(){ //recuperation des donnees se trouvant dans la BDD
            $query = $this->db->get('admins');
            return $query->result_array();
        }
        public function suppression($id){ //suppression d'une ligne en utilisant l'id
            $this->db->delete('admins',array('id'=> $id));
        }
    }

?>