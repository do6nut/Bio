<?php
// Include config file
//        require_once "./admin/config.php";
?>

<!DOCTYPE html>
<html lang="en" dir="" xmlns:max-width="http://www.w3.org/1999/xhtml" xmlns:min-width="http://www.w3.org/1999/xhtml"
      xmlns:width="http://www.w3.org/1999/xhtml">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Bio Shine</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./BS.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">

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
<!-- ========== HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
  <!-- Hero -->
<div class="container content-space-t-3"> </div>
  <div class="position-relative">
      <?php
      include("banner.php")
      ?>
          </div>
      </div>

      <!-- Swiper Pagination -->
      <div class="js-swiper-blog-modern-hero-pagination swiper-pagination swiper-pagination-light position-absolute bottom-0 start-0 end-0 mb-3 d-sm-none"></div>
    </div>

    <!-- End Swiper Main Slider -->

    <!-- Swiper Thumbs Slider -->
    <div class="position-sm-absolute bottom-0 start-0 end-0 zi-2 d-none d-sm-block mb-7">
      <div class="container content-space-t-1">
        <div class="js-swiper-blog-modern-hero-thumbs swiper swiper-step-pagination swiper-step-pagination-light">
          <div class="swiper-wrapper">
            <!-- Slide -->
            <div class="swiper-slide">
<!--              <span class="swiper-step-pagination-title">poultry, in animal husbandry, birds raised commercially or domestically for meat, eggs...-->
<!--              </span>-->
            </div>
            <!-- End Slide -->

            <!-- Slide -->
            <div class="swiper-slide">
<!--              <span class="swiper-step-pagination-title">The pig, often called swine, hog, or domestic pig when distinguishing from other members of the genus Sus...</span>-->
            </div>
            <!-- End Slide -->

            <!-- Slide -->
            <div class="swiper-slide">
<!--              <span class="swiper-step-pagination-title">Ruminants (suborder Ruminantia) are large hoofed herbivorous grazing or browsing mammals ...-->
<!--              </span>-->
            </div>
            <!-- End Slide -->

            <!-- Slide -->
            <div class="swiper-slide">
<!--              <span class="swiper-step-pagination-title">Aquaculture is breeding, raising, and harvesting fish, shellfish, and aquatic plants. Basically...-->
<!--              </span>-->
            </div>
            <!-- End Slide -->

            <!-- Slide -->
            <div class="swiper-slide">
<!--              <span class="swiper-step-pagination-title">A pet is a domesticated animal that lives with people, but is not forced to work and...-->
<!--              </span>-->
            </div>
            <!-- End Slide -->
          </div>
        </div>
      </div>
    </div>

    <!-- End Swiper Thumbs Slider -->
  </div>
  <!-- End Hero -->

  <!-- Card Grid -->
  <div class="container content-space-1 content-space-lg-1">
    <div class="col-md-6 mb-3 mb-md-0">
        <a class="nav-link " href="./list-social-enterprise.php">
        <h2 class="text-primary" >Social enterprise</h2></a>
    </div>
      <div class="row justify-content-lg-between">
          <div class="col-lg-9 mb-10 mb-lg-0">

          <?php
//           $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
//          // Check connection
//          if ($conn->connect_error) {
//              die("Connection failed: " . $conn->connect_error);
//          }
          $sql = "SELECT * FROM article WHERE article_type = 'Social enterprise' ORDER BY article_Timestamp DESC LIMIT 2";
          $result = $conn->query($sql);
          ?>
          <?php while ($row = $result->fetch_assoc()) : ?>

                  <div class="d-grid gap-7 mb-7">
                      <!-- Card -->
                      <a class="card card-ghost card-transition-zoom h-100" href="article-industry.php?id=<?php echo $row['article_id']; ?>">
                          <div class="row">
                              <div class="col-sm-5">
                                  <img class="card-img"  src="./assets/img/uploads/<?= $row['article_Image_1'] ?>" alt="Image Description">
                              </div>
                              <!-- End Col -->
                              <div class="col-sm-7">

                                  <h4> <?= $row['article_Header'] ?></h4>
                                  <p class="card-text">
                                      <?= $row['article_ConEn1'] ?></p>

                                  <!-- Card Footer -->
                                  <div class="card-footer">
                                      <div class="card-footer">
                                          <span class="card-link">Read more</span>
                                      </div>
                                  </div>
                                  <!-- End Card Footer -->
                              </div>
                              <!-- End Col -->
                          </div>
                          <!-- End Row -->
                      </a>
             <?php endwhile ?>
                  </div>
          </div>
        <!-- Sticky Block End Point -->
     <div id="stickyBlockEndPoint"></div>
      </div>
      <!-- End Col -->

      <div class="col-lg-3">
      <?php
