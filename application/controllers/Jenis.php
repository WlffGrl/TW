<?php
class Jenis extends CI_Controller{
 public function __construct(){
 	parent::__construct();
 $this->load->model("JenisModel","",TRUE);
 }
 public function index(){
 $data['jenis'] = $this->JenisModel->getJenis();
 $this->load->view("jenis",$data);
 }

public function tambah() 
{ 
    $this->load->view("Jenis_tambah"); 
} 

public function prosesTambah(){ 
    if($this->JenisModel->insertJenis()){ 
        redirect(site_url("Jenis")); 
    }else{
        redirect(site_url("Jenis/tambah")); 
    }
} 
      
public function update($id_jenis){ 
    $this->load->model('JenisModel'); 
    $data['jenis'] = $this->JenisModel->getJenisById_Jenis($id_jenis)->row(); 
    $this->load->view("Jenis_update",$data); 
} 

public function prosesUpdate($id_jenis){ 
    if($this->JenisModel->updateJenis($id_jenis)){ 
        redirect(site_url("Jenis")); 
    }else{ 
        redirect(site_url("Jenis/update/$id_jenis")); 
    } 
}

public function hapus($id_jenis){ 
    $this->JenisModel->deleteJenis($id_jenis); 
    redirect(site_url("Jenis")); 
}


}
?>