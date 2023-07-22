<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Motivations_model');
            $this->load->model('Citations_model');
            $this->load->model('poemes_model');
            $this->load->model('Proverbes_model');
        }
        public function index(){
            $data['erreur'] = " ";
            $this->load->view('login',$data);
        }
        public function acceuil(){
            $data['aff3'] = $this->Motivations_model->recu_ligne();
            $data['aff2'] = $this->Citations_model->recu_ligne();
            $data['aff'] = $this->poemes_model->recu_ligne();
            $data['aff1'] = $this->Proverbes_model->recu_ligne();

            $this->load->view('dashboard',$data);
            
        }
       
    }

?>