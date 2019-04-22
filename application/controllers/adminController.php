<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminController extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('admin');
    }
    
    public function login(){
        $this->load->view('admin_login');
    }
    public function login_data(){
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $ceklogin = $this->admin->login_admin($id, $password);
        if ($ceklogin) {
            $sess_data = array(
            'logged_in_admin' => 1,
            );
            $this->session->set_userdata($sess_data);
            $this->session->set_flashdata('login_alert', 'login_berhasil');
            redirect('adminController/dashboard');
        } else {
            $this->session->set_flashdata('login_alert', 'login_gagal');
            redirect('adminController/login');
        }
    }
    public function dashboard(){
        $this->load->view('admin_dashboard');
    }
    public function dashboard_add(){
        $this->load->view('admin_dashboardadd');
    }
    public function dashboard_add_data(){
        $waktu = date('Y-m-d H:i:s');
        $data = array(
            "nama_game"=> $this->input->post('nama_game',true),
            "judul" => $this->input->post('judul',true),
            "keterangan"=> $this->input->post('keterangan',true),
            "waktu"=> $waktu
        );
        $table = $this->input->post('tipe_berita',true);  
        $this->admin->add_berita($table,$data);
        $this->session->set_flashdata('daftar_alert', 'registrasi_berhasil');
        redirect('adminController/dashboard_add');
            
    }
    public function dashboard_delete(){
        $news = 'news';
        $data['news'] = $this->admin->getberita($news);
        $this->load->view('admin_dashboarddelete',$data);
    }
    public function dashboard_delete2(){
        $notice = 'notice';
        $data['notice'] = $this->admin->getberita($notice);
        $this->load->view('admin_dashboarddelete2',$data);
    }
    public function dashboard_delete3(){
        $updates = 'updates';
        $data['updates'] = $this->admin->getberita($updates);
        $this->load->view('admin_dashboarddelete3',$data);
    }
    public function dashboard_delete4(){
        $event = 'event';
        $data['event'] = $this->admin->getberita($event);
        $this->load->view('admin_dashboarddelete4',$data);
    }
    public function dashboard_delete5(){
        $competition = 'competition';
        $data['competition'] = $this->admin->getberita($competition);
        $this->load->view('admin_dashboarddelete5',$data);
    }
    public function dashboar_delete_data($id,$table)
	{
        $this->admin->hapusberita($id,$table);
		redirect('adminController/dashboard_delete');
	}
}

?>