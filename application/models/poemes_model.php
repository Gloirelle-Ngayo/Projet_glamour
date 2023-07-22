<?php
    class poemes_model extends CI_Model{
       
        public function insert_data($info){ //insertion des donnees dans la BDD
            $this->db->insert('poemes',$info);
       }
       public function get_data(){ //recuperation des donnees dans la BDD
            $query = $this->db->get('poemes');
            return $query->result_array();
       }
       public function recu_ligne(){ //calcule du nombre total des éléments e trouvant dans le tableau
        return $this->db->count_all('poemes');
        }

       public function recu_ligne_modif($id){  //recuperation de l'id concerner
        $query = $this->db->get_where('poemes', array('id' => $id));
        return $query->row_array();
        }

        public function update($id,$data){ // code de modification de la ligne
        $this->db->update('poemes', $data, array('id' => $id));
        }

        public function suppression($id){ //suppression d'une ligne en utilisant le id
            $this->db->delete('Poemes',array('id'=> $id));
        }
    }
?>