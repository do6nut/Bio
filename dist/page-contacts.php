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
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Card Grid -->
    <div class="container content-space-t-3 content-space-t-lg-4">
      <div class="text-center mb-7">
        <h1 class="display-5">Contact Us</h1>
      </div>
    </div>
    <!-- End Card Grid -->

    <!-- Contact Form -->
    <div class="overflow-hidden">
      <div class="container content-space-1 content-space-lg-1">
        <div class="row">

          <div class="col-lg-6 mb-10 mb-lg-0">
            <div class="pe-lg-10">
              <div class="mb-5">
                <h3>Our office</h3>
              </div>
                <div class="mb-5">
                    <div>
                        <iframe
                                class="card-img"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.9882277451534!2d100.49337461094667!3d13.658479648774804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2a24525486ef1%3A0xa9521f0ff4a1ea06!2s9!5e0!3m2!1sen!2sth!4v1656308340484!5m2!1sen!2sth"
                                width= "auto" height="450"style="border:0;" allowfullscreen=""
                                oading="lazy" referrerpolicy="no-referrer-when-downgrade">

                        </iframe>
                    </div>
                </div>
              <!-- Info -->
              <address>
                <span class="d-block fs-3 fw-bold text-dark mb-2">Office:</span>
                  9/113 SOI SUKSAWAT 30, YEAK 10, SUKSAWAT ROAD, BANGPAKOK, RATBURANA, BANGKOK 10140, THAILAND<br>
              </address>
              <!-- End Info -->
            </div>
          </div>
          <!-- End Col -->

          <div class="col-lg-6">
            <div class="position-relative">
              <!-- Card -->
              <div class="card card-lg">
                <!-- Card Body -->
                <div class="card-body">
                  <h4 class="mb-4">Fill in the form</h4>

                  <form action="./admin/insert_db_contact.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-sm-6 mb-4 mb-sm-0">
                        <!-- Form -->
                        <div class="mb-4">
                          <label class="form-label" for="contactsFormFirstName">First name</label>
                          <input type="text" class="form-control" name="contactsFormNameFirstName" id="contactsFormFirstName" placeholder="" >
                        </div>
                        <!-- End Form -->
                      </div>
                      <!-- End Col -->

                      <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                          <label class="form-label" for="contactsFormLasttName">Last name</label>
                          <input type="text" class="form-control" name="contactsFormNameLastName" id="contactsFormLastName" placeholder="" >
                        </div>
                        <!-- End Form -->
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->

                    <!-- Form -->
                    <div class="mb-4">
                      <label class="form-label" for="contactsFormWorkEmail">Work email</label>
                      <input type="text" class="form-control" name="contactsFormNameEmail" id="contactsFormEmail" placeholder="email@site.com" aria-label="email@site.com">
                    </div>
                    <!-- End Form -->

                      <!-- Form -->
                      <div class="mb-4">
                          <label class="form-label" for="contactsFormPhone">Phone number</label>
                          <input type="text" class="form-control" name="contactsFormPhone" id="contactsFormPhone" placeholder=""  rows="4"></textarea>
                      </div>
                      <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-4">
                      <label class="form-label" for="contactsFormDetails">Details</label>
                      <textarea class="form-control" name="contactsFormNameDetails" id="contactsFormDetails" placeholder=""  rows="4"></textarea>
                    </div>
                    <!-- End Form -->

                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary btn-lg">Send inquiry</button>
                    </div>
                  </form>
                </div>
                <!-- End Card Body -->
              </div>
              <!-- End Card -->
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Contact Form -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
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
