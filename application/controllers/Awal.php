<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Awal extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Kampus Online | Media Pembelajaran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }
    public function nilai()
    {
        $data['title'] = "Halaman Nilai Ku";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('mahasiswa/nilai', $data);
        $this->load->view('template/footer');
    }
    public function krs()
    {
        $data['title'] = "Halaman Nilai Ku";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('mahasiswa/krs', $data);
        $this->load->view('template/footer');
    }
    public function profile()
    {
        $data['title'] = "Halaman Profile ku";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('mahasiswa/profile', $data);
        $this->load->view('template/footer');
    }
    public function kuliah()
    {
        $data['title'] = "Halaman Kuliah";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('mahasiswa/kuliah', $data);
        $this->load->view('template/footer');
    }
    public function kalender()
    {
        $data['title'] = "Halaman kalender";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('mahasiswa/kalender', $data);
        $this->load->view('template/footer');
    }
    public function magang()
    {
        $data['title'] = "Halaman Magang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['magang'] = $this->db->get('magang')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('mahasiswa/magang', $data);
        $this->load->view('template/footer');
    }
    public function job()
    {
        $data['title'] = "Halaman Job Fair";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['job'] = $this->db->get('job')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('mahasiswa/job', $data);
        $this->load->view('template/footer');
    }
}
