<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class webController extends CI_Controller {
    
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct(){
        parent::__construct();
        $this->load->model('account');
    }
	public function index()
	{
		$this->load->view('homepage');
	}
    public function logout(){
        $this->session->sess_destroy();
        redirect('webController/index');
    }
    
    public function login_homepage(){
        $id = $this->input->post('id');
        $password = md5($this->input->post('password'));
        $ceklogin = $this->account->login($id, $password);
        if ($ceklogin) {
            $sess_data = array(
            'logged_in' => 1,
            'id' => $ceklogin->id,
            'email' => $ceklogin->email,
            'no_hp'=> $ceklogin->no_hp,
            'password'=> $ceklogin->password
            );
            $this->session->set_userdata($sess_data);
            $this->session->set_flashdata('login_alert', 'login_berhasil');
            redirect('webController/index');
        } else {
            $this->session->set_flashdata('login_alert', 'login_gagal');
            redirect('webController/index');
        }
    }
    
    public function daftar_akun(){
        $this->load->view('daftar');
        
    }
    public function daftar_akun_data(){
        $data = array(
            "id"=> $this->input->post('id',true),
            "password"=> md5($this->input->post('password',true)),
            "email" => $this->input->post('email',true),
            "hint"=> $this->input->post('hint',true),
            "hint_answer"=> $this->input->post('hintanswer',true),
            "no_hp" => $this->input->post('no_telp',true)
        );
        $table = 'user_account';
        $id = $this->input->post('id',true);
        $pass = $this->input->post('password');
        $repass = $this->input->post('repassword');
        if($pass==$repass){
        
            if($this->account->cekid_daftar($id)){
                $this->session->set_flashdata('daftar_alert', 'registrasi_gagal');
                redirect('webController/daftar_akun');
            }else{
                $this->account->daftar_akun($table, $data);
                $this->session->set_flashdata('daftar_alert', 'registrasi_berhasil');
                redirect('webController/login_button');
            }
        }else{
                $this->session->set_flashdata('daftar_alert', 'registrasi_gagal');
                redirect('webController/daftar_akun');
        }
    }
    public function ubah_informasi(){
        $this->load->view('ubah_informasi');
    }
    public function verif_ubahInformasi(){
        $this->load->view('verif_ubahInformasi');
    }
    public function verif_ubahInformasi_data(){
        $id = $this->session->userdata('id');
        $hint = $this->input->post('hint');
        $hintanswer = $this->input->post('hintanswer');
        $password = md5($this->input->post('password'));
        $cekverif = $this->account->verif_ubahInformasi($id,$password,$hint,$hintanswer);
        if ($cekverif) {
            $this->session->set_flashdata('verif_alert', 'verif_berhasil');
            redirect('webController/ubah_informasi');
        } else {
            $this->session->set_flashdata('verif_alert', 'verif_gagal');
            redirect('webController/verif_ubahInformasi');
        }
    }
    public function ubah_informasi_data(){
    $table = 'user_account';
    $id = $this->session->userdata('id');
    $no_hp = $this->input->post('no_hp');
    $data_update = array (
      'no_hp' => $no_hp
    );
    $update = $this->account->ubah_informasi($table,$id,$data_update);
    if($update){
      $this->session->set_userdata('no_hp', $no_hp);
      $this->session->set_flashdata('update_alert', 'update_berhasil');
      redirect('webController/ubah_informasi');
    }else{
      $this->session->set_flashdata('update_alert', 'update_gagal');
      redirect('webController/ubah_informasi');
    }
    }
    
    public function ubah_password_data(){
    $table = 'user_account';
    $id = $this->session->userdata('id');
    $password  = $this->session->userdata('password');
    $passwordbaru = md5($this->input->post('passwordbaru'));
    $passwordlama = md5($this->input->post('passwordlama'));
    $konfirmasipassword = md5($this->input->post('konfirmasipassword'));
    $data_update = array (
      'password' => $passwordbaru
    );
    if($konfirmasipassword==$passwordbaru){
        if($password==$passwordlama){
            $update = $this->account->ubah_password($table,$id,$data_update);
            if($update){
                $this->session->set_userdata('password', $passwordbaru);
                $this->session->set_flashdata('update_alert', 'update_berhasil');
                redirect('webController/ubah_password');
            }else{
                $this->session->set_flashdata('update_alert', 'update_gagal');
                redirect('webController/ubah_password');
            }
        }
        else{
            $this->session->set_flashdata('update_alert', 'update_gagal');
            redirect('webController/ubah_password');
        }
    }else{
        $this->session->set_flashdata('update_alert', 'update_gagal');
        redirect('webController/ubah_password');
    }
    }
    
    public function ubah_password(){
        $this->load->view('ubah_password');
    }
    
    public function login_button(){
        $this->load->view('login');
    }
    
    public function download(){
        $this->load->view('download');
    }
    public function news(){
        $this->load->view('news');
    }
    public function news_news(){
        $this->load->view('news_news');
    }
    public function news_notice(){
        $this->load->view('news_notice');
    }
    public function news_update(){
        $this->load->view('news_update');
    }
    public function news_event(){
        $this->load->view('news_event');
    }
    public function news_competition(){
        $this->load->view('news_competition');
    }
}


?>