<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends CI_Controller {
    public function index(){
        $this->load->model('merk_model','merk');

        $data['list_mrk']=$this->merk->getAll();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/index',$data);
        $this->load->view('layout/footer');
        
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('merk_model','merk');
        $data['mrk']=$this->merk->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/view',$data);
        $this->load->view('layout/footer');
        //die("ID ".$_id);
    }

    public function create(){
        $data['judul']='Form Kelola merk';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("merk_model","merk");

        $_nama = $this->input->post('nama');
        $_produk = $this->input->post('produk');
        $_idedit = $this->input->post('idedit');//hidden field

        $data_mrk[]=$_nama;// ? 2
        $data_mrk[]=$_produk;// ? 3

        if(isset($_idedit)){
            //update data lama
            $data_mrk[]=$_idedit; 
            $this->merk->update($data_mrk);
            $_id = $_idedit;  
        }else{ // save data baru
            // panggil fungsi save di model 
            $this->merk->save($data_mrk); 
            $row = $this->merk->lastId();
            $_id = $row->id;  
        }
        
        redirect(base_url().'index.php/merk/view?id='.$_id, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("merk_model","merk");
        $mrkedit = $this->merk->findById($_id);

        $data['judul']='Form Update merk';
        $data['mrkedit']=$mrkedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("merk_model","merk");
        $this->merk->delete($_id);
        redirect(base_url().'index.php/merk', 'refresh');
    }
    
}
