<?php
defined('BASEPATH') or exit('No direct script access allowed');

class operator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
        $this->load->helper('my_helper');
        $this->load->library('form_validation');
    }

    public function detail($id)
    {
        // Assuming you have a model method to fetch room details
        $data['ruang'] = $this->m_model->get_data_by_id('ruangan', $id)->result();
        // Load the detail view and pass the data
        $this->load->view('operator/ruang/detail', $data);
    }

    public function index()
    {
        $data['ruangan'] = $this->m_model->get_data('ruangan')->result();
        $this->load->view('operator/ruang/Data_Ruangan', $data);
    }

    public function tambah_ruang()
    {
        $this->load->view('operator/ruang/tambah_ruang');
    }

    public function aksi_tambah_ruangan()
    {
        $this->load->model('m_model'); // Memuat model jika belum dimuat

        $no_lantai = $this->input->post('no_lantai');
        $no_ruang = $this->input->post('no_ruang');
        $deskripsi = $this->input->post('deskripsi');
        $image = $_FILES['foto']['name'];
        $harga = $this->input->post('harga'); // Ambil nilai harga dari formulir

        $errors = [];

        if (empty($no_lantai) || !is_numeric($no_lantai)) {
            $errors[] = 'Nomor Lantai tidak boleh kosong.';
        }

        if (empty($no_ruang) || !is_numeric($no_ruang)) {
            $errors[] = 'Ruang tidak boleh kosong.';
        }

        if (empty($deskripsi)) {
            $errors[] = 'Deskripsi tidak boleh kosong.';
        }

        // Validasi harga
        if (empty($harga) || !is_numeric($harga)) {
            $errors[] = 'Harga harus diisi tidak boleh kosong.';
        } elseif ($harga < 0) {
            $errors[] = 'Harga tidak boleh negatif.';
        }

        if (empty($image)) {
            $errors[] = 'Harap unggah gambar terlebih dahulu.';
        }

        if (count($errors) > 0) {
            $response = [
                'status' => 'error',
                'message' => implode(' ', $errors),
            ];
        } else {
            $image_temp = $_FILES['foto']['tmp_name'];
            $kode = round(microtime(true) * 100);
            $file_name = $kode . '_' . $image;
            $upload_path = './image/ruangan/' . $file_name;

            if (move_uploaded_file($image_temp, $upload_path)) {
                $data = [
                    'image' => $file_name,
                    'no_lantai' => $no_lantai,
                    'no_ruang' => $no_ruang,
                    'deskripsi' => $deskripsi,
                    'harga' => $harga, // Simpan harga ke dalam array data
                ];

                $inserted = $this->m_model->tambah_data('ruangan', $data);

                if ($inserted) {
                    $response = [
                        'status' => 'success',
                        'message' => 'Data berhasil ditambahkan.',
                        'redirect' => base_url('operator'),
                    ];
                } else {
                    $response = [
                        'status' => 'error',
                        'message' => 'Gagal menambahkan data. Silakan coba lagi.',
                    ];
                    unlink($upload_path);
                }
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Gagal mengunggah gambar. Silakan coba lagi.',
                ];
            }
        }

        echo json_encode($response);
    }

    public function edit_ruangan($id)
    {
        // Ambil data ruangan dari database berdasarkan $id
        $data['ruangan'] = $this->m_model->get_ruangan_by_id($id);
        $this->load->view('operator/ruang/edit_ruangan', $data);
    }

    public function aksi_edit_ruangan($id)
    {
        $id = $id; // ID ruangan yang diberikan melalui parameter

        // Ambil data yang di-post dari form
        $no_lantai = $this->input->post('no_lantai');
        $no_ruang = $this->input->post('no_ruang');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $image = $_FILES['foto']['name'];
        $foto_temp = $_FILES['foto']['tmp_name'];

        // Inisialisasi pesan respons
        $response = [
            'status' => 'error', // Default status error
            'message' => 'Terjadi kesalahan saat mengubah ruangan.', // Default pesan error
            'redirect' => '' // Redirect URL setelah berhasil atau gagal
        ];

        // Cek apakah ID ruangan valid (contoh: Anda dapat menambahkan pengecekan di sini)
        if ($id) {
            // Dapatkan data ruangan dari database berdasarkan ID
            $current_data = $this->m_model->get_ruangan_by_id($id);

            if ($current_data) {
                // Cek apakah ada perubahan data
                $data = [];

                // Set data ke dalam array tanpa memeriksa perubahan
                $data['harga'] = $harga;
                $data['no_lantai'] = $no_lantai;
                $data['no_ruang'] = $no_ruang;
                $data['deskripsi'] = $deskripsi;

                // Periksa apakah setidaknya satu bidang data berbeda dengan data yang ada di database
                if ($no_lantai !== $current_data->no_lantai || $no_ruang !== $current_data->no_ruang || $deskripsi !== $current_data->deskripsi || $harga !== $current_data->harga || !empty($image)) {
                    // Ada perubahan data, lanjutkan proses penyimpanan
                    if (!empty($image)) {
                        // Lakukan pengelolaan gambar seperti yang telah dijelaskan dalam pertanyaan sebelumnya
                        $kode = round(microtime(true) * 100);
                        $file_name = $kode . '_' . $image;
                        $upload_path = './image/ruangan/' . $file_name;

                        if (move_uploaded_file($foto_temp, $upload_path)) {
                            // Hapus image lama jika ada
                            $old_file = $this->m_model->get_image_by_id('ruangan', $id);
                            if ($old_file && file_exists('./image/ruangan/' . $old_file)) {
                                unlink('./image/ruangan/' . $old_file);
                            }

                            $data['image'] = $file_name;
                        } else {
                            // Gagal mengunggah gambar baru
                            $response = [
                                'status' => 'error',
                                'message' => 'Gagal mengunggah gambar. Silakan coba lagi.',
                                'redirect' => base_url('operator/ruang/ruang/edit_ruangan/' . $id), // Redirect ke halaman edit jika gagal
                            ];
                        }
                    }

                    // Eksekusi dengan model edit_ruangan tanpa memeriksa perubahan
                    $update_result = $this->m_model->edit_ruangan($id, $data);

                    if ($update_result) {
                        $response = [
                            'status' => 'success',
                            'message' => 'Berhasil Mengubah Ruangan',
                            'redirect' => base_url('operator'), // Redirect ke halaman daftar ruangan jika berhasil
                        ];
                    }
                } else {
                    // Tidak ada perubahan data
                    $response = [
                        'status' => 'error',
                        'message' => 'Anda harus mengubah setidaknya satu data ruangan.',
                        'redirect' => base_url('operator/ruang/ruang/edit_ruangan/' . $id), // Redirect ke halaman edit jika tidak ada perubahan
                    ];
                }
            }
        }

        // Kirim respons JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function hapus_image($id)
    {
        // Ambil data ruangan dari database berdasarkan ID
        $ruangan = $this->m_model->get_ruangan_by_id($id);

        if ($ruangan) {
            // Dapatkan nama file gambar
            $image_file = $ruangan->image;

            if ($image_file) {
                // Hapus file gambar dari direktori
                $image_path = './image/ruangan/' . $image_file;

                if (file_exists($image_path) && unlink($image_path)) {
                    // Update data ruangan di database untuk menghapus referensi gambar
                    $data = ['image' => '']; // Atur kolom gambar menjadi kosong
                    $this->m_model->edit_ruangan($id, $data);

                    // Kirim respons JSON untuk memberi tahu hasil penghapusan gambar
                    $response = [
                        'status' => 'success',
                        'message' => 'Gambar telah dihapus.',
                        'redirect' => base_url('operator') // Tambahkan URL tujuan
                    ];
                } else {
                    // Jika gagal menghapus gambar
                    $response = [
                        'status' => 'error',
                        'message' => 'Gambar tidak dapat dihapus. Silakan coba lagi.'
                    ];
                }
            } else {
                // Jika tidak ada gambar
                $response = [
                    'status' => 'error',
                    'message' => 'Gambar sudah dihapus.'
                ];
            }
        } else {
            // Jika data ruangan tidak ditemukan
            $response = [
                'status' => 'error',
                'message' => 'Data ruangan tidak ditemukan.'
            ];
        }

        // Kirim respons JSON ke browser
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}