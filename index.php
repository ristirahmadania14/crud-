<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- AdminLTE Style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
  <!-- Custom CSS -->
  <style>
    :root {
      --primary-color: #d2b48c;
      --secondary-color: #deb887;
      --accent-color: #cd853f;
      --background-color: #f5f5dc;
      --text-color: #000000;
      --soft-cream: #f5f5dc;
      --medium-cream: #deb887;
      --dark-cream: #cd853f;
      --light-cream: #fff8dc;
    }

    body {
      background-color: var(--background-color);
      color: var(--text-color);
      font-family: 'Source Sans Pro', sans-serif;
    }

    .main-header {
      background-color: var(--primary-color);
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .main-sidebar {
      background-color: var(--secondary-color);
    }

    .brand-link {
      border-bottom: 1px solid var(--dark-cream);
      background-color: var(--secondary-color);
    }

    .brand-link img {
      width: 40px;
      height: 40px;
      object-fit: cover;
      border-radius: 50%;
    }

    .nav-sidebar .nav-item .nav-link {
      color: #000000;
    }

    .nav-sidebar .nav-item .nav-link:hover {
      background-color: var(--dark-cream);
      color: white;
    }

    .card {
      border: none;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      border-radius: 8px;
      background-color: var(--soft-cream);
      margin-bottom: 20px;
    }

    .card-header {
      background-color: var(--primary-color);
      color: #000000;
      border-bottom: 1px solid var(--dark-cream);
      border-radius: 8px 8px 0 0 !important;
    }

    .btn-primary {
      background-color: var(--accent-color);
      border-color: var(--accent-color);
    }

    .btn-primary:hover {
      background-color: var(--dark-cream);
      border-color: var(--dark-cream);
    }

    .form-control {
      background-color: white;
      border-radius: 4px;
      border: 1px solid var(--medium-cream);
    }

    .form-control:focus {
      background-color: white;
      border-color: var(--accent-color);
      box-shadow: 0 0 0 0.2rem rgba(205, 133, 63, 0.25);
    }

    .table {
      background-color: var(--soft-cream);
      border-radius: 8px;
      overflow: hidden;
    }

    .table thead th {
      background-color: var(--primary-color);
      color: #000000;
      border: none;
    }

    .table tbody tr:hover {
      background-color: var(--light-cream);
    }

    .chart-container {
      position: relative;
      height: 300px;
      margin-bottom: 20px;
      background-color: var(--soft-cream);
      padding: 15px;
      border-radius: 8px;
    }

    .flower-icon {
      color: var(--accent-color);
      margin-right: 8px;
    }

    .product-image {
      width: 50px;
      height: 50px;
      object-fit: cover;
      border-radius: 4px;
    }

    .welcome-banner {
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      color: #000000;
      padding: 20px;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .welcome-banner h2 {
      margin: 0;
      font-weight: 300;
    }

    .welcome-banner p {
      margin: 5px 0 0;
      opacity: 0.9;
    }

    .nav-header {
      color: #000000;
      font-weight: 500;
    }

    .content-wrapper {
      background-color: var(--background-color);
    }
  </style>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#home" class="nav-link">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" id="logoutBtn">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#home" class="brand-link">
      <img src="https://img.icons8.com/color/48/000000/flower-doodle.png" alt="Flower Shop Logo">
      <span class="brand-text font-weight-light">Risti RahmaDania</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="#dataBarangTab" class="nav-link" data-toggle="pill">
              <i class="nav-icon fas fa-seedling flower-icon"></i>
              <p>Data barang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#dataMahasiswaTab" class="nav-link" data-toggle="pill">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>Data mahasiswa</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        
        <!-- Welcome Banner -->
        <div class="welcome-banner">
          <h2><i class="fas fa-seedling"></i> Selamat Datang di adminLTE</h2>
          <p>Risti RahmaDania</p>
        </div>

        <!-- Tab Content -->
        <div class="tab-content">
          <!-- Data Bunga Tab -->
          <div id="dataBarangTab" class="tab-pane fade show active">
            <div class="row">
              <!-- Form Data Bunga -->
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-plus-circle flower-icon"></i> Tambah Data Barang</h3>
                  </div>
                  <div class="card-body">
                    <form id="formDataBarang">
                      <div class="form-group">
                        <label for="kodeBarang"><i class="fas fa-barcode flower-icon"></i> Kode barang</label>
                        <input type="text" class="form-control" id="kodeBarang" placeholder="Masukkan Kode Barang">
                      </div>
                      <div class="form-group">
                        <label for="namaBarang"><i class="fas fa-seedling flower-icon"></i> Nama barang</label>
                        <input type="text" class="form-control" id="namaBarang" placeholder="Masukkan Nama Barang">
                      </div>
                      <div class="form-group">
                        <label for="hargaBarang"><i class="fas fa-tag flower-icon"></i> Harga Bunga</label>
                        <input type="number" class="form-control" id="hargaBarang" placeholder="Masukkan Harga Barang">
                      </div>
                      <button type="submit" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Barang
                      </button>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Tabel Data Bunga -->
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-list flower-icon"></i> Daftar barang</h3>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered" id="dataBarangTable">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode barang</th>
                          <th>Nama barang</th>
                        </tr>
                      </thead>
                      <tbody id="datamahasiswaList">
                        <!-- Data bunga akan ditampilkan disini -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- Grafik Penjualan -->
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-chart-line flower-icon"></i> Grafik Penjualan Barang</h3>
                  </div>
                  <div class="card-body">
                    <!-- Input Form for Sales Data -->
                    <div class="row mb-4">
                      <div class="col-md-12">
                        <form id="salesInputForm">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="week1">Minggu 1</label>
                                <input type="number" class="form-control" id="week1" placeholder="Jumlah penjualan">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="week2">Minggu 2</label>
                                <input type="number" class="form-control" id="week2" placeholder="Jumlah penjualan">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="week3">Minggu 3</label>
                                <input type="number" class="form-control" id="week3" placeholder="Jumlah penjualan">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="week4">Minggu 4</label>
                                <input type="number" class="form-control" id="week4" placeholder="Jumlah penjualan">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="target">Target Penjualan</label>
                                <input type="number" class="form-control" id="target" placeholder="Target penjualan">
                              </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update Grafik
                          </button>
                        </form>
                      </div>
                    </div>
                    <!-- Chart Container -->
                    <div class="chart-container">
                      <canvas id="penjualanChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Data Mahasiswa Tab -->
          <div id="dataMahasiswaTab" class="tab-pane fade">
            <div class="row">
              <!-- Form Data Mahasiswa -->
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Tambah Data mahasiswa</h3>
                  </div>
                  <div class="card-body">
                    <form id="formDataMahasiswa">
                      <div class="form-group">
                        <label for="nim">Nama mahasiswa</label>
                        <input type="text" class="form-control" id="nim" placeholder="Masukkan Nama anda">
                      </div>
                      <div class="form-group">
                        <label for="namaMahasiswa">Alamat</label>
                        <input type="text" class="form-control" id="namaMahasiswa" placeholder="Masukkan alamat anda">
                      </div>
                      <div class="form-group">
                        <label for="prodi">No hp</label>
                        <input type="text" class="form-control" id="prodi" placeholder="Masukkan no hp">
                      </div>
                      <button type="submit" class="btn btn-primary">Tambah data mahasiswa</button>
                    </form>
                  </div>
                </div>
              </div>

              <!-- Tabel Data Mahasiswa -->
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">daftar mahasiswa</h3>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered" id="datapembeli">
                      <thead>
                        <tr>
                          <th>no</th>
                          <th>nama mahasiswa</th>
                          <th>no hp</th>
                          <th>tambah data mahasiswa</th>
                        </tr>
                      </thead>
                      <tbody id="datamahasiswa">
                        <!-- Data mahasiswa akan ditampilkan disini -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  </div>

</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js"></script>

<script>
  // Data Barang
  let dataBarang = [];
  document.getElementById("formDataBarang").addEventListener("submit", function(event) {
    event.preventDefault();

    const kodeBarang = document.getElementById("kodeBarang").value;
    const namaBarang = document.getElementById("namaBarang").value;
    const hargaBarang = document.getElementById("hargaBarang").value;

    if (!kodeBarang || !namaBarang || !hargaBarang) {
      alert("Harap isi semua data barang!");
      return;
    }

    const barang = { kodeBarang, namaBarang, hargaBarang };
    dataBarang.push(barang);
    updateBarangTable();
    updatePenjualanChart();

    document.getElementById("formDataBarang").reset();
  });

  function updateBarangTable() {
    const dataBarangList = document.getElementById("dataBarangList");
    dataBarangList.innerHTML = "";

    dataBarang.forEach((barang, index) => {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${index + 1}</td>
        <td>${barang.kodeBarang}</td>
        <td>${barang.namaBarang}</td>
        <td>Rp ${parseInt(barang.hargaBarang).toLocaleString('id-ID')}</td>
      `;
      dataBarangList.appendChild(row);
    });
  }

  // Update the chart function to use input values
  function updatePenjualanChart() {
    const ctx = document.getElementById('penjualanChart').getContext('2d');
    if (window.penjualanChart) {
      window.penjualanChart.destroy();
    }

    // Get values from input fields
    const week1 = document.getElementById('week1').value || 0;
    const week2 = document.getElementById('week2').value || 0;
    const week3 = document.getElementById('week3').value || 0;
    const week4 = document.getElementById('week4').value || 0;
    const target = document.getElementById('target').value || 0;

    const weeks = ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'];
    const salesData = [parseInt(week1), parseInt(week2), parseInt(week3), parseInt(week4)];
    const targetData = [parseInt(target), parseInt(target), parseInt(target), parseInt(target)];

    window.penjualanChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: weeks,
        datasets: [
          {
            label: 'Penjualan Aktual',
            data: salesData,
            backgroundColor: 'rgba(205, 133, 63, 0.1)',
            borderColor: 'rgba(205, 133, 63, 1)',
            borderWidth: 2,
            tension: 0.4,
            fill: true,
            pointBackgroundColor: 'rgba(205, 133, 63, 1)',
            pointBorderColor: '#fff',
            pointRadius: 4,
            pointHoverRadius: 6
          },
          {
            label: 'Target Penjualan',
            data: targetData,
            borderColor: 'rgba(210, 180, 140, 0.5)',
            borderWidth: 1,
            borderDash: [5, 5],
            pointRadius: 0,
            fill: false
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            position: 'top',
            labels: {
              usePointStyle: true,
              padding: 20
            }
          },
          tooltip: {
            mode: 'index',
            intersect: false,
            callbacks: {
              label: function(context) {
                let label = context.dataset.label || '';
                if (label) {
                  label += ': ';
                }
                label += context.raw + ' unit';
                return label;
              }
            }
          },
          title: {
            display: true,
            text: 'Analisis Penjualan Mingguan',
            font: {
              size: 16,
              weight: 'bold'
            },
            padding: {
              top: 10,
              bottom: 20
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            grid: {
              color: 'rgba(0, 0, 0, 0.05)'
            },
            ticks: {
              callback: function(value) {
                return value + ' unit';
              }
            },
            title: {
              display: true,
              text: 'Jumlah Penjualan'
            }
          },
          x: {
            grid: {
              display: false
            },
            title: {
              display: true,
              text: 'Minggu'
            }
          }
        },
        interaction: {
          mode: 'nearest',
          axis: 'x',
          intersect: false
        }
      }
    });
  }

  // Add event listener for the sales input form
  document.getElementById('salesInputForm').addEventListener('submit', function(e) {
    e.preventDefault();
    updatePenjualanChart();
  });

  // Initialize chart with default values
  updatePenjualanChart();

  // Logout Functionality
  document.getElementById("logoutBtn").addEventListener("click", function(event) {
    event.preventDefault();
    alert("Anda berhasil logout!");
    window.location.href = "login.html";
  });
</script>

</body>
</html>
