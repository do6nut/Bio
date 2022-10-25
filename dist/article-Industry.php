<!DOCTYPE html>
<html lang="en" dir="" xmlns:width="http://www.w3.org/1999/xhtml" xmlns:min-width="http://www.w3.org/1999/xhtml" xmlns:max-width="http://www.w3.org/1999/xhtml">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Bio Shine</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./BS.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">

  <!-- CSS Unify Template -->
  <link rel="stylesheet" href="./assets/css/theme.min.css">
</head>

<body>
<!-- ========== HEADER ========== -->
<?php
include("header.php")
?>
<!-- ========== HEADER ========== -->

  <?php
   $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $id = 17;

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }

  $sql = "SELECT * FROM article WHERE article_id = $id ";
  $result = $conn->query($sql);

  $row = $result->fetch_assoc();

  ?>

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="bg-gradient-to-bottom-sm-light">
      <div class="container content-space-t-3">
        <div class="row justify-content-lg-center">
          <div class="col-lg-8">
            <div class="mb-6">
              <h1 class="h2"><?= $row['article_Header'] ?></h1>
              <p class="lead"><?= $row['article_ConEn1'] ?></p>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <div class="row justify-content-lg-center">
          <div class="col-lg-10">
            <img class="img-fluid" src="./assets/img/uploads/<?= $row['article_Image_1'] ?>" alt="Image Description">
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Hero -->

    <!-- Description -->
    <div class="container content-space-1 content-space-lg-2">
      <div class="row mb-5">
        <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
          <figure class="blockquote-lg text-center mb-3">
              <p class="lead"><?= $row['article_ConEn2'] ?></p>
          </figure>
        </div>
        <!-- End Col -->

        <!-- End Row -->
      </div>
      <div class="row mb-5">
        <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
          <img class="img-fluid" src="./assets/img/uploads/<?= $row['article_Image_2'] ?>" alt="Image Description">
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->


      <div class="container content-space-1">
        <div class="row mb-5">
          <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
            <figure class="blockquote-lg text-center mb-3">
                <p class="lead"><?= $row['article_ConEn3'] ?></p>
            </figure>
          </div>
          <!-- End Col -->
        </div>

        <div class="row mb-5">
          <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
            <img class="img-fluid" src="./assets/img/uploads/<?= $row['article_Image_3'] ?>" alt="Image Description">
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    <!-- End Description -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer>
    <div class="container">
      <div class="col-md-auto text-center">
        <img class="img-fluid" src="./assets/img/BioShine/footer2.png">
        <!-- End Col -->
      </div>
    </div>
  </footer>
  <footer>
    <div class="bg-img-start position-relative">
      <img class="img-fluid" src="./assets/img/BioShine/barfooter.png" style="width: 6000px; height: 15px;">
    </div>
    <!-- End Col -->
    </div>
  </footer>
  <footer class="bg-dark">
    <div class=" container py-4">
      <div class="row align-items-md-center text-center text-md-start">
        <div class="col-md mb-1 mb-md-0">
          <!--      <div class="col-md mb-1 mb-md-0">-->
          <a class="g-text-underline--none--hover mr-4" href="index.html">
            <img class="img-fluid" src="./assets/img/logo/BS.png" alt="Image Description" style='height: 45%; width: 45%; object-fit: contain'>
          </a>
        </div>

        <!--    <div class="col-md d-md-flex justify-content-md-end">-->
        <div class="col-md d-md-flex justify-content-md-center">
          <!-- Socials -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item link-light-75">
              <a class="btn btn-icon btn-sm btn-ghost-light rounded-circle" href="#">
                <i class="bi-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item  link-light-75">
              <a class="btn btn-icon btn-sm btn-ghost-light rounded-circle" href="#">
                <i class="bi-youtube"></i>
              </a>
            </li>
            <li class="list-inline-item link-light-75">
              <a class="btn btn-icon btn-sm btn-ghost-light rounded-circle" href="#">
                <i class="bi-line"></i>
              </a>
            </li>

          </ul>
          <!-- End Socials -->
        </div>
        <!--    <div class="col-md-7 mb-3 mb-md-0">-->
        <div class="col-md d-md-flex justify-content-md-end">
          <p class="fs-7 mb-0 text-cap text-white">9/113 Soi Suksawat 30, yeak 10, Suksawat Road, Bangpakok, Ratburana, Bangkok 10140, Thailand</p>
        </div>
      </div>

    </div>
  </footer>

  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Go To -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a>
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="./assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>

  <!-- JS Unify -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF NAVBAR
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      const megaMenu = new HSMegaMenu('.js-mega-menu', {
        desktop: {
          position: 'left'
        }
      })


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')
    })()
  </script>
</body>

</html>