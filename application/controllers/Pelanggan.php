<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        $this->load->model('m_model');
        $this->load->helper('my_helper');
    }

    public function data_master_pelanggan()
    {
        $data['pelanggan'] = $this->m_model->get_data('pelanggan')->result();
        $this->load->view('pelanggan/data_master_pelanggan', $data);
    }
    public function tambah_pelanggan()
    {
        $data['pelanggan'] = $this->m_model->get_data('pelanggan')->result();
        $this->load->view('pelanggan/tambah_pelanggan');
    }
    public function aksi_tambah_pelanggan()
    {
        $nama = $this->input->post('nama');
        $phone = $this->input->post('phone');
        $payment_method = $this->input->post('payment_method');

        $data = array(
            'nama' => $nama,
            'phone' => $phone,
            'payment_method' => $payment_method
        );

        $this->m_model->tambah_data('pelanggan', $data);
        redirect(base_url('pelanggan/data_master_pelanggan'));
    }

     
   // update data pelanggan
public function update_data($id)
{
$data['pelanggan']=$this->m_model->get_by_id('pelanggan','id', $id)->result();
$this->load->view('pelanggan/update_data', $data);
}

// aksi update data pelanggan
public function aksi_update_data()
{
  $data = array (
    'nama' => $this->input->post('nama'),
    'phone' => $this->input->post('phone'),
    'payment_method' => $this->input->post('payment_method'),
  );
  $eksekusi=$this->m_model->ubah_data
  ('pelanggan', $data, array('id'=>$this->input->post('id')));
  if($eksekusi)
  {
    $this->session->set_flashdata('sukses', 'berhasil');
    redirect(base_url('pelanggan/data_master_pelanggan'));
  } 
  else
  {
    $this->session->set_flashdata('error', 'gagal..');
    redirect(base_url('pelanggan/update_data/'.$this->input->post('id')));
  }
}

    // Hapus Pelanggan
    public function hapus_data_pelanggan($id)
    {
        $this->m_model->delete('pelanggan', 'id', $id);
        redirect(base_url('pelanggan/data_master_pelanggan'));
    }

    public function report_sewa()
    {
        $this->load->view('pelanggan/report_sewa');
    }
    public function dashboard()
    {
        $this->load->view('pelanggan/dashboard');
    }

    public function table_peminjaman_tempat()
  {
      $this->load->view('pelanggan/table_peminjaman_tempat');
  }
  public function tambah_peminjaman_tempat()
  {
      $this->load->view('pelanggan/tambah_peminjaman_tempat');
  }

  public function edit_peminjaman_tempat()
    {
        $this->load->view('pelanggan/edit_peminjaman_tempat');
    }
    public function tabel_report_sewa()
    {
        $this->load->view('pelanggan/tabel_report_sewa');
    }



public function tabel_report_sewa()
{
  $this->load->view('pelanggan/tabel_report_sewa');
}

public function tambah_report_sewa()
{
  $this->load->view('pelanggan/tambah_report_sewa');
}

public function update_report_sewa()
{
  $this->load->view('pelanggan/update_report_sewa');
}

}

?>