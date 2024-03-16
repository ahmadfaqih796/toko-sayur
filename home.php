<?php
require 'config.php';
include $view;
$lihat = new view($config);
// $barang = $lihat->barang_limit(3);
$barang = $lihat->barang();
$toko = $lihat->toko();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <title>Toko <?= $toko['nama_toko']; ?></title>
   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/img/icon.png" />
   <!-- Font Awesome icons (free version)-->
   <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
   <!-- Google fonts-->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
   <!-- Core theme CSS (includes Bootstrap)-->
   <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
         <a class="navbar-brand" href="#page-top"><?= $toko['nama_toko']; ?></a>
         <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
               <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#list">List</a></li>
               <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
               <!-- <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li> -->
            </ul>
         </div>
      </div>
   </nav>
   <!-- Masthead-->
   <header class="masthead bg-primary text-white text-center" style="height: 100vh; background-image: url('assets//img/sayur.jpg'); background-size: cover; ">
      <div class="overlay">
         <!-- Masthead Avatar Image-->
         <!-- <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." /> -->
         <i class="fa fa-leaf" aria-hidden="true" style="font-size: 200px; margin-bottom: 20px;"></i>
         <!-- Masthead Heading-->
         <h1 class="masthead-heading text-uppercase mb-0">
            <?= $toko['nama_toko']; ?>
         </h1>
         <!-- Icon Divider-->
         <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
         </div>
         <!-- Masthead Subheading-->
         <p class="masthead-subheading font-weight-light mb-0">Segar & Berkualitas</p>
      </div>
   </header>
   <!-- Portfolio Section-->
   <section class="page-section portfolio" id="list">
      <div class="container">
         <!-- Portfolio Section Heading-->
         <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Barang List</h2>
         <!-- Icon Divider-->
         <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
         </div>
         <!-- Barang Grid Items-->
         <div class="row justify-content-center">
            <!-- Barang Item -->
            <?php
            foreach ($barang as $isi) {
            ?>
               <div class="col-md-6 col-lg-4 mb-5">
                  <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target='#portfolioModal<?= $isi['id'] ?>'>
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><?= $isi['nama_barang']; ?></div>
                     </div>
                     <div class="text-center">
                        <img class="img-fluid" src="assets/img/barang/<?php echo $isi['gambar']; ?>" alt="<?= $isi['gambar']; ?>" style="width: 100%; height: 200px; object-fit: contain;" />
                     </div>
                  </div>
               </div>
            <?php
            }
            ?>
         </div>
      </div>
   </section>
   <!-- About Section-->
   <section class="page-section bg-primary text-white mb-0" id="about">
      <div class="container">
         <!-- About Section Heading-->
         <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
         <!-- Icon Divider-->
         <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
         </div>
         <!-- About Section Content-->
         <div class="row" style="text-align: justify;">
            <div class="col-lg-4 ms-auto">
               <p class="lead">Toko <?= $toko['nama_toko']; ?> adalah tempat yang penuh keberagaman dan kualitas dalam pelayanan produk-produk segar dan sehat. Terletak di pusat kota yang mudah dijangkau oleh warga sekitar, toko ini telah menjadi tujuan utama bagi para pencinta sayuran yang peduli akan kualitas dan keberlanjutan.</p>
            </div>
            <div class="col-lg-4 me-auto">
               <p class="lead">Toko <?= $toko['nama_toko']; ?> menawarkan beragam jenis sayuran segar, mulai dari sayuran hijau yang renyah seperti bayam, kangkung, dan selada hingga sayuran akar seperti wortel, kentang, dan ubi. Produk-produknya selalu segar dan bermutu tinggi, karena <?= $toko['nama_toko']; ?> bekerja sama dengan petani lokal terpercaya untuk memastikan kualitas terbaik.</p>
            </div>
            <div class="col-lg-4 me-auto">
               <p class="lead">Selain sayuran, toko ini juga menyediakan berbagai buah-buahan dan sayur-sayuran yang segar untuk memenuhi kebutuhan kesehatan pelanggan. <?= $toko['nama_toko']; ?> sangat memperhatikan aspek keberlanjutan, sehingga Anda dapat yakin bahwa produk yang Anda beli di toko ini ramah lingkungan.</p>
            </div>

         </div>
         <!-- About Section Button-->
         <!-- <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
               <i class="fas fa-download me-2"></i>
               Free Download!
            </a>
         </div> -->
      </div>
   </section>

   <!-- Footer-->
   <footer class="footer text-center">
      <div class="container">
         <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-6 mb-5 mb-lg-0">
               <h4 class="text-uppercase mb-4">Location</h4>
               <p class="lead mb-0">
                  <?= $toko['alamat_toko']; ?>
               </p>
            </div>
            <!-- Footer Social Icons-->
            <!-- <div class="col-lg-6 mb-5 mb-lg-0">
               <h4 class="text-uppercase mb-4">Around the Web</h4>
               <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
               <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
               <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
               <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
            </div> -->
            <!-- Footer About Text-->
            <div class="col-lg-6">
               <h4 class="text-uppercase mb-4">Call Center</h4>
               <p class="lead mb-0">
                  <i class="fab fa fa-phone me-3"></i>
                  <a href="https://api.whatsapp.com/send?phone=<?= $toko['tlp']; ?>">
                     <?= $toko['tlp']; ?>
                  </a>
                  <!-- <a href="http://startbootstrap.com">Start Bootstrap</a> -->
               </p>
            </div>
         </div>
      </div>
   </footer>
   <!-- Copyright Section-->
   <div class="copyright py-4 text-center text-white">
      <div class="container"><small>Copyright &copy; Toko Harly 2023</small></div>
   </div>
   <!-- Portfolio Modals-->
   <!-- Portfolio Modal 1-->
   <?php
   foreach ($barang as $isi) {
   ?>
      <div class="portfolio-modal modal fade" id='portfolioModal<?= $isi['id'] ?>' tabindex="-1" aria-labelledby='portfolioModal<?= $isi['id'] ?>' aria-hidden="true">
         <div class="modal-dialog modal-xl">
            <div class="modal-content">
               <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
               <div class="modal-body text-center pb-5">
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="col-lg-8">
                           <!-- Portfolio Modal - Title-->
                           <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?= $isi['nama_barang'] ?></h2>
                           <!-- Icon Divider-->
                           <div class="divider-custom">
                              <div class="divider-custom-line"></div>
                              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                              <div class="divider-custom-line"></div>
                           </div>
                           <!-- Portfolio Modal - Image-->
                           <img class="img-fluid rounded mb-5" src="assets/img/barang/<?= $isi['gambar'] ?>" alt="..." style="width: 100%; height: 300px; object-fit: contain;" />
                           <!-- Portfolio Modal - Text-->
                           <div class="card card-body">
                              <div class="table-responsive">
                                 <table class="table table-bordered table-striped table-sm" id="example2">

                                    <tbody>
                                       <tr>
                                          <th>Nama Barang</th>
                                          <td><?php echo $isi['nama_barang']; ?></td>
                                       </tr>
                                       <tr>
                                          <th>Kategori</th>
                                          <td><?php echo $isi['nama_kategori']; ?></td>
                                       </tr>
                                       <tr>
                                          <th>Satuan</th>
                                          <td><?php echo $isi['nama_satuan']; ?></td>
                                       </tr>
                                       <tr>
                                          <th>Harga</th>
                                          <td>Rp.<?php echo number_format($isi['harga_jual']); ?>,-</td>
                                       </tr>
                                       <tr>
                                          <th>Stok</th>
                                          <td><?php echo $isi['stok']; ?></td>
                                       </tr>
                                    </tbody>

                                 </table>
                              </div>
                           </div>
                           <button class="btn btn-primary mt-3" data-bs-dismiss="modal">
                              <i class="fas fa-xmark fa-fw"></i>
                              Close Window
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <?php
   }
   ?>
   <!-- Bootstrap core JS-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Core theme JS-->
   <script src="assets/js/scripts.js"></script>
   <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
   <!-- * *                               SB Forms JS                               * *-->
   <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
   <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
   <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>