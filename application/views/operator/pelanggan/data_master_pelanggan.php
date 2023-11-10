<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/heroicons@2.3.0/dist/heroicons.min.js" defer></script>
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@12.11.5/dist/sweetalert2.min.css">
</head>

<body>
  <?php $this->load->view('sidebar'); ?>

  <div class="container w-full md:w-4/4 xl:w-4/7  mx-auto px-6">
    <div class="flex-2 p-3 w-full">
      <!-- Tambah Pelanggan Button -->
      <a href="tambah_pelanggan" class="bg-blue-500 hover:bg-blue-600 text-white rounded-lg py-2 px-full w-48 ml-auto mb-4 flex items-center justify-center">
        <i class="fas fa-plus-square text-xl mr-3"></i> Tambah Pelanggan
      </a>

      <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
        <thead>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th data-priority="5">No</th>
            <th data-priority="1">Name</th>
            <th data-priority="3">Phone</th>
            <th data-priority="4">Payment Method</th>
            <th data-priority="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 0;
          foreach ($pelanggan as $row) : $no++
          ?>
            <tr>
              <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $no ?></td>
              <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->nama ?></td>
              <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->phone ?></td>
              <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700"><?php echo $row->payment_method ?> </td>
              <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700">
                <!-- Update Data -->
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg" onclick="update(<?php echo $row->id ?>)">
                  <i class="fas fa-check"></i>
                </button>

                <!-- Hapus Data -->
                <button onclick="hapus(<?php echo $row->id ?>)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg ml-3">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  <!--Datatables -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script>
    $(document).ready(function() {
      var table = $('#example').DataTable({
        responsive: true
      }).columns.adjust().responsive.recalc();
    });
  </script>

  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <script>
    function update(id) {
      Swal.fire({
        title: 'Ingin Mengubah Data Pelanggan',
        text: " ",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya Ubah'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            icon: 'Waitt',
            title: 'Loading ... ',
            showConfirmButton: false,
            timer: 1500,
          }).then(function() {
            window.location.href = "<?php echo base_url('operator/update_data/') ?>" + id;
          });
        }
      });
    }

    function hapus(id) {
      Swal.fire({
        title: ' Yakin Ingin Menghapus Data Pelanggan',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Hapus Data Pelanggan'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            icon: 'success',
            title: 'Berhasil Menghapus',
            showConfirmButton: false,
            timer: 1500,
          }).then(function() {
            window.location.href = "<?php echo base_url('operator/hapus_data_pelanggan/') ?>" + id;
          });
        }
      });
    }

    function displaySweetAlert() {
      const message = "<?php echo $this->session->flashdata('sukses'); ?>";
      const error = "<?php echo $this->session->flashdata('error'); ?>";

      if (message) {
        Swal.fire({
          title: 'Success!',
          text: message,
          icon: 'success',
          confirmButtonText: 'OK'
        });
      } else if (error) {
        Swal.fire({
          title: 'Error!',
          text: error,
          icon: 'error',
          confirmButtonText: 'OK'
        });
      }
    }

    // Call the function when the page loads
    window.onload = displaySweetAlert;
  </script>
</body>

</html>