//       $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
//      // Check connection
//      if ($conn->connect_error) {
//          die("Connection failed: " . $conn->connect_error);
//      }
      $sql = "SELECT * FROM article WHERE article_type = 'Social enterprise' ORDER BY article_Timestamp DESC LIMIT 3 OFFSET 2";
      $result = $conn->query($sql);
      ?>
      <?php while ($row = $result->fetch_assoc()) : ?>

            <div class="d-grid gap-3">

                <!-- Card -->
                <a class="d-block" href="article-industry.php?id=<?php echo $row['article_id']; ?>"">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avatar avatar-lg">
                                <img class="avatar-img"
                                     style width="320" height="320"
                                     src="./assets/img/uploads/<?= $row['article_Image_1'] ?>" alt="Image Description">
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="text-inherit mb-0"> <?= $row['article_Header'] ?></h6>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
                <?php endwhile ?>
            </div>
          </div>
    </div>
  <!-- End Col -->
  </div>
  <!-- End Row -->
  </div>
  <!-- End Card Grid -->


  <!-- Card Grid -->
  <div class="container content-space-lg-0">
<!--    <div class="container content-space-2 content-space-lg-3">-->
    <!-- Heading -->
<!--   <div class="w-lg-65 mx-lg-auto mb-5 mb-sm-7 mb-lg-10">-->
      <div class="col-md-6 mb-3 mb-md-0">
          <a class="nav-link " href="./list-feature-post.php">
              <h2 class="text-primary">Feature post</h2>
          </a>
    </div>
    <!-- End Heading -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">


        <?php
 $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM article WHERE article_type = 'featurepost' ORDER BY article_Timestamp DESC LIMIT 3";
        $result = $conn->query($sql);
        ?>
        <?php while ($row = $result->fetch_assoc()) : ?>

            <div class="col mb-5 mb-md-0">
                <!-- Card -->
                <a class="card card-ghost card-transition-zoom h-100" href="article-industry.php?id=<?php echo $row['article_id']; ?>">
                    <div class="card-transition-zoom-item">
                        <img class="card-img"
                             style width="580" height="250"
                             src="./assets/img/uploads/<?= $row['article_Image_1'] ?>" alt="Image Description">
                    </div>

                    <div class="card-body">
                        <h4><?= $row['article_Header'] ?></h4>
                        <p class="card-text">
                            <?= $row['article_ConEn1'] ?></p>
                    </div>

                    <div class="card-footer">
                        <span class="card-link">Read more</span>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->
            <?php endwhile ?>
    </div>
    <!-- End Row -->
  </div>
  <!-- End Card Grid -->

  <!-- Testimonials -->
  <div class=" overflow-hidden">
<!--    <div class="bg-dark overflow-hidden">-->
      <div class="container position-relative content-space-lg-1">
<!--        <div class="container position-relative content-space-2 content-space-lg-3">-->
      <div class="row align-items-md-center mb-7">
        <div class="col-md-6 mb-3 mb-md-0">
            <a class="nav-link " href="./list-cust-feedback.php">
                <h2 class="text-primary" >Customer and social feedback</h2></a>
        </div>
        <!-- End Col -->

<!--          <div class="col-md text-md-end">-->
<!--          &lt;!&ndash; Swiper Arrows &ndash;&gt;-->
<!--          <div class="js-swiper-testimonials-button-prev swiper-button-prev swiper-static-button-prev"></div>-->
<!--          <div class="js-swiper-testimonials-button-next swiper-button-next swiper-static-button-next"></div>-->
<!--          &lt;!&ndash; End Swiper Arrows &ndash;&gt;-->
<!--        </div>-->
        <!-- End Col -->
      </div>
      <!-- End Row -->
        <!-- Tags -->
