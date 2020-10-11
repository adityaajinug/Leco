<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
  public function index()
  {
    $data['title'] = "Kampus Online | Media Pembelajaran";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_dosen', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('dosen/index', $data);
    $this->load->view('template/footer');
  }
  public function profile()
  {
    $data['title'] = "Halaman Profile ku";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_dosen', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('dosen/profile', $data);
    $this->load->view('template/footer');
  }
  public function kuliah()
  {
    $data['title'] = "Halaman Kuliah";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar_dosen', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('dosen/kuliah', $data);
    $this->load->view('template/footer');
  }
}
