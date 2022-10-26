<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* Simple_login Class
* Class ini digunakan untuk fitur login, proteksi halaman dan logout
* @author  Gun Gun Priatna
* @url    https://recodeku.blogspot.com
*/

class Simple_login {

  // SET SUPER GLOBAL
  var $CI = NULL;

  /**
   * Class constructor
   *
   * @return   void
   */
  public function __construct() {
      $this->CI =& get_instance();
  }

  
  public function login($email, $password) {
    
      //cek email dan password
      $query = $this->CI->db->get_where('tbl_pegawai',array('email'=>$email,'password' => md5($password)));

      if($query->num_rows() == 1) {
          //ambil data user berdasar email
          $row  = $this->CI->db->query('SELECT id_pegawai,nama_pegawai,role,foto FROM tbl_pegawai where email = "'.$email.'"');
          $admin     = $row->row();
          $id   = $admin->id_pegawai;
          $role   = $admin->role;
          $foto   = $admin->foto;
          $nama_pegawai   = $admin->nama_pegawai;

          //set session user
          $this->CI->session->set_userdata('email', $email);
          $this->CI->session->set_userdata('nama_pegawai', $nama_pegawai);
          $this->CI->session->set_userdata('id_login', uniqid(rand()));
          $this->CI->session->set_userdata('id', $id);
          $this->CI->session->set_userdata('role', $role);
          $this->CI->session->set_userdata('foto', $foto);

          //redirect ke halaman dashboard
          echo 1;
        //   redirect(site_url('dashboard'));
      }else{

          //jika tidak ada, set notifikasi dalam flashdata.
        //   $this->CI->session->set_flashdata('sukses','email atau password anda salah, silakan coba lagi.. ');

          //redirect ke halaman login
          echo 2;
        //   redirect(site_url('login'));
      }
       return false;
   }

  /**
   * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
   * login
   */
  public function cek_login() {

      //cek session email
      if($this->CI->session->userdata('email') == '') {

          //set notifikasi
          $this->CI->session->set_flashdata('sukses','Anda belum login');

          //alihkan ke halaman login
          redirect(base_url('/'));
      }
  }
  public function isLogin() {

      //cek session email
      if(!empty($this->CI->session->userdata('email') )) {
          //alihkan ke halaman login
          redirect(base_url('dashboard'));
      }
  }


  /**
   * Hapus session, lalu set notifikasi kemudian di alihkan
   * ke halaman login
   */
  public function logout() {
      $this->CI->session->unset_userdata('email');
      $this->CI->session->unset_userdata('id_login');
      $this->CI->session->unset_userdata('nama_pegawai');
      $this->CI->session->unset_userdata('id');
      $this->CI->session->unset_userdata('role');
      $this->CI->session->unset_userdata('foto');
      $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
      redirect(base_url('/'));
  }
}