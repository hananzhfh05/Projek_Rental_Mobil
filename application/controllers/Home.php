<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        public function index(){
        $this->load->model('mobil_model','users');
        $get_mobil = $this->users->getSome();
        $data['get_mobil'] = $get_mobil;
        $this->load->view('home/index', $data);
        //content
        // $this->load->view('layout/footer');

        }

        public function view(){
            $id = $this->input->get('id');
            $this->load->model('sewa_model', 'users');
            $data ['sewaMobil'] = $this->users->findByMobil($id);

            $this->load->view('home/view',$data);
    
        }
    }

    // <?php
    // defined('BASEPATH') OR exit('No direct script access allowed');
    
    // class Home extends CI_Controller {
    //     public function index(){
    //         $this->load->model('mahasiswa_model','mahasiswa');
    //         $data['list_mahasiswa']=$this->mahasiswa->getAll();
            
    //         $this->load->view('home/index',$data);
    
    //         }
    //     }