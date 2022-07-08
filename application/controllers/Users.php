<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
    public function index(){
        $this->load->model('users_model','users');
        $list_users = $this->users->getAll();
        $data['list_users'] = $list_users;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('users_model','users');
        $data['user']=$this->users->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/view',$data);
        $this->load->view('layout/footer');
        //die("ID ".$_id);
    }

    public function save(){
        $this->load->model("users_model","users");

        $_username = $this->input->post('username');
        $_password1 = $this->input->post('password1');
        $_email = $this->input->post('email');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');
        $_idedit = $this->input->post('idedit');

        $data_users[] = $_username;
        $data_users[] = $_password1;
        $data_users[] = $_email;
        $data_users[] = $_status;
        $data_users[] = $_role;

        if(isset($_idedit)){
            //update data lama
            $data_users[]=$_idedit; // ? 8
            $this->users->update($data_users); 
            $_id = $_idedit; 
        }
        redirect(base_url().'index.php/users/view?id='.$_id, 'refresh');

    }
    

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("users_model","users");
        $useredit = $this->users->findById($_id);
        $data['useredit']=$useredit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("users_model","users");
        $this->users->delete($_id);
        redirect(base_url().'index.php/users', 'refresh');
    }
}