<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Poemes extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('poemes_model'); //chargement du model poemes
        }
         
        public function index() {
            $data['affiche'] = $this->poemes_model->get_data();
            $this->load->view('templates/header');
            $this->load->view('poemes',$data); // chargement de la vue poemes
            $this->load->view('templates/footer');
        }
        public function ajoutPoeme(){ //chargement de la vue ajout poemes
            $this->load->view("templates/headerAdm");
            $this->load->view('ajoutPoeme');
        }

        public function modifPoemes(){ // chargement de la vue qui gere la modification des poemes
            $tab['affiche'] = $this->poemes_model->get_data();
            $this->load->view("templates/headerAdm");
            $this->load->view('modifPoeme',$tab);
        }
        public function supPoeme() { // chargement de la vue qui gere la supression des citations
            $data['affiche'] = $this->poemes_model->get_data();
            $this->load->view("templates/headerAdm");
            $this->load->view('DeletePoeme',$data);
        }
        
        public function dach(){ // chargement de la vue dashboard
            $data['aff'] = $this->poemes_model->recu_ligne();
            $this->load->view('dashboard',$data);
        }

        public function validation(){ // definition des regles de validation du formulaire
            
            $this->form_validation->set_rules('titrePoeme','titrePoeme','trim|required');
            $this->form_validation->set_rules('auteurPoeme','auteurPoeme','trim|required');
            $this->form_validation->set_rules('contenuPoeme','contenuPoeme','trim|required');
    
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
                    'titre' => $this->input->post('titrePoeme'),
                    'auteur' => $this->input->post('auteurPoeme'),
                    'contenu' => $this->input->post('contenuPoeme'),
                    'image' => $prod_filename,
                );
                $this->poemes_model->insert_data($tab);
                redirect('Poemes/recuperer');
            }

        }else{
            $this->ajoutPoeme();
        }
        
    }
    public function updateIdentite($id){
       
        $this->form_validation->set_rules('titrePoeme','titrePoeme','trim|required');
        $this->form_validation->set_rules('contenuPoeme','contenuPoeme','trim|required');

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
                    'titre' => $this->input->post('titrePoeme'),
                    'contenu' => $this->input->post('contenuPoeme'),
                    'image' => $prod_filename,
                );
                $this->poemes_model->update($id,$data);
                redirect('Poemes/recuperer');
            }
        }else{
            $this->index();
        }

        redirect('Poemes/recuperer');
    }
    public function recuperer(){ // reccuperation des données de la BDD à partir d'une métohde du model et affiche des données dans une vu
        $data['affiche'] = $this->poemes_model->get_data();
        $this->load->view('templates/header');
        $this->load->view('poemes',$data);
        $this->load->view('templates/footer');
   }
   public function modification($id){
    $data['affiche'] = $this->poemes_model->recu_ligne_modif($id);
    $this->load->view("templates/headerAdm");
    $this->load->view('modifLignePoe',$data);
    }

    public function delete($id){
        $this->poemes_model->suppression($id);
        redirect('poemes/recuperer');
    }
   
    }
?>
