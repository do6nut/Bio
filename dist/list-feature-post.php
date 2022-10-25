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
</header>

<!-- ========== END HEADER ========== -->


  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Card Grid -->
    <div class="container content-space-t-3 content-space-t-lg-4 content-space-b-2 content-space-b-lg-3 overflow-hidden">
      <!-- Card Grid -->
      <div class="">
        <!-- Heading -->
        <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-sm-7 mb-lg-7">
          <h2>Feature post</h2>
        </div>
        <!-- End Heading -->

        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4">

          <?php

           $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
      
          $sql = "SELECT * FROM article WHERE article_type = 'featurepost' ORDER BY article_Timestamp DESC";
          $result = $conn->query($sql);

          ?>
    
          <?php while ($row = $result->fetch_assoc()) : ?>
          <!-- Start Col -->
          <div class="col mb-5 mb-md-0">
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <a class="card card-ghost card-transition-zoom h-100" href="./article-Product-cate.php?id=<?= $row['article_id'] ?>" >
                  <div class="card-transition-zoom-item">
                      <img class="card-img" src="./assets/img/uploads/<?= $row['article_Image_1'] ?>"
                           style="height: 250px">
                  </div>
                </a>
              </div>
              <!-- End Card -->
              <div class="card-footer bg-light">
                <!-- Media -->

                    <a href="./article-Product-cate.php?id=<?= $row['article_id'] ?>" >
                      <button type="button" class="btn btn-primary rounded-pill btn-lg">
                        Read more
                      </button>
                    </a>
                  </div>

                <!-- End Media -->

            </div>
          </div>
          <!-- End Col -->
          <?php endwhile ?>

        </div>
      </div>
      <!-- End Row -->
    </div>
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