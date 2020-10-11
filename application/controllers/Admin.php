<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Kampus Online | Media Pembelajaran";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }
    // public function nilai()
    // {
    //     $data['title'] = "Halaman Nilai Ku";

    //     $this->load->view('template/header', $data);
    //     $this->load->view('template/sidebar', $data);
    //     $this->load->view('template/navbar', $data);
    //     $this->load->view('mahasiswa/nilai', $data);
    //     $this->load->view('template/footer');
    // }
    // public function krs()
    // {
    //     $data['title'] = "Halaman Nilai Ku";

    //     $this->load->view('template/header', $data);
    //     $this->load->view('template/sidebar', $data);
    //     $this->load->view('template/navbar', $data);
    //     $this->load->view('mahasiswa/krs', $data);
    //     $this->load->view('template/footer');
    // }
    public function profile()
    {
        $data['title'] = "Halaman Profile ku";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('mahasiswa/profile', $data);
        $this->load->view('template/footer');
    }
    public function kuliah()
    {
        $data['title'] = "Halaman Kuliah";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('admin/kuliah', $data);
        $this->load->view('template/footer');
    }
    // public function kalender()
    // {
    //     $data['title'] = "Halaman kalender";

    //     $this->load->view('template/header', $data);
    //     $this->load->view('template/sidebar', $data);
    //     $this->load->view('template/navbar', $data);
    //     $this->load->view('mahasiswa/kalender', $data);
    //     $this->load->view('template/footer');
    // }
    public function magang()
    {
        $data['title'] = "Halaman Magang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['magang'] = $this->db->get('magang')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('admin/magang', $data);
        $this->load->view('template/footer');
    }
    public function tambah_magang()
    {
        $data = [
            'kode'      => $this->input->post('kode'),
            'nama'      => $this->input->post('nama'),
            'alamat'      => $this->input->post('alamat'),
            'jadwal'      => $this->input->post('jadwal'),
            'keterangan'   => $this->input->post('keterangan'),
            'dosbim'      => $this->input->post('dosbim'),
            'url'           => $this->input->post('url')
        ];
        $this->db->insert('magang', $data);
        redirect('admin/magang');
    }
    public function job()
    {
        $data['title'] = "Halaman Job Fair";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['job'] = $this->db->get('job')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('admin/job', $data);
        $this->load->view('template/footer');
    }
}
