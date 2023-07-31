<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Citations extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Citations_model'); //chargement du model citations
        }
         
        public function index() { // chargement de la vue citations
            $tab['affiche'] = $this->Citations_model->get_data();
            $this->load->view("templates/header");
            $this->load->view('citations',$tab);
            $this->load->view("templates/footer");
        }
        public function ajoutCit(){ // chargement de la vue qui gere l'ajout des citations
            $this->load->view('AjoutCit');
        }

        public function modifCitations(){ // chargement de la vue qui gere la modification des citations
            $tab['affiche'] = $this->Citations_model->get_data();
            $this->load->view('modifCita',$tab);
            
        }
        public function supCit() { // chargement de la vue qui gere la supression des citations
            $data['affiche'] = $this->Citations_model->get_data();
            $this->load->view('DeleteCit',$data);
        }
        
        public function dach(){ // chargement de la vue dashboard
            $data['aff2'] = $this->Citations_model->recu_ligne();
            $this->load->view('dashboard',$data);
        }
        public function validation(){ // code de validation des regles du formulaire
            
            $this->form_validation->set_rules('titreCit','titreCit','trim|required');
            $this->form_validation->set_rules('auteurCit','auteurCit','trim|required');
            $this->form_validation->set_rules('contenuCit','contenuCit','trim|required');
    
            if($this->form_validation->run()){
            
            $ori_filename = $_FILES['image']['name'];// obtention du chemin de l'image
            $new_name = time()."".str_replace(' ','-',$ori_filename);
            $config = [ //configuration des informations pour le telechargement de l'image
                'upload_path' => './images/',
                'allowed_types' => 'gif|jpg|png|jpeg',
                'file_name' => $new_name,
            ];
            $this->load->library('upload', $config); //chargement de la librairie upload qui permet le telechargement
            if (! $this->upload->do_upload('image')) //cas ou le telechargement de l'image n'a pas aboutit
            {
                # code...
                $imageError  =  array('image'=>$this->upload->display_errors());
            } else {
                # code...
                $prod_filename = $this->upload->data('file_name');
                $tab = array(
                    'titre' => $this->input->post('titreCit'),
                    'auteur' => $this->input->post('auteurCit'),
                    'contenu' => $this->input->post('contenuCit'),
                    'image' => $prod_filename,
                );
                $this->Citations_model->insert_data($tab);
                redirect('Citations/recuperer');
            }

        }else{
            $this->ajoutCit();
        }
        
    }
    public function updateIdentite($id){
       
        $this->form_validation->set_rules('titreCit','titreCit','trim|required');
        $this->form_validation->set_rules('contenuCit','contenuCit','trim|required');

    if ($this->form_validation->run()) {

        $ori_filename = $_FILES['image']['name'];// obtention du chemin de l'image
        $new_name = time()."".str_replace(' ','-',$ori_filename);
        $config = [ //configuration des informations pour le telechargement de l'image
            'upload_path' => './images/',
            'allowed_types' => 'gif|jpg|png|jpeg',
            'file_name' => $new_name,
        ];
        $this->load->library('upload', $config); //chargement de la librairie upload qui permet le telechargement
        if (! $this->upload->do_upload('image')) //cas ou le telechargement de l'image n'a pas aboutit
        {
            # code...
            $imageError  =  array('image_citation'=>$this->upload->display_errors());
        } else {
            # code...
            $prod_filename = $this->upload->data('file_name');
            $data = array(
                'titre' => $this->input->post('titreCit'),
                'contenu' => $this->input->post('contenuCit'),
                'image' => $prod_filename,
            );
            $this->Citations_model->update($id,$data);
            redirect('Citations/recuperer');
        }
    }else{
        $this->index();
    }

    redirect('Citations/recuperer');
}
public function recuperer(){ // reccuperation des données de la BDD à partir d'une métohde du model et affiche des données dans une vu
    $data['affiche'] = $this->Citations_model->get_data();
     $this->load->view('citations',$data);
}

public function modification($id){ //recuperation de la ligne concernée
    $data['affiche'] = $this->Citations_model->recu_ligne_modif($id);
    $this->load->view('modifLigneCit',$data);
}
public function delete($id){
    $this->Citations_model->suppression($id);
    redirect('Citations/recuperer');
}



}

?>