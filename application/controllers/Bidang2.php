<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Bidang2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');

        //Do your magic here
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['keg'] = $this->M_data->getKegiatan();
        $data['allap'] = $this->M_data->getalllap();
        $data['lapbid'] = $this->M_data->getalapbid2();

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar',);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/breadcrumb', $data);
        $this->load->view('bidang2/dashboard', $data);
        $this->load->view('template/footer',);
    }

    public function printe()
    {
        $data['title'] = 'Print';
        $data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['keg'] = $this->M_data->getKegiatan();


        $this->load->view('bidang2/print', $data);
    }

    public function formKegiatan()
    {
        $data['title'] = 'Form Kegiatan';
        $data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kec'] = $this->M_data->getKecamatan();
        $kode = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $dariDB = $this->M_data->kodeOtomatismj($kode);
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 4, 3);
        $id_lapskrg = $nourut + 1;
        $res = array('id_lap' => $id_lapskrg);

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar',);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/breadcrumb', $data);
        $this->load->view('bidang2/form_kegiatan', $res, $data);
        $this->load->view('template/footer',);
    }

    public function desa()
    {
        $id = $this->input->post('id');
        $value = $this->M_data->getDesa($id);
        echo json_encode($value);
    }

    public function simpanKeg()
    {
        $keg = array(
            'id_laporan' => $this->input->post('id'),
            'kegiatan' => $this->input->post('namakeg'),
            'tahun' => $this->input->post('thn'),
            'kecamatan' => $this->input->post('kecamatan'),
            'desa' => $this->input->post('desa'),
            'target' => $this->input->post('target'),
            'pelaksana' => $this->input->post('pelaks')

        );
        //var_dump($keg);
        //die;
        $this->db->insert('tb_laporan', $keg);

        $this->session->set_flashdata('success', 'Laporan Berhasil Dibuat');
        redirect('bidang2/formKegiatan');
    }

    public function lihatKegiatan()
    {
        $data['title'] = 'Tabel Kegiatan';
        $data['user']   = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kec'] = $this->M_data->getKecamatan();
        $kode = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lap'] = $this->M_data->getKegbykode($kode);

        $this->load->view('template/header', $data);
        $this->load->view('template/topbar',);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/breadcrumb', $data);
        $this->load->view('bidang2/tabelkegiatan', $data);
        $this->load->view('template/footer');
    }

    public function editKeg()
    {
        $keg = array(

            'kegiatan' => $this->input->post('namakeg'),
            'tahun' => $this->input->post('thn'),

            'target' => $this->input->post('target'),
            'pelaksana' => $this->input->post('pelaks')

        );

        $this->db->where('id_laporan', $this->input->post('id'));
        $this->db->update('tb_laporan', $keg);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Laporan Berhasil Diedit');
            redirect('bidang2/lihatKegiatan');
        } else {
            $this->session->set_flashdata('error', 'Laporan Gagal Diedit');
            redirect('bidang2/lihatKegiatan');
        }
    }
}

/* End of file Admin.php */
