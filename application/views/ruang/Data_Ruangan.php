<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Master Ruangan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body class="h-hover bg-gray-100">
  <div class="flex flex-col h-screen">

    <!-- Barra de navegación superior -->
    <div style="background-color: #0C356A;" class="bg-white text-white shadow w-full p-2 flex items-center justify-between">
      <div class="flex items-center">
        <div class="flex items-center"> <!-- Mostrado en todos los dispositivos -->
          <img src="https://www.emprenderconactitud.com/img/POC%20WCS%20(1).png" alt="Logo" class="w-28 h-18 mr-2">
          <h2 class="font-bold text-xl"></h2>
        </div>
        <div class="md:hidden flex items-center"> <!-- Se muestra solo en dispositivos pequeños -->
          <button id="menuBtn">
            <i class="fas fa-bars text-gray-500 text-lg"></i> <!-- Ícono de menú -->
          </button>
        </div>
      </div>

      <!-- Ícono de Notificación y Perfil -->
      <div class="space-x-5">
        <a href="ruang/tambah_ruang">
          <i class="fas fa-plus-square text-white-500 text-3xl"></i>
        </a>
      </div>
    </div>

    <!-- Contenido principal -->
    <div class="flex-1 flex flex-wrap">
      <!-- Barra lateral de navegación (oculta en dispositivos pequeños) -->
      <div style="background-color: #0C356A;" class="p-2 w-full md:w-60 flex flex-col md:flex hidden" id="sideNav">
        <nav>
          <a class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
            <i class="fas fa-home mr-2"></i>Beranda
          </a>
          <a class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
            <i class="fa-solid fa-restroom"></i> Data Master Ruangan
          </a>
          <a class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
            <i class="fas fa-users"></i> Data Master Pelanggan
          </a>
          <a class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
            <i class="fa-solid fa-map-location-dot"></i> Peminjaman Tempat
          </a>
          <a class="block text-white py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" href="#">
            <i class="fa-regular fa-folder-open"></i> Report Sewa
          </a>
        </nav>

        <!-- Item untuk menutup sidebar -->
        <a class="block text-white py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white" id="closeBtn">
          <i class="fas fa-times mr-2"></i>Tutup
        </a>

        <!-- Penanda lokasi -->
        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>

        <!-- logout -->
        <a class="block text-white py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white mt-auto" href="#">
          <i class="fas fa-sign-out-alt mr-2"></i>Keluar
        </a>

        <!-- Hak cipta di bagian bawah navigasi lateral -->
      </div>
      <!-- Área de contenido principal -->
      <div class="flex-1 p-4 w-full md:w-1/2">
        <!-- Campo de búsqueda -->
        <div class="relative max-w-md w-full">
          <div class="flex items-center justify-between w-full mb-4">
            <input type="text" id="searchInput" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-300" placeholder="Search..." onkeyup="performSearch()" />
          </div>
        </div>


        <!-- Konten halaman Anda di sini -->
        <div class="absolute top-1 left-2 inline-flex items-center p-2">
        </div>
        <div class="flex flex-wrap justify-center">
          <!-- Card 1 -->
          <div class="container">
            <div class="row justify-content-center">
              <?php if ($ruangan) : ?>
                <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 gap-7 pl-10 pr-10 pt-5" id="roomList">
                  <!-- Room cards will be displayed here -->
                  <?php foreach ($ruangan as $row) : ?>
                    <div class="col-lg-4 col-md-6">
                      <div class="bg-white pt-10 pb-10 pl-5 pr-5 mb-1 rounded-lg shadow-xl text-center my-5">
                        <img src="<?php echo base_url('./image/ruangan/tambah_ruangan/' . $row->image); ?>" alt="Room Image" class="block mx-auto mb-5 w-76 h-64 shadow-md rounded">
                        <h2 class="text-2xl text-gray-800 font-semibold">R <?php echo $row->no_ruang; ?></h2>
                        <a href="<?php echo base_url('ruang/detail/' . $row->id); ?>" class="inline-block px-3 py-1 font-semibold text-white bg-blue-500 rounded hover:bg-blue-600 transition duration-200">Detail</a>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php else : ?>
                <div class="col-lg-4 col-md-6">
                  <p class="text-center text-gray-600">No data available.</p>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script>
    function performSearch() {
      const searchInput = document.getElementById('searchInput');
      const roomList = document.getElementById('roomList');
      const searchTerm = searchInput.value.toLowerCase();

      // Mengambil semua elemen card ruangan
      const roomCards = roomList.querySelectorAll('.col-lg-4');

      roomCards.forEach(card => {
        const roomNumber = card.querySelector('h2').textContent.toLowerCase();

        if (roomNumber.includes(searchTerm)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }
  </script>
  <!-- Script para las gráficas -->
  <script>
    // Gráfica de Usuarios
    var usersChart = new Chart(document.getElementById('usersChart'), {
      type: 'doughnut',
      data: {
        labels: ['Nuevos', 'Registrados'],
        datasets: [{
          data: [30, 65],
          backgroundColor: ['#00F0FF', '#8B8B8D'],
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          position: 'bottom' // Ubicar la leyenda debajo del círculo
        }
      }
    });

    // Gráfica de Comercios
    var commercesChart = new Chart(document.getElementById('commercesChart'), {
      type: 'doughnut',
      data: {
        labels: ['Nuevos', 'Registrados'],
        datasets: [{
          data: [60, 40],
          backgroundColor: ['#FEC500', '#8B8B8D'],
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          position: 'bottom' // Ubicar la leyenda debajo del círculo
        }
      }
    });
  </script>

  <script>
    const menuBtn = document.getElementById('menuBtn');
    const closeBtn = document.getElementById('closeBtn');
    const sideNav = document.getElementById('sideNav');

    menuBtn.addEventListener('click', () => {
      sideNav.classList.remove('hidden');
    });

    closeBtn.addEventListener('click', () => {
      sideNav.classList.add('hidden');
    });
  </script>
</body>

</html>