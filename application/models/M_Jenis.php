<?php
class M_Jenis extends CI_Model
{
    function getJenis()
    {
        return $this->db->get("jenis");
    }

    function insertJenis()
    {
        $jenis = array(
            "nama_jenis" => $this->input->post("jenis"),
            "deskripsi" => $this->input->post("deskripsi"),
        );
        return $this->db->insert('jenis', $jenis);
    }

    function getJenisById($jenis)
    {
        $this->db->where("id_jenis", $jenis);
        return $this->db->get('jenis');
    }

    function updateJenis($jenis)
    {
        $jenis = array(
            "nama_jenis" => $this->input->post("jenis"),
            "deskripsi" => $this->input->post("deskripsi"),
        );
        $this->db->where("id_jenis", $jenis);
        return $this->db->update("jenis", $jenis);
    }

    function deleteJenis($jenis)
    {
        $this->db->where("id_jenis", $jenis);
        return $this->db->delete("jenis");
    }
}