<!DOCTYPE html>
<html lang="en" dir="" xmlns:max-width="http://www.w3.org/1999/xhtml" xmlns:min-width="http://www.w3.org/1999/xhtml" xmlns:width="http://www.w3.org/1999/xhtml">

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
  <link rel="stylesheet" href="./assets/vendor/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="./assets/vendor/hs-video-player/dist/hs-video-player.min.js">

  <!-- CSS Unify Template -->
  <link rel="stylesheet" href="./assets/css/theme.min.css">
</head>

<body>
<!-- ========== HEADER ========== -->
<?php
include("header.php")
?>

<!-- ========== END HEADER ========== -->


  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Card Grid -->

      <div class="overflow-hidden">
          <div class="container content-space-t-1 content-space-t-lg-4 content-space-b-1 ">
              <div class="w-lg-50 text-center mx-lg-auto">
                  <!-- Heading -->
                  <div class="mb-5">
                      <h1 class="display-8">Markets & Solutions</h1>
                  </div>
                  <!-- End Heading -->
              </div>
          </div>
      </div>
        <!-- End Heading -->

      <div class="container ">
          <!-- Card Grid -->
          <div class="">
              <div class="row">
                  <!-- Start Col -->
                  <div class="col-lg-6 mb-10 mb-lg-0">
                      <div class="" >
                          <h2 class="text-primary" ><a href="./list-feed-industry.php">Feed Industries</a></h2>
                      </div>
                     <div class="container content-space-b-2 content-space-b-lg-3 overflow-hidden">
                         <div class="row row-cols-1 row-cols-sm-2 gx-7">
                              <?php

                               $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
                              // Check connection
                              if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                              }

                              $sql = "SELECT * FROM article WHERE article_type = 'INDUSTRY' AND group_Type != 'featurepost'  ";
                              $result = $conn->query($sql);


                              ?>

                          <?php while ($row = $result->fetch_assoc()) : ?>
                          <!-- Start Col -->
                             <div class="col mb-2 mb-md-7">
                                 <!-- Card -->
                                 <a class="card card-ghost h-100" href="./article-Industry.php?id=<?= $row['article_id'] ?>">
                                     <div class="row">
                                         <div class="col-lg-10 mb-5 mb-lg-4">
                                             <img class=" img-fluid" src="./assets/img/uploads/<?= $row['article_Image_1'] ?>"
                                                  alt="Image Description"
                                             >
                                         </div>
                                         <!-- End Col -->
                                     </div>
                                     <!-- End Row -->
                                 </a>
                                 <!-- End Card -->
                             </div>
                             <!-- End Col -->
                          <?php endwhile ?>
                         </div>
                     </div>
                  </div>

                     <div class="col-lg-6">
                         <div class="">
                             <h2 class="text-primary" ><a href="./list-food-industry.php">Food Industries</a></h2>
                         </div>
                         <div class="container content-space-b-2 content-space-b-lg-3 overflow-hidden">
                             <div class="row row-cols-1 row-cols-sm-2 gx-7">
                                 <?php

                                 $conn1 = new mysqli("$host", "$User", "$Pass", "$dbname");
                                 // Check connection
                                 if ($conn1->connect_error) {
                                     die("Connection failed: " . $conn1->connect_error);
                                 }

                                 $sql1 = "SELECT * FROM article WHERE article_type = 'INDUSTRY' AND group_Type = 'featurepost'  ";
                                 $result1 = $conn1->query($sql1);

                                 ?>

                                 <?php while ($row1 = $result1->fetch_assoc()) : ?>
                                     <!-- Start Col -->
                                     <div class="col mb-4 mb-md-7">
                                         <!-- Card -->
                                         <a class="card card-ghost h-100" href="./article-Industry.php?id=<?= $row1['article_id'] ?>">
                                             <div class="row">
                                                 <div class="col-lg-10 mb-5 mb-lg-4">
                                                     <img class=" card-img" src="./assets/img/uploads/<?= $row1['article_Image_1'] ?>" alt="Image Description">
                                                 </div>
                                                 <!-- End Col -->
                                             </div>
                                             <!-- End Row -->
                                         </a>
                                         <!-- End Card -->
                                     </div>
                                     <!-- End Col -->
                                 <?php endwhile ?>
                             </div>
                         </div>
                     </div>
                </div>
          </div>

          </div>
      </div>
      <!-- End Row -->
    <!-- End Card Grid -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
<?php
include("footer.html")
?>

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