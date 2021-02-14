<?php

class Chat extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('M_chat');

        date_default_timezone_set('Asia/Jakarta');
    }

//     public function data(){
         
// }  

    //function untuk con_utama
    public function index(){
        $data['user']   = $this->session->userdata('user');
        $data['akses']  = $this->session->userdata('akses');
        $data['status'] = $this->session->userdata('status');
        $data['title']  = 'Halaman Utama'.' '.ucfirst($data['akses']);

        $data['tampil_pesan']   = $this->M_chat->tampil_pesan();

        $this->load->view('layout/header', $data);
        $this->load->view('layout/nav', $data);
        $this->load->view('layout/con_utama', $data);
        $this->load->view('layout/footer', $data);    
    }

    public function input_pesan(){
        $pengirim   = $this->session->userdata('user');
        $waktu      = date('20y-m-d H:i:s');
        $teks       = $this->input->post('teks');

        $data   =   array(
                        'pengirim'  => $pengirim,
                        'waktu'     => $waktu,
                        'teks'      => $teks
                    );

        $sikat = $this->M_chat->input_pesan($data);

        redirect(base_url('chat'));
                    
    }

    public function tampil_user(){
            $data['user']   = $this->session->userdata('user');
            $data['akses']  = $this->session->userdata('akses');
            $data['status'] = $this->session->userdata('status');
            $data['title']  = 'Halaman Data User';
            
            $data['tampil_user']    = $this->M_chat->tampil_user();

            $this->load->view('layout/header', $data);
            $this->load->view('layout/nav', $data);
            $this->load->view('layout/con_datauser', $data);
            $this->load->view('layout/footer', $data);
    }

    public function aktif_user($id_user){
            $data['user']   = $this->session->userdata('user');
            $data['akses']  = $this->session->userdata('akses');
            $data['status'] = $this->session->userdata('status');
            $data['title']  = 'Halaman Utama'.' '.ucfirst($data['akses']);

            $status = 'aktif';

            $data = array('status'=>$status);

            $gas = $this->M_chat->aktif_user($id_user, $data);
            redirect(base_url('chat/tampil_user'));
    }

    public function nonaktif_user($id_user){
        $data['user']   = $this->session->userdata('user');
        $data['akses']  = $this->session->userdata('akses');
        $data['status'] = $this->session->userdata('status');
        $data['title']  = 'Halaman Utama'.' '.ucfirst($data['akses']);

        $status = 't_aktif';

        $data = array('status'=>$status);

        $gas = $this->M_chat->nonaktif_user($id_user, $data);
        redirect(base_url('chat/tampil_user'));
    }

    // public function ubah_user(){

    // }

    public function hapus_user($id_user){
        $this->M_chat->hapus_user($id_user);
        redirect(base_url('chat/tampil_user'));
    }

   

}