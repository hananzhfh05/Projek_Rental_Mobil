<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
    public function index(){
        $this->load->view('register');
    }

    public function save(){
        $this->load->model('user_model','users');

        $_username = $this->input->post('username');
        $_password1 = $this->input->post('password1');
        $_password2 = $this->input->post('password2');
        $_email = $this->input->post('email');

        $data_user[] = $_username;
        $data_user[] = $_password1;
        $data_user[] = $_email;
        $this->users->register($data_user);
        redirect(base_url().'index.php/login');

    }

    
}
        
        
        
        


    // public function view(){
    //     $_id = $this->input->get('id');
    //     $this->load->model('perawatan_model','perawatan');
    //     $data['rawat']=$this->perawatan->findById($_id);

    //     $this->load->view('layout/header');
    //     $this->load->view('layout/sidebar');
    //     $this->load->view('perawatan/view',$data);
    //     $this->load->view('layout/footer');
    //     //die("ID ".$_id);
    // }

    // public function create(){
    //     $data['judul']='Form Kelola Perawatan';
    //     $this->load->view('layout/header');
    //     $this->load->view('layout/sidebar');
    //     $this->load->view('perawatan/create',$data);
    //     $this->load->view('layout/footer');
    // }

    
    // public function edit(){
    //     $_id = $this->input->get('id');
    //     $this->load->model("perawatan_model","perawatan");
    //     $rawatedit = $this->perawatan->findById($_id);

    //     $data['judul']='Form Update Perawatan';
    //     $data['rawatedit']=$rawatedit;
    //     $this->load->view('layout/header');
    //     $this->load->view('layout/sidebar');
    //     $this->load->view('perawatan/update',$data);
    //     $this->load->view('layout/footer');
    // }

    // public function delete(){
    //     $_id = $this->input->get('id');
    //     $this->load->model("perawatan_model","perawatan");
    //     $this->perawatan->delete($_id);
    //     redirect(base_url().'index.php/perawatan', 'refresh');
    // }






