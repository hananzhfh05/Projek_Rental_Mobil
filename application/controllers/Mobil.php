<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

    public function index(){
        $this->load->model('mobil_model','mobil');
        $list_mbl = $this->mobil->getAll();
        $data['list_mbl'] = $list_mbl;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/index',$data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('mobil_model','mobil');
        $data['mbl']=$this->mobil->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/view',$data);
        $this->load->view('layout/footer');
        //die("ID ".$_id);
    }

    public function create(){
        $data['judul']='Form Kelola Mobil';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("mobil_model","mobil");

        $_nopol = $this->input->post('nopol');
        $_warna = $this->input->post('warna');
        $_biaya_sewa = $this->input->post('biaya_sewa');
        $_deskripsi = $this->input->post('deskripsi');
        $_cc = $this->input->post('cc');
        $_tahun = $this->input->post('tahun');
        $_merk_id = $this->input->post('merk_id');
        $_foto = $this->input->post('foto');
        $_idedit = $this->input->post('idedit');//hidden field

        $data_mbl[]=$_nopol;// ? 2
        $data_mbl[]=$_warna;// ? 3
        $data_mbl[]=$_biaya_sewa;// ? 4
        $data_mbl[]=$_deskripsi;// ? 5
        $data_mbl[]=$_cc;// ? 6
        $data_mbl[]=$_tahun;// ? 7
        $data_mbl[]=$_merk_id;// ? 8
        // $data_mbl[]=$_foto;// ? 9

        if(isset($_idedit)){
            //update data lama
            $data_mbl[]=$_idedit; // ? 8
            $this->mobil->update($data_mbl);
              $_id = $_idedit;
        }else{ // save data baru
            // panggi fungsi save di model 
            $this->mobil->save($data_mbl);
            $row = $this->mobil->lastId();
            $_id = $row->id;   
        }
        
        redirect(base_url().'index.php/mobil/view?id='.$_id, 'refresh');

    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model("mobil_model","mobil");
        $mbledit = $this->mobil->findById($_id);

        $data['judul']='Form Update Mobil';
        $data['mbledit']=$mbledit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model("mobil_model","mobil");
        $this->mobil->delete($_id);
        redirect(base_url().'index.php/mobil', 'refresh');
    }
    

public function upload(){
    $config['upload_path']      = './uploads/';
    $config['allowed_types']    = 'jpg|png';
    $config['max_size']         = 500;
    $config['max_width']        = 1024;
    $config['max_height']       = 768;

    $_id = $this->input->post('id');

    $array = explode('.', $_FILES['foto_mobil']['name']);
    $extension = end($array);

    $this->load->model('mobil_model','mobil');
    $edit_mobil = $this->mobil->findById($_id);
    $new_name = $edit_mobil->nopol.'.'.$extension;
    // $new_name = $_id.'.'.$extension;
    $config['file_name'] = $new_name;

    $this->load->library('upload',$config);
    if (! $this->upload->do_upload('foto_mobil'))
        {
    $error = array('error' => $this->upload->display_errors());
    // $die(print_r($error));
    // $this->load->view('upload_form',$error);
}
else
//panggil model
    {

        // $this->load->model('user_model','users');
        $this->load->model('mobil_model','mobil');
        $array_data[] = $new_name;
        $array_data[] = $_id;  
        $this->mobil->update_foto($array_data);

        $data = [$new_name, $_id];
        $this->mobil->update_foto($data);
        // $data = array('upload_data' => $this->upload->data());

        }
        redirect(base_url().'index.php/mobil/view?id='.$_id);
    }

}