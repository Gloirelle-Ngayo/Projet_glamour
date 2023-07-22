<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Motivations extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Motivations_model'); //chargement du model poemes
        }
         
        public function index() { // chargement de la vue motivations
            $tab['affiche'] = $this->Motivations_model->get_data();
            $this->load->view('motivations',$tab);
        }
        public function ajoutMotiv() { // chargement de la vue qui gere l'ajout des motivations
            $this->load->view('ajoutMotiv');
        }
        public function modifMotivations(){ // chargement de la vue qui gere la modification des motivations
            $tab['affiche'] = $this->Motivations_model->get_data();
            $this->load->view('modifmotivations',$tab);
        }

        public function supMotiv() { // chargement de la vue qui gere la supression des citations
            $data['affiche'] = $this->Motivations_model->get_data();
            $this->load->view('DeleteMot',$data);
        }
        
        public function dach(){ // chargement de la vue dashboard
            $data['aff3'] = $this->Motivations_model->recu_ligne();
            $this->load->view('dashboard',$data);
        }
        public function validation(){ // definition des regles de validation du formulaire
            
            $this->form_validation->set_rules('titreMotiv','titreMotiv','trim|required');
            $this->form_validation->set_rules('auteurMotiv','auteurMotiv','trim|required');
            $this->form_validation->set_rules('contenuMotiv','contenuMotiv','trim|required');
    
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
                    'titre' => $this->input->post('titreMotiv'),
                    'auteur' => $this->input->post('auteurMotiv'),
                    'contenu' => $this->input->post('contenuMotiv'),
                    'image' => $prod_filename,
                );
                $this->Motivations_model->insert_data($tab);
                redirect('Motivations/recuperer');
            }

        }else{
            $this->ajoutMotiv();
        }
        
    }

    public function updateIdentite($id){
       
            $this->form_validation->set_rules('titreMotiv','titreMotiv','trim|required');
            $this->form_validation->set_rules('contenuMotiv','contenuMotiv','trim|required');

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
                $imageError  =  array('image_motivation'=>$this->upload->display_errors());
            } else {
                # code...
                $prod_filename = $this->upload->data('file_name');
                $data = array(
                    'titre' => $this->input->post('titreMotiv'),
                    'contenu' => $this->input->post('contenuMotiv'),
                    'image' => $prod_filename,
                );
                $this->Motivations_model->update($id,$data);
                redirect('Motivations/recuperer');
            }
        }else{
            $this->index();
        }

        redirect('Motivations/recuperer');
    }
    public function recuperer(){ // reccuperation des données de la BDD à partir d'une métohde du model et affiche des données dans une vu
        $data['affiche'] = $this->Motivations_model->get_data();
         $this->load->view('motivations',$data);
    }

    public function modification($id){ // recuperation de la ligne concernée
        $data['affiche'] = $this->Motivations_model->recu_ligne_modif($id);
        $this->load->view('modifLigneMot',$data);
    }

    public function delete($id){
        $this->Motivations_model->suppression($id);
        redirect('Motivations/recuperer');
    }

    }

?>