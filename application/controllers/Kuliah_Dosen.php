<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuliah_Dosen extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Halaman Kuliah";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_dosen', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('dosen/kuliah/index', $data);
        $this->load->view('template/footer');
    }
    public function materi()
    {
        $data['title'] = "Halaman Kuliah";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_dosen', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('dosen/kuliah/materi', $data);
        $this->load->view('template/footer');
    }
    public function ujian()
    {
        $data['title'] = "Halaman Kuliah";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_dosen', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('dosen/ujian/index', $data);
        $this->load->view('template/footer');
    }
    public function kumpul_tugas()
    {
        $data['title'] = "Halaman Kuliah";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_dosen', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('dosen/kuliah/kumpul_tugas', $data);
        $this->load->view('template/footer');
    }
    public function forum()
    {
        $data['title'] = "Halaman Kuliah";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['forum']  = $this->db->get_where('forum', ['id_jurusan' => 1])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_dosen', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('dosen/kuliah/forum', $data);
        $this->load->view('template/footer');
    }
    public function buat_forum()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = [
            'id_jurusan' => $this->input->post('id_jurusan'),
            'nama'       => $this->input->post('nama'),
            'pembuat'    => $user['nama'],
            'date_created' => $this->input->post('date_created'),
            'date_end'     => $this->input->post('date_end'),
            'id_sesi'     => 1,
            'keterangan'   => $this->input->post('keterangan')
        ];
        $this->db->insert('forum', $data);
        redirect('kuliah/forum');
    }
    public function ikut_diskusi($id_pesan)
    {
        $data['title'] = "Ikut Diskusi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = $this->db->get_where('forum', ['id_pesan' => $id_pesan])->row_array();
        $data['chat'] = $this->db->get_where('chat', ['id_pesan' => $id_pesan])->result_array();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_dosen', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('dosen/kuliah/ikut_diskusi', $data);
        $this->load->view('template/footer');
    }

    public function kirim_pesan()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = [
            'id_mahasiswa' => $user['id_mahasiswa'],
            'nama'         => $user['nama'],
            'pesan'        => $this->input->post('pesan'),
            'date_created' => time(),
            'baca'         => 0,
            'id_pesan'     => $this->input->post('id_pesan')
        ];
        $this->db->insert('chat', $data);
        redirect('kuliah_dosen/ikut_diskusi/' . $this->input->post('id_pesan'));
    }

    public function sewa_praktikum()
    {
        $data['title'] = "Sewa Alat Praktikum";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['alat'] = $this->db->get('alat_praktikum')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_dosen', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('dosen/kuliah/sewa_praktikum', $data);
        $this->load->view('template/footer');
    }
    public function sewa()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data = [
            'id_mahasiswa' => $user['id_mahasiswa'],
            'nama'         => $this->input->post('nama'),
            'nim'          => $this->input->post('nim'),
            'nama_barang'  => $this->input->post('nama_barang'),
            'tgl_pinjam'   => $this->input->post('tgl_pinjam'),
            'tgl_kembali'   => $this->input->post('tgl_kembali'),
            'status'       => 0
        ];

        $this->db->insert('alat_praktikum', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu telah berhasil meminjam alat praktikum, kamu sekarang bisa mengambil di BIKU atau dengan metode antar hubungi BIKU ( WA. 082334343432 )</div>');
        redirect('kuliah/sewa_praktikum');
    }
    public function konseling()
    {
        $data['title'] = "Konseling dosen";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bimbingan'] = $this->db->get('bimbingan')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_dosen', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('dosen/kuliah/konseling', $data);
        $this->load->view('template/footer');
    }
    public function konseling_chat($id_pesan)
    {
        $data['title'] = "Konseling Mulai";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['id'] = $id_pesan;
        $data['chat'] = $this->db->get_where('chat', ['id_pesan' => $id_pesan])->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_dosen', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('dosen/kuliah/konseling_chat', $data);
        $this->load->view('template/footer');
    }
    public function podcast()
    {
        $data['title'] = "Podcast Dosen";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pod'] = $this->db->get('podcast')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar_dosen', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('dosen/kuliah/podcast', $data);
        $this->load->view('template/footer');
    }
    public function tambah_pod()
    {
        $data = [
            'id_jurusan' => $this->input->post('id_jurusan'),
            'jenis'     => $this->input->post('jenis'),
            'nama_pembuat' => $this->input->post('nama_pembuat'),
            'tema'         => $this->input->post('tema'),
            'date_created' => time()
        ];
        //cek jika ada gambar upload
        $upload_audio = $_FILES['file']['name'];

        if ($upload_audio) {
            $config['allowed_types'] = 'mp3';
            $config['max_size']     = '500000';
            $config['upload_path'] = './assets/podcast/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {

                $new_audio = $this->upload->data('file_name');
                $this->db->set('file', $new_audio);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maksimal Berkas 200Mb </div>');
            }
        }

        $this->db->insert('podcast', $data);
        redirect('kuliah_dosen/podcast');
    }
}
