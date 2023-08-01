<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Proverbes extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Proverbes_model'); //chargement du model poemes
        }
         
        public function index() { // chargement de la vue proverbes
            $tab['affiche'] = $this->Proverbes_model->get_data();
            $this->load->view('templates/header');
            $this->load->view('proverbes',$tab);
            $this->load->view('templates/footer');
        }
           
        public function ajoutpro() { // chargement de la vue qui gere l'ajout des proverbes
            $this->load->view("templates/headerAdm");
            $this->load->view('ajoutpro');
        }
        public function supProv() { // chargement de la vue qui gere la supression des proverbes
            $data['affiche'] = $this->Proverbes_model->get_data();
            $this->load->view("templates/headerAdm");
            $this->load->view('DeleteProv',$data);
        }

        public function modifProverbes(){ // chargement de la vue qui gere la modification des proverbes
            $tab['affiche'] = $this->Proverbes_model->get_data();
            $this->load->view("templates/headerAdm");
            $this->load->view('modifProv',$tab);
        }
        
        public function dach(){ // chargement de la vue dashboard
            $data['aff1'] = $this->Proverbes_model->recu_ligne();
            $this->load->view('dashboard',$data);
        }
        public function validation(){
            
            $this->form_validation->set_rules('titrePro','titrePro','trim|required');
            $this->form_validation->set_rules('auteurPro','auteurPro','trim|required');
            $this->form_validation->set_rules('contenuPro','contenuPro','trim|required');
    
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
                    'titre' => $this->input->post('titrePro'),
                    'auteur' => $this->input->post('auteurPro'),
                    'contenu' => $this->input->post('contenuPro'),
                    'image' => $prod_filename,
                );
                $this->Proverbes_model->insert_data($tab);
                redirect('Proverbes/recuperer');
            }

        }else{
            $this->ajoutpro();
        }
        
    }

    public function updateIdentite($id){
       
        $this->form_validation->set_rules('titrePro','titrePro','trim|required');
        $this->form_validation->set_rules('contenuPro','contenuPro','trim|required');

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
                $imageError  =  array('image_proverbe'=>$this->upload->display_errors());
            } else {
                # code...
                $prod_filename = $this->upload->data('file_name');
                $data = array(
                    'titre' => $this->input->post('titrePro'),
                    'contenu' => $this->input->post('contenuPro'),
                    'image' => $prod_filename,
                );
                $this->Proverbes_model->update($id,$data);
                redirect('Proverbes/recuperer');
            }
        }else{
            $this->index();
        }

        redirect('Proverbes/recuperer');
    }
    public function recuperer(){ // reccuperation des données de la BDD à partir d'une métohde du model et affiche des données dans une vu
        $data['affiche'] = $this->Proverbes_model->get_data();
         $this->load->view('proverbes',$data);
    }

    public function modification($id){ //modification de la ligne concernée 
        $data['affiche'] = $this->Proverbes_model->recu_ligne_modif($id);
        $this->load->view("templates/headerAdm");
        $this->load->view('modifLigneProv',$data);
    }
    
    public function delete($id){
        $this->Proverbes_model->suppression($id);
        redirect('Proverbes/recuperer');
       }
    }

?>