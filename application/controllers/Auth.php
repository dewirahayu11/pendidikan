<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('AuthModel');
        $this->load->library('form_validation');
    }
    public function beranda(){
        $this->load->view('beranda');
    }
    public function about(){
        $this->load->view('about');
    }
    public function ourteam(){
        $this->load->view('ourteam');
    }
    public function panduan(){
        $this->load->view('panduan');
    }
    public function contact(){
        $this->load->view('contact');
    }
    public function ourproduct(){
        $this->load->view('ourproduct');
    }
    public function mainclass(){
        $this->load->view('mainclass');
    }
    public function kelas1(){
        $this->load->view('kelas1');
    }
    public function kelas2(){
        $this->load->view('kelas2');
    }
    public function kelas3(){
        $this->load->view('kelas3');
    }
    public function kelas4(){
        $this->load->view('kelas4');
    }
    public function kelas5(){
        $this->load->view('kelas5');
    }
    public function kelas6(){
        $this->load->view('kelas6');
    }
    public function login(){
        $this->load->view('login');
    }
    public function syarat_ketentuan(){
        $this->load->view('syarat_ketentuan');
    }
    public function proses_login(){
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if( $this->form_validation->run() === FALSE){
            $this->load->view('login');
        } else {
            $email = $this->input->post('email');
            $cek = $this->AuthModel->cekEmail($email);
            if( $cek->num_rows() === 1 ){
                $password = $this->input->post('password');

                if(password_verify($password, $cek->row()->password)){
                    
                    $session['nama_lengkap'] = $cek->row()->nama_lengkap;
                    $session['logged_in'] = TRUE;
                    $this->session->set_userdata($session);

                    redirect('auth/mainclass');

                } else {
                    echo "Maaf password yang anda masukkan salah";
                }
            } else {
                echo "Maaf email anda tidak terdaftar";
            }
        }
    }
    public function registrasi(){
        $this->load->view('registrasi');
    }
   public function proses_register(){
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]');

        if( $this->form_validation->run() === FALSE){
            $this->load->view('registrasi');
        } else {
            $data = [
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'nama_lengkap' => $this->input->post('nama_lengkap')
            ];
            $insert = $this->AuthModel->registrasi($data);
            if($insert){
                redirect('auth/login');
            } else {
                echo 'Terjadi kesalahan';
            }
        }   
    }
}
