<?php
    // Include config file
    //require_once "./admin/config.php";
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
  <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
  <link rel="stylesheet" href="../assets/vendor/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="../assets/vendor/hs-video-player/dist/hs-video-player.min.js">

  <!-- CSS Unify Template -->
  <link rel="stylesheet" href="../assets/css/theme.min.css">
</head>
<!-- ========== FOOTER ========== -->

<!-- Swiper -->
<div class="js-swiper-autoplay swiper">
    <div class="swiper-wrapper">
<?php
$dir = "../assets/img/banner/";
// Open a known directory, and proceed to read its contents
//if (is_dir($dir)) {
//    if ($dh = opendir($dir)) {
//        while (($file = readdir($dh)) !== false) {
//           echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
//            echo "filename123456: $file : filetype: " . filetype($dir . $file) . "\n";
//        }
//        closedir($dh);
//    }
//}

//if (is_dir($dir)) {
//   // echo "testName".$dir."<br />";
//    if ($dh = opendir($dir)) {
//        while (($file = readdir($dh)) !== false) {
//          //  echo "filename: .".$file."<br />";
//          //  echo "filename: .".$dir.$file."<br />";
//
//            $newString = substr ( $dir.$file, -4);
//            if ($newString == ".png" || $newString == ".jpg" ){
//                ?>

<!--            <div class="swiper-slide bg-img-start content-space-2 content-space-t-sm-3 content-space-b-sm-4"-->
<!--                 style="background-image: url(--><?//=$dir.$file?><!--); "  style width="4000" height="4000" >-->
<!--                <div class="container content-space-b-sm-2">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-6">-->
<!--                            <div class="mb-10">-->
<!--                                <h2 class="h1 text-white">Poultry</h2>-->
<!---->
<!--                            </div>-->
<!--                            <a class="btn btn-light btn-pointer" href="article-Industry.php">Read article</a>-->
<!--                        </div>-->
<!--                         End Col -->
<!--                    </div>-->
<!--                     End Row -->
<!--                </div>-->
                <!-- End Container -->
<!--            </div>-->
<!--            --><?php
//            }
//        }
//     }
//    closedir($dh);
//   } ?>

        <?php
//         $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
//        // Check connection
//        if ($conn->connect_error) {
//            die("Connection failed: " . $conn->connect_error);
//        }

//            if (isset($_GET['id'])) {
//                $id = $_GET['id'];
//            }

//            $sql = "SELECT * FROM article WHERE article_tag = 'Banner2'";
        $sql = "SELECT * FROM article WHERE article_type = 'Banner' ";
            if ($stmt = mysqli_prepare($link, $sql)) {
            }
            $result = $link->query($sql);
            $row = $result;
        ?>
        <?php while ($row = $result->fetch_assoc()) :

//            echo $dir.$row['article_Image_1'];
            ?>
            <div class="swiper-slide bg-img-start content-space-2 content-space-t-sm-3 content-space-b-sm-4"
                 style="background-image: url(<?=$dir.$row['article_Image_1'] ?>); "  style width="4000" height="4000" >
                <div class="container content-space-b-sm-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-10">
                                <h2 class="h1 text-white"><?= $row['article_Header'] ?></h2>
                                <a class="btn btn-light btn-pointer" href="article-Industry.php">Read article</a>
                            </div>

                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Container -->
            </div>
        <?php endwhile ?>
  </div>

  <!-- Arrows -->
  <div class="js-swiper-autoplay-button-next"></div>
  <div class="js-swiper-autoplay-button-prev"></div>
</div>
<!-- End Swiper -->

<!-- Swiper Pagination -->
<div class="js-swiper-autoplay-pagination swiper-pagination"></div><!-- ========== END FOOTER ========== -->

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
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="../assets/vendor/hs-header/dist/hs-header.min.js"></script>
<script src="../assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
<script src="../assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/hs-video-player/dist/hs-video-player.min.js"></script>

<!-- JS Unify -->
<script src="../assets/js/theme.min.js"></script>

</body>
</html>
<script>
  (function() {
    // INITIALIZATION OF SWIPER
    // =======================================================
      var autoplay = new Swiper('.js-swiper-autoplay', {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
              delay: 6000,
              disableOnInteraction: false,
          },
          pagination: {
              el: '.js-swiper-autoplay-pagination',
              clickable: true,
          },
          navigation: {
              nextEl: '.js-swiper-autoplay-button-next',
              prevEl: '.js-swiper-autoplay-button-prev',
          },
      });
  })()
</script>
