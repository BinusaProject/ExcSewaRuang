<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Data</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/heroicons@2.3.0/dist/heroicons.min.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@12.11.5/dist/sweetalert2.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@12.11.5/dist/sweetalert2.min.css">
</head>

<body>

  <?php $this->load->view('sidebar'); ?>
  <div class="container mx-auto w-full sm:w-2/3 p-4">
    <header class="bg-white p-6 rounded-md shadow-md mb-6 relative">
      <div class="bg-blue-500 h-4 w-full absolute top-0 left-0 rounded-t-md"></div>
      <h1 id="title" class="text-4xl mb-4">UPDATE DATA</h1>
    </header>
    <?php foreach ($pelanggan as $row) : ?>
      <form action="<?php echo base_url('operator/aksi_update_data') ?>" method="post" id="survey-form" class="bg-white p-8 rounded-md shadow-md mb-6">
        <input name="id" type="hidden" value="<?php echo $row->id ?>">
        <label for="nama" class="block text-xl mb-4">Nama</label>
        <input type="text" name="nama" id="nama" class="border-b-2 border-gray-300 mb-4 focus:outline-none focus:border-blue-500 px-4 py-2 w-full" value="<?php echo $row->nama ?>">

        <label for="phone" class="block text-xl mb-4">Phone</label>
        <input type="text" name="phone" id="phone" class="border-b-2 border-gray-300 mb-4 focus:outline-none focus:border-blue-500 px-4 py-2 w-full" value="<?php echo $row->phone ?>">

        <label for="payment_method" class="block text-xl mb-4">Payment Method</label>
        <input type="text" name="payment_method" id="payment_method" class="border-b-2 border-gray-300 mb-4 focus:outline-none focus:border-blue-500 px-4 py-2 w-full" value="<?php echo $row->payment_method ?>">

        <input type="submit" id="submit" class="bg-white text-lg py-2 px-8 text-blue-500 border-2 border-blue-500 rounded-md transition-all duration-300 hover:bg-blue-500 hover:text-white" value="Update">
      </form>
    <?php endforeach ?>
  </div>
  <script>
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
  </script>
</body>

</html>
