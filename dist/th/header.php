<?php
// Include config file
    include '../admin/config.php';
        $host=$config['DB_HOST'];
        $User=$config['DB_USERNAME'];
        $Pass=$config['DB_PASSWORD'];
        $dbname=$config['DB_DATABASE'];
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
<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-light navbar-absolute-top navbar-show-hide"
        data-hs-header-options='{
            "fixMoment": 0,
            "fixEffect": "slide"
          }'>
  <div class="container">
    <nav class="js-mega-menu navbar-nav-wrap">
      <!-- Default Logo -->
      <a class="navbar-brand" href="./index.php" aria-label="BioShine">
        <img class="navbar-brand-logo"
             src="./image2vector.svg"
             alt="Image Description">
      </a>
      <!-- End Default Logo -->

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
              aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>
        <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
      </button>
      <!-- End Toggler -->

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="navbar-absolute-top-scroller">
          <ul class="navbar-nav nav-pills">
            <!-- About us -->
            <li class="hs-has-mega-menu nav-item">
              <a id="aboutUsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" aria-expanded="false">About us</a>

              <!-- Mega Menu -->
              <div class="hs-mega-menu hs-position-right dropdown-menu w-100" aria-labelledby="aboutUsMegaMenu" style="min-width: 42rem;">
                <!-- Main Content -->
                <div class="navbar-dropdown-menu-inner">
                  <div class="row">
                    <!--                    <div class="col-sm-5 col-lg-3">-->
                    <div>
                      <span class="dropdown-header">Company</span>
                      <a class="dropdown-item " href="./page-AboutUs.php">About Us</a>
                      <a class="dropdown-item " href="./article-Industry.php?id=69">Mission & Vision</a>
                      <a class="dropdown-item " href="./article-Industry.php?id=71">Core Values</a>
                      <a class="dropdown-item " href="./article-Industry.php?id=70">Core Competency</a>
                      <a class="dropdown-item " href="./page-contacts.php">Contact Us</a>
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Main Content -->
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End About us -->


            <!-- Our business -->
            <li class="hs-has-mega-menu nav-item">
              <a id="ourBusinessMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" aria-expanded="false">Our business</a>

              <!-- Mega Menu -->
              <div class="hs-mega-menu hs-position-right dropdown-menu w-100" aria-labelledby="ourBusinessMegaMenu" style="min-width: 42rem;">
                <!-- Main Content -->
                <div class="navbar-dropdown-menu-inner">
                  <div class="row">
                    <div class="col-sm-5 col-lg-3">
                      <span class="dropdown-header">Feed industry</span>
                      <a class="dropdown-item " href="article-Industry.php?id=17">Poultry industry</a>
                      <a class="dropdown-item " href="article-Industry.php?id=18">Swine industry</a>
                      <a class="dropdown-item " href="article-Industry.php?id=20">Dairy and beef industry</a>
                      <a class="dropdown-item " href="article-Industry.php?id=19">Aquaculture industry</a>
                      <a class="dropdown-item " href="article-Industry.php?id=21">Pet food industry</a>
                    </div>

                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                      <span class="dropdown-header">Food industry</span>
                      <a class="dropdown-item " href="article-Industry.php?id=119">Food supplement</a>
                      <a class="dropdown-item " href="article-Industry.php?id=120">Branding creation and OEM product</a>
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Main Content -->
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Our business -->

            <!-- Our Product -->
            <li class="hs-has-mega-menu nav-item">
              <a id="ourProductMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" aria-expanded="false">Our Products</a>

              <!-- Mega Menu -->
              <div class="hs-mega-menu hs-position-right dropdown-menu w-100" aria-labelledby="ourProductMegaMenu" style="min-width: 42rem;">
                <!-- Main Content -->
                <div class="navbar-dropdown-menu-inner">
                  <div class="row">
                    <div class="col-sm-6 col-lg-3">
                      <span class="dropdown-header" ><a href="./list-our-product.php">Product category</a></span>

                        <?php

             $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM productcategory WHERE GroupType = 'ProductCategory' ORDER BY Type ASC LIMIT 5 ";
                        $result = $conn->query($sql);

                        ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>

                  <a class="dropdown-item " href="./list-sub-our-product.php?id=<?php echo $row['Type']; ?>"><?php echo $row['Type']; ?></a>

              <?php endwhile ?>

                    </div>

                    <div class="col-sm-6 col-lg-3 mt-n5 mt-sm-0 mb-3 mb-lg-0">
                      <span class="dropdown-header invisible">Product category</span>
                        <?php

                        $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM productcategory WHERE GroupType = 'ProductCategory' ORDER BY Type ASC LIMIT 5,5 ";
                        $result = $conn->query($sql);

                        ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>

                            <a class="dropdown-item " href="./list-sub-our-product.php?id=<?php echo $row['Type']; ?>"><?php echo $row['Type']; ?></a>

                        <?php endwhile ?>
                    </div>

                    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                      <span class="dropdown-header"><a href="./list-animal-cate.php">Animals</a></span>
                      <a class="dropdown-item " href="./article-animal-cate.php?id=135">Modern</a>
                      <a class="dropdown-item " href="./article-animal-cate.php?id=136">Case Study</a>
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Main Content -->
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Our Product -->


            <!-- Sustainable development -->
            <li class="hs-has-mega-menu nav-item">
              <a id="SusMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle "
                 href="./list-sustainable-development.php" role="button" aria-expanded="false">Sustainable development</a>
              <!-- Mega Menu -->
              <div class="hs-mega-menu hs-position-right dropdown-menu w-100" aria-labelledby="SussMegaMenu" style="min-width: 42rem;">
                <!-- Main Content -->
                <div class="navbar-dropdown-menu-inner">
                  <div class="row">
                    <div class="col-sm-6 col-lg-3">
                      <span class="dropdown-header" ><a href="./list-sustainable-development.php">Sustainable development</a></span>
                        <?php
                        $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM article WHERE group_type = 'SUSTAINABLE' ORDER BY article_Header ASC ";
                        $result = $conn->query($sql);

                        ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>

                  <a class="dropdown-item " href="./article-Sustainable.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>

              <?php endwhile ?>
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Main Content -->
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Sustainable development -->

            <!-- News -->
            <li class=" nav-item">
              <a id="NewsMegaMenu" class="hs-mega-menu-invoker nav-link " href="./list-knowledge.php" >Knowledge</a>
            </li>
            <!-- End News -->

            <!-- Language -->
            <li class="hs-has-mega-menu nav-item">
              <a id="languageMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                 src="../assets/vendor/flag-icon-css/flags/1x1/th.svg">
                <img class="avatar avatar-xss avatar-circle me-2"
                     src="./us.svg"
                     alt="Image description" width="3"/>
              </a>
              <!-- Mega Menu -->
              <div class="hs-mega-menu hs-position-right dropdown-menu"
                   aria-labelledby="languageMegaMenu" style="min-width: 8rem;">
                <!-- Main Content -->
                <div class="navbar-dropdown-menu-inner">
                  <div class="row">
                    <!--                    <div class="col-sm-6 col-lg-1">-->
                    <div class="col-sm-7 col-lg-1 w-lg-100">
                        <span class="d-flex align-items-center " >
                            <img class="avatar avatar-xss avatar-circle me-2"
                                 src="./us.svg"
                                 alt="Image description" width="2"/>
                          <a class="dropdown-item " href="../index.php" >
                             English</a>
                  </span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-7 col-lg-1 w-lg-100">
                       <span class="d-flex align-items-center">
                           <img class="avatar avatar-xss avatar-circle me-2"
                                src="./th.svg"
                                alt="Image description" width="2"/>
                          <a class="dropdown-item " href="./index.php">
                          Thailand
                         </a>
                  </span>
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Main Content -->
              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End Language -->
          </ul>
        </div>
      </div>
      <!-- Button Group -->
      <!-- End Collapse -->
    </nav>
  </div>
  <!--  <div class="btn-group hs-has-mega-menu nav-item ">-->
  <!--    <a class="link link-light link-light-75"-->
  <!--       href="javascript:;" id="selectLanguage" data-bs-toggle="dropdown" aria-expanded="false">-->
  <!--                  <span class="d-flex align-items-center">-->
  <!--                    <img class="avatar avatar-xss avatar-circle me-2"-->
  <!--                         src="../assets/vendor/flag-icon-css/flags/1x1/us.svg"-->
  <!--                         alt="Image description" width="16"/>-->
  <!--                    <span>English</span>-->
  <!--                  </span>-->
  <!--    </a>-->

  <!--    <div class="dropdown-menu">-->
  <!--      <a class="dropdown-item d-flex align-items-center active" href="#">-->
  <!--        <img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/>-->
  <!--        <span>English</span>-->
  <!--      </a>-->
  <!--      <a class="dropdown-item d-flex align-items-center" href="#">-->
  <!--        <img class="avatar avatar-xss avatar-circle me-2" src="../assets/vendor/flag-icon-css/flags/1x1/th.svg" alt="Image description"-->
  <!--             width="16"/>-->
  <!--        <span>Thailand</span>-->
  <!--      </a>-->
  <!--    </div>-->
  <!--  </div>-->
</header>

<!-- ========== END HEADER ========== -->

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