<!--        <div class="container content-space-b-1">-->
<!--          <div class="text-center">-->
<!--            <a class="btn btn-white btn-sm m-1" id="poultryStory" href="javascript:;">Poultry story</a>-->
<!--            <a class="btn btn-white btn-sm m-1" id="swineStory" href="javascript:;">Swine story</a>-->
<!--            <a class="btn btn-white btn-sm m-1" id="ruminantStory" href="javascript:;">Ruminant story</a>-->
<!--            <a class="btn btn-white btn-sm m-1" id="aquaStory" herf ="javascript:;">Aquaculture story</a>-->
<!--            <a class="btn btn-white btn-sm m-1" id="petStory" href="javascript:;">Pet story</a>-->
<!--            <a class="btn btn-white btn-sm m-1" id="socialStory" href="javascript:;">Social story</a>-->
<!--          </div>-->
<!--          </div>-->
        </div>
        <!-- End Tags -->

      <!-- Swiper Slider -->
      <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3">
          <?php
 $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM article WHERE article_type = 'Customer Feedback' ORDER BY article_Timestamp DESC LIMIT 3";
          $result = $conn->query($sql);


          ?>

          <?php while ($row = $result->fetch_assoc()) : ?>
              <!-- Start Col -->
              <div class="col mb-5 mb-md-0">
                  <!-- Card -->
                  <div class="card">
                      <div class="card-body" style="">
                          <iframe class="card-img" width="294" height="300"
                                  src=<?= $row['article_ConEn1'] ?>>
                          </iframe>
                      </div>
                      <!-- End Card -->
                      <div class="card-footer bg-light">
                          <!-- Media -->
                          <div class="d-sm-flex align-items-sm-center">
                              <div class="flex-grow-1 ms-sm-3">
                                  <h6 class="mb-0"><?= $row['article_Header'] ?></h6>
                              </div>
                          </div>
                          <!-- End Media -->
                      </div>
                  </div>
              </div>

              <!-- End Col -->
          <?php endwhile ?>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
</main>
<!-- ========== END MAIN CONTENT ========== -->

<?php
    include("footer.html")
?>

<!-- ========== END FOOTER ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Go To -->
<a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
   data-hs-go-to-options='{
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
<script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="./assets/vendor/hs-video-player/dist/hs-video-player.min.js"></script>

<!-- JS Unify -->
<script src="./assets/js/theme.min.js"></script>

<!-- JS Plugins Init. -->
<script>
    (function() {
    onclick


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

      // INITIALIZATION OF SWIPER
      // =======================================================
      var swiper = new Swiper('.js-swiper-clients',{
        slidesPerView: 2,
        breakpoints: {
          380: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 15,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 15,
          },
        },
      });


      // INITIALIZATION OF VIDEO PLAYER
      // =======================================================
      new HSVideoPlayer('.js-inline-video-player')

    // INITIALIZATION OF SWIPER
      // =======================================================
      var sliderThumbs = new Swiper('.js-swiper-blog-modern-hero-thumbs', {
        slidesPerView: 5,
        breakpoints: {
          580: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 50,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 50,
          },
        },
      });

      // Blog Modern Hero
      var swiper = new Swiper('.js-swiper-blog-modern-hero',{
        effect: 'fade',
        autoplay: true,
        loop: true,
        pagination: {
          el: '.js-swiper-blog-modern-hero-pagination',
          clickable: true,
        },
        thumbs: {
          swiper: sliderThumbs
        }
      });


      // INITIALIZATION OF STICKY BLOCKS
      // =======================================================
    //   new HSStickyBlock('.js-sticky-block', {
    //   targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
    //  })

// INITIALIZATION OF SWIPER
      // =======================================================
      var swiper = new Swiper('.js-swiper-testimonials',{
        navigation: {
          nextEl: '.js-swiper-testimonials-button-next',
          prevEl: '.js-swiper-testimonials-button-prev',
        },
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        breakpoints: {
          580: {
            slidesPerView: 1
          },
          768: {
            slidesPerView: 2
          },
          1024: {
            slidesPerView: 3
          },
        },
        on: {
          'imagesReady': function (swiper) {
            const preloader = swiper.el.querySelector('.js-swiper-preloader')
            preloader.parentNode.removeChild(preloader)
          }
        }
      });

//
    })()
  </script>
</body>
</html>
