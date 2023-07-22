<?php
    class Proverbes_model extends CI_Model{
       
        public function insert_data($info){ //insertion des donnees dans la BDD
            $this->db->insert('proverbes',$info);
       }
       public function get_data(){ //recuperation des donnees dans la BDD
            $query = $this->db->get('proverbes');
            return $query->result_array();
       }
       public function recu_ligne(){ //recuperation des lignes de la table proverbe
        return $this->db->count_all('proverbes');
        }

        public function recu_ligne_modif($id){  //recuperation de l'id concerner
            $query = $this->db->get_where('proverbes', array('id' => $id));
            return $query->row_array();
       }
  
       public function update($id,$data){ // code de modification de la ligne
            $this->db->update('proverbes', $data, array('id' => $id));
       }
       public function suppression($id){ //suppression d'une ligne en utilisant le id
          $this->db->delete('Proverbes',array('id'=> $id));
      }
    }
?>