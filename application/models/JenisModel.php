<?php
class JenisModel extends CI_Model{
 function getJenis(){
 return $this->db->get("jenis");
 }

 function insertJenis(){ 
    $jenis = array( 
        "Id_jenis" => $this->input->post("id_jenis"),
        "Nama_jenis" => $this->input->post("nama_jenis"),
        "Deskripsi" => $this->input->post("deskripsi"),
        
    ); 
    return $this->db->insert('Jenis',$jenis); 
} 

function getJenisById_jenis($id_jenis){ 
    $this->db->where("Id_Jenis",$id_jenis); 
    return $this->db->get('Jenis'); 
} 

function updateJenis($id_jenis){ 
    $jenis = array( 
        "Id_jenis" => $this->input->post("id_jenis"),
        "Nama_jenis" => $this->input->post("nama_jenis"),
        "Deskripsi" => $this->input->post("deskripsi"),
        
    ); 
    $this->db->where("Id_jenis",$id_jenis); 
    return $this->db->update("Jenis",$jenis); 
}

function deleteJenis($id_jenis){ 
    $this->db->where("Id_jenis",$id_jenis); 
    return $this->db->delete("Jenis"); 
}


}


?> 