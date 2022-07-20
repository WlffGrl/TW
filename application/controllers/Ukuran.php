<?php
class Ukuran extends CI_Controller{
 public function __construct(){
 	parent::__construct();
 $this->load->model("UkuranModel","",TRUE);
 }
 public function index(){
 $data['ukuran'] = $this->UkuranModel->getUkuran();
 $this->load->view("ukuran",$data);
 }

public function tambah() 
{ 
    $this->load->view("Ukuran_tambah"); 
} 

public function prosesTambah(){ 
    if($this->UkuranModel->insertUkuran()){ 
        redirect(site_url("Ukuran")); 
    }else{
        redirect(site_url("Ukuran/tambah")); 
    }
} 
      
public function update($id_ukuran){ 
    $this->load->model('UkuranModel'); 
    $data['ukuran'] = $this->UkuranModel->getUkuranById_ukuran($id_ukuran)->row(); 
    $this->load->view("Ukuran_update",$data); 
} 

public function prosesUpdate($id_ukuran){ 
    if($this->UkuranModel->updateUkuran($id_ukuran)){ 
        redirect(site_url("Ukuran")); 
    }else{ 
        redirect(site_url("Ukuran/update/$id_ukuran")); 
    } 
}

public function hapus($id_ukuran){ 
    $this->UkuranModel->deleteUkuran($id_ukuran); 
    redirect(site_url("Ukuran")); 
}


}
?>