<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{

    public function getKecamatan()
    {
        return $this->db->get('tb_kecamatan')->result_array();
    }

    public function getalllap()
    {
        $this->db->select('id_laporan');
        $this->db->from('tb_laporan');
        return $this->db->count_all_results();
    }

    public function getalapbid()
    {

        $this->db->like('id_laporan', "BD3");
        $this->db->from('tb_laporan');
        return $this->db->count_all_results();
        // $query = $this->db->query("select count(id_laporan) from tb_laporan where id_laporan like '%BD3%'")->result;

        // return $query;
    }

    public function getalapbid2()
    {

        $this->db->like('id_laporan', "BD2");
        $this->db->from('tb_laporan');
        return $this->db->count_all_results();
        // $query = $this->db->query("select count(id_laporan) from tb_laporan where id_laporan like '%BD3%'")->result;

        // return $query;
    }

    public function getalapbid1()
    {

        $this->db->like('id_laporan', "BD1");
        $this->db->from('tb_laporan');
        return $this->db->count_all_results();
        // $query = $this->db->query("select count(id_laporan) from tb_laporan where id_laporan like '%BD3%'")->result;

        // return $query;
    }

    public function getDesa($id)
    {
        $this->db->where('id_kecamatan', $id);
        return $this->db->get('tb_desa')->result_array();
    }

    public function kodeOtomatismj($kode)
    {
        $lol = $kode['kode'];
        $query = $this->db->query("SELECT MAX(id_laporan) as id_lap from tb_laporan where id_laporan like '%$lol%' ");
        $hasil = $query->row();
        //var_dump($hasil->id_lap);
        //die;
        return $hasil->id_lap;
    }

    public function getKegiatan()
    {
        return $this->db->query("SELECT l.id_laporan, u.nama, l.kegiatan, l.tahun, k.nama_kecamatan, d.nama_desa, l.target, l.pelaksana FROM tb_laporan l JOIN tb_desa d ON l.`desa` = d.`id_desa` JOIN tb_kecamatan k ON l.`kecamatan` = k.`id_kecamatan` JOIN tb_user u ON l.`id_user` = u.`id_user`")->result_array();
    }

    public function getKegbykode($kode)
    {
        $lol = $kode['id_user'];
        return $this->db->query("SELECT l.id_laporan, u.nama, l.kegiatan, l.tahun, k.nama_kecamatan, d.nama_desa, l.target, l.pelaksana FROM tb_laporan l JOIN tb_desa d ON l.`desa` = d.`id_desa` JOIN tb_kecamatan k ON l.`kecamatan` = k.`id_kecamatan` JOIN tb_user u ON l.`id_user` = u.`id_user` WHERE l.id_user = '$lol' ")->result_array();
        //$query = $this->db->query("SELECT r.id_lapru, l.id_laporan, u.nama_user, r.roboh, r.rusak_ber, r.rusak_sed, r.rusak_ring, r.terendam, r.terancam FROM tb_rumah r JOIN tb_laporan l ON r.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` where l.'id_laporan' like '%$lol%'");
        //$hasil = $query->row();

    }
}

/* End of file M_data.php */
