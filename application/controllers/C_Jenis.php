<?php
class C_Jenis extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("M_Jenis", "", TRUE);
  }
  public function index()
  {
      $data['jenis'] = $this->M_Jenis->getJenis();
      $this->load->view("v_jenis", $data);
      $this->load->view("v_jenis", $data);
  }
  public function tambah()
  {
        $this->load->model('M_Jenis');
        $data['jenis'] = $this->M_Jenis->getJenis();
        $this->load->view("v_jenis_tambah", $data);
  }
  public function prosesTambah()
  {
        if ($this->M_Jenis->insertJenis()) {
            redirect(site_url("C_Jenis"));
        } else {
            redirect(site_url("C_Jenis/tambah"));
        }
  }
  public function update($jenis)
    {
        $this->load->model('M_Jenis');
        $data['jenis'] = $this->M_Jenis->getJenisById($jenis)->row();
        $this->load->view("v_jenis_update", $data);
    }
    public function prosesUpdate($jenis)
    {
        if ($this->M_Jenis->updateJenis($jenis)) {
            redirect(site_url("C_Jenis"));
        } else {
            redirect(site_url("C_Jenis/update/$jenis"));
        }
    }
    public function hapus($jenis)
    {
        $this->M_Jenis->deleteJenis($jenis);
        redirect(site_url("v_jenis"));
    }




}