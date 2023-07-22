<?php
     defined('BASEPATH') OR exit('No direct script access allowed');

     class Login extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('login_model');
        }

        public function index(){
            $data['erreur'] = " ";
            $this->load->view('login',$data);
        }

        public function validation(){
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('email','email','trim|required|valid_email');
            $this->form_validation->set_rules('password','password','trim|required|min_length[8]|alpha_dash');


            if ($this->form_validation->run()) {
                $id_user = $this->input->post('email');
                $pass_user = $this->input->post('password');

                $recu = $this->login_model->get_data();
                $id_bdd = $recu['email'];
                $pass_bdd = $recu['password'];
                if (($id_bdd == $id_user) && ($pass_bdd == $pass_user) ) {
                    redirect('Admin/acceuil');
                } else {
                    !
                    $data['erreur'] = "Informations invalides";
                    $this->load->view('login',$data); 
                }
            }else {
                $this->index();
            }   
        }
        public function deconect(){
            $id_user = "toto";
            $pass_user = "..";
            $recu = $this->login_model->get_data();
            $id_bdd = $recu['email'];
            $pass_bdd = $recu['mot_de_passe'];
            if (($id_bdd == $id_user) && ($pass_bdd == $pass_user) ) {
               // code
            } else {
                redirect('Admin');
            }
        }
     }
?>