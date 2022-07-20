<?php
class UkuranModel extends CI_Model{
 function getUkuran(){
 return $this->db->get("ukuran");
 }

 function insertUkuran(){ 
    $ukuran = array( 
        "Id_ukuran" => $this->input->post("id_ukuran"),
        "Ukuran" => $this->input->post("ukuran"),
        "Deskripsi" => $this->input->post("deskripsi"),
        
    ); 
    return $this->db->insert('Ukuran',$ukuran); 
} 

function getUkuranById_ukuran($id_ukuran){ 
    $this->db->where("id_Ukuran",$id_ukuran); 
    return $this->db->get('Ukuran'); 
} 

function updateUkuran($id_ukuran){ 
    $ukuran = array( 
        "Id_ukuran" => $this->input->post("id_ukuran"),
        "Ukuran" => $this->input->post("ukuran"),
        "Deskripsi" => $this->input->post("deskripsi"),
        
    ); 
    $this->db->where("Id_ukuran",$id_ukuran); 
    return $this->db->update("Ukuran",$ukuran); 
}

function deleteUkuran($id_ukuran){ 
    $this->db->where("id_ukuran",$id_ukuran); 
    return $this->db->delete("Ukuran"); 
}
 }
?> 