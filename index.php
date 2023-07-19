<?php include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id`= 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $data['name'] ?> - <?= $data['title'] ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/portfolio/1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
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
        <h1 class="text-light"><a href="index.php"><?php echo $data['name'] ?></a></h1>
        <div class="social-links mt-3 text-center">
          <?php

          if ($data['twitter']) {
          ?>
            <a href="<?= $data['twitter'] ?>" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>";
          <?php
          }
          ?>

          <?php

          if ($data['instragram']) {
          ?>
            <a href="<?= $data['instragram'] ?>" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>";
          <?php
          }
          ?>

          <?php

          if ($data['linkedin']) {
          ?>
            <a href="<?= $data['linkedin'] ?>" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>";
          <?php
          }
          ?>

          <?php

          if ($data['github']) {
          ?>
            <a href="<?= $data['github'] ?>" target="_blank" class="github"><i class="bx bxl-github"></i></a>";
          <?php
          }
          ?>

        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Skills</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" style=" background: url(./assets/img/n.png) top center; background-size: cover;width: 100%;
    height: 100vh;" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1><?php echo $data['name'] ?></h1>
      <p>I'm a passionate <span class="typed" data-typed-items="<?php echo $data['title'] ?>"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4 img1" data-aos="fade-right">
            <img src="assets/img/nehalsb.jpeg" style="max-width:80%;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?= $data['title'] ?></h3>
            <p class="fst-italic">
              <?= $data['slogan'] ?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo date('d M Y', strtotime($data['birthday'])) ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?= $data['website'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $data['phone'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= $data['city'] ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= $data['age'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?= $data['degree'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email Id:</strong> <span><?= $data['email'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Certificate:</strong> <span><?= $data['certification'] ?></span></li>
                </ul>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Skills Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row">

          <?php

          $skills = "SELECT * FROM `skills`";
          $skills_result = mysqli_query($con, $skills);

          if ($skills_result->num_rows > 0) {
            while ($skills_row = $skills_result->fetch_assoc()) {
          ?>
              <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <div class="icon"><i class="<?= $skills_row['icon'] ?>"></i></div>
                <h4 class="title" style="padding-top: 13px;"><?= $skills_row['title'] ?></a></h4>
              </div>
          <?php

            }
          }

          ?>


        </div>
    </section>
    <!-- End Services Section -->

    <?php
    $resume = "SELECT * FROM `resume` ";
    $resume_result = mysqli_query($con, $resume);
    $resume_data = mysqli_fetch_assoc($resume_result);

    ?>

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>

        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Summary</h3>
            <div class="resume-item pb-0">
              <h4><?= $data['name'] ?></h4>
              <p><em><?= $data['slogan'] ?></em></p>
              <ul>
                <li><?= $data['city'] ?></li>
                <li><?= $data['phone'] ?></li>
                <li><?= $data['email'] ?>/li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4><?= $resume_data['clgcourse'] ?></h4>
              <h5><?= $resume_data['clgyear'] ?></h5>
              <p><em><?= $resume_data['clgname'] ?></em></p>

            </div>
            <div class="resume-item">
              <h4><?= $resume_data['schstandard'] ?></h4>
              <h5><?= $resume_data['schyear'] ?></h5>
              <p><em><?= $resume_data['schname'] ?></em></p>

            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Certificate</h3>
            <div class="resume-item">

             <?php

              $certi = "SELECT * FROM `certificate`";
              $certi_result = mysqli_query($con, $certi);

              if ($certi_result->num_rows > 0) {
              while ($certi_row = $certi_result->fetch_assoc()) {
              ?>
              <h4><?= $certi_row['name']?></h4>
              <h5><?= $certi_row['year']?></h5>
              <p><em><?= $certi_row['company']?> </em></p>
          <?php

            }
          }

          ?>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php

              $cat_list = "SELECT * FROM `category`";
              $cat_result = mysqli_query($con, $cat_list);
              if ($cat_result->num_rows > 0) {
                while ($cat_data = $cat_result->fetch_assoc()) {
              ?>
                  <li data-filter=".<?php echo $cat_data['name'] ?>"><?php echo $cat_data['name'] ?></li>
              <?php
                }
              }

              ?>

            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <?php
          $portfolio = "SELECT * FROM `portfolio`";
          $portfolio_result = mysqli_query($con, $portfolio);

          if ($portfolio_result->num_rows > 0) {
            while ($portfolio_data = $portfolio_result->fetch_assoc()) {
              $category = $portfolio_data['category'];
              $category_sql = "SELECT * FROM `category` WHERE `category`.`id`='$category'";
              $category_result = mysqli_query($con, $category_sql);
              $category_data = mysqli_fetch_assoc($category_result);

          ?>
              <div class="col-lg-4 col-md-6 portfolio-item <?= $category_data['name'] ?>">
                <div class="portfolio-wrap">
                  <img src="<?= $portfolio_data['img']?>" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="<?= $portfolio_data['img']?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title=<?= $portfolio_data['title'] ?>><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.php? id =<?php echo $portfolio_data['id'] ?>" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>



        </div>

      </div>
    </section><!-- End Portfolio Section -->




    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Me</h2>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?= $data['address'] ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?= $data['email'] ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call Me:</h4>
                <p><?= $data['phone'] ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-linkedin"></i>
                <h4>Linked In:</h4>
                <p><a href="<?= $data['linkedin'] ?>" target="_blank">@nehal28</a></p>
              </div>

              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>  -->
            </div>

          </div>


          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <?php
            if (isset($_POST['send_msg'])) {
              $name = mysqli_real_escape_string($con, $_POST['name']);
              $email = mysqli_real_escape_string($con, $_POST['email']);
              $subject = mysqli_real_escape_string($con, $_POST['subject']);
              $message = mysqli_real_escape_string($con, $_POST['message']);

              $contact = "INSERT INTO `contact` ( `name`, `email`, `subject`, `message`) VALUES ( '$name', '$email', '$subject', '$message') ";
              mysqli_query($con, $contact);
            }
            ?>

            <form action="index.php" method="POST"  class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center">
                <button type="submit" name="send_msg">Send Message</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Portfolio</span></strong>
      </div>
      <div class="credits">
        Designed by <?= $data['name'] ?></a>
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