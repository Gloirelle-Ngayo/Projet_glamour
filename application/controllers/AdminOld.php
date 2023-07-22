<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

        class AdminOld extends CI_Controller{
            
            public function __construct(){
                parent::__construct();
                $this->load->model('admin_model'); //chargement du model Admin
            }
            public function ajoutAdmin(){ // chargement de la vue qui gere l'ajout des Administrateur
                $data['afficheAdmin'] = $this->admin_model->get_data();
                $this->load->view('ajoutAdmin',$data);
            }
            public function supAdmin() { // chargement de la vue qui gere la supression des Admins
                $data['afficheAdmin'] = $this->admin_model->get_data();
                $this->load->view('supAdmin',$data);
            }
            public function validation(){ // code de validation des regles du formulaire
    
                $this->form_validation->set_rules('nomAdmin','nomAdmin','trim|required');
                $this->form_validation->set_rules('prenomAdmin','prenomAdmin','trim|required');
                $this->form_validation->set_rules('adresseAdmin','adresseAdmin','trim|required');
                $this->form_validation->set_rules('password','password','trim|required');

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
                    $data = array(
                        'nom' => $this->input->post('nomAdmin'),
                        'prenom' => $this->input->post('prenomAdmin'),
                        'adresse' => $this->input->post('adresseAdmin'),
                        'password' => $this->input->post('password'),
                        'image' => $prod_filename,
                    );
                    
                    $this->admin_model->insert_data($data);
                    $this->session->set_flashdata('statut','Administrateurs ajouter avec succès!'); 
                    redirect('AdminOld/ajoutAdmin');
                }

            }else{
                $this->ajoutAdmin();
            }
    }
    public function delete($id){
        $this->admin_model->suppression($id);
        $this->session->set_flashdata('statut','Administrateurs Supprimer!'); 
        redirect('AdminOld/supAdmin');
    }

}

?>