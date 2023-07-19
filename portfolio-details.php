<?php include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id`= 1";
$result = mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/portfolio/nehalc.jpg" rel="">
  <link href="assets/img/portfolio/nehalc.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/portfolio/nehalc.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php"><?= $data['name']?></a></h1>
        <div class="social-links mt-3 text-center">
          <?php

            if($data['twitter']){
          ?>
            <a href="<?= $data['twitter']?>" target="_blank"   class="twitter"><i class="bx bxl-twitter"></i></a>";
          <?php
            }
          ?>

          <?php

            if($data['instragram']){
          ?>
            <a href="<?= $data['instragram']?>" target="_blank"   class="instagram"><i class="bx bxl-instagram"></i></a>";
          <?php
            }
          ?>

          <?php

            if($data['linkedin']){
          ?>
            <a href="<?= $data['linkedin']?>" target="_blank"   class="linkedin"><i class="bx bxl-linkedin"></i></a>";
          <?php
            }
          ?>

          <?php

            if($data['github']){
          ?>
            <a href="<?= $data['github']?>" target="_blank"   class="github"><i class="bx bxl-github"></i></a>";
          <?php
            }
          ?>
          
        </div> 
      </div>

        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Skills</span></a></li>
          <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="index.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Portfoio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<?php 

// if(isset($_GET['id'])){
//   $id = $_GET['id'];
//   $sql = "SELECT * FROM `portfolio` WHERE `portfolio`.`id` = $id";
//   $result = mysqli_query($con,$sql);
//   $data = mysqli_fetch_assoc($result);
// }

?>

<?php 
                $portfolio = "SELECT * FROM `portfolio`";
                $portfolio_result = mysqli_query($con,$portfolio);

                if($portfolio_result -> num_rows > 0)
                while($portfolio_data = $portfolio_result -> fetch_assoc())

              ?>
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

       
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                 <div class="swiper-slide">
                  <img src="./assets/img/portfolio/DASHBOARD.JPG" alt="Location Based Crime Analysis And Mapping">
                  <h4 style="padding-top:30px;"> Location Based Crime Analysis And Mapping</h4>
                </div>

                <div class="swiper-slide">
                  <img src="./assets/img/chat.jpg" alt="">
                  <h4>Chat Web Application</h4>
                </div> 

              </div>
                <div class="swiper-pagination"></div>
            </div>
          </div>



          

              <?php 
                $portfolio = "SELECT * FROM `portfolio`";
                $portfolio_result = mysqli_query($con,$portfolio);

                if($portfolio_result -> num_rows > 0){
                while($portfolio_data = $portfolio_result -> fetch_assoc()){
                  $category = $portfolio_data['category'];
                  $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
                  $category_result = mysqli_query($con,$category_sql);
                  $category_data = mysqli_fetch_assoc($category_result);
              ?>
              
          <div class="col-lg-5">
            <div class="portfolio-info" ">
              <h3>Project information </h3>
              

              <ul>
              <li><strong>Name : </strong><?=$portfolio_data['title']?></li>
                <li><strong>Category : </strong><?=$category_data['name']?></li>
                <li><strong>Project date : </strong><?php echo date('d M Y',strtotime( $portfolio_data['date']))?></li>
                <li><strong>Project URL : </strong>: <a href="<?=$portfolio_data['url']?>" target="_blank"><?=$portfolio_data['url']?></a></li>
              </ul>

          </div>
            <div class="portfolio-description">
              <h2>Description</h2>
              <p style="text-align: justify;">
                <?= $portfolio_data['text']?>
              </p>
            </div>
          </div>
              <?php
            }
          }
        ?>




        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Portfolio</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <?= $data['name']?></a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>