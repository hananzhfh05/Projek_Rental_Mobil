<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {
    public function index(){
        $this->load->model('sewa_model','users');
        $list_mobil = $this->users->getAll();
        $data['list_sewa'] = $list_mobil;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/index',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $id = $this->input->get('mobil_id');
        $this->load->model('mobil_model', 'users');
        $data ['findMobil'] = $this->users->findById($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/create', $data);
        $this->load->view('layout/footer');

    }

    public function daftar(){
        $this->load->model('mobil_model','users');
        $get_mobil = $this->users->getSome();
        $data['get_mobil'] = $get_mobil;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/daftar', $data);
        $this->load->view('layout/footer');
        //content
        // $this->load->view('layout/footer');

        }

    public function save(){
        $this->load->model('sewa_model','users');

        $_tgl_mulai = $this->input->post('tgl_mulai');
        $_tgl_akhir = $this->input->post('tgl_akhir');
        $_tujuan = $this->input->post('tujuan');
        $_noktp = $this->input->post('noktp');
        $_users_id = $this->input->post('users_id');
        $_mobil_id = $this->input->post('mobil_id');
        $_idedit = $this->input->post('idedit');


        $data_sewa[] = $_tgl_mulai ;
        $data_sewa[] = $_tgl_akhir ;
        $data_sewa[] = $_tujuan ;
        $data_sewa[] = $_noktp ;
        $data_sewa[] = $_users_id ;
        $data_sewa[] = $_mobil_id ;

        if (isset($_idedit)){
            
            $data_sewa[] = $_idedit;
            $this->users->update($data_sewa);
            $_id = $_idedit;
            
        }else {
            $this->users->save($data_sewa);
            $row = $this->users->lastId();
            $_id = $row->id;
        }
        redirect(base_url().'index.php/sewa/view?id='.$_id, 'refresh');


        

    }
    public function view(){
        $id = $this->input->get('id');
        $this->load->model('sewa_model', 'users');
        $data ['sewa'] = $this->users->findByMobil($id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/view',$data);
        $this->load->view('layout/footer');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('sewa_model','users');
        $sewa_edit = $this->users->findById($_id);

        $data['sewa_edit'] =$sewa_edit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('sewa_model','users');
        $sewa_edit = $this->users->findById($_id);
        $this->users->delete($_id);
        redirect(base_url().'index.php/sewa/list', 'refresh');
    }

    
}