<?php
    class Motivations_model extends CI_Model{
       
     public function insert_data($info){ //insertion des donnees dans la BDD
            $this->db->insert('motivations',$info);
     }
     public function get_data(){ //recuperation des donnees dans la BDD
            $query = $this->db->get('motivations');
            return $query->result_array();
     }
     public function recu_ligne(){
            return $this->db->count_all('motivations');
     }
     public function recu_ligne_modif($id){  //recuperation de l'id concerner
          $query = $this->db->get_where('motivations', array('id' => $id));
          return $query->row_array();
     }

     public function update($id,$data){ // code de modification de la ligne
          $this->db->update('motivations', $data, array('id' => $id));
     }

     public function suppression($id){ //suppression d'une ligne en utilisant le id
       $this->db->delete('motivations',array('id'=> $id));
   }
    }
?>