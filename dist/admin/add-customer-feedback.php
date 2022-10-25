<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Bio Shine</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../BS.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <!-- CSS Unify Template -->
  <link rel="stylesheet" href="../assets/css/theme.min.css">
  <link rel="stylesheet" href="../assets/css/snippets.min.css">
</head>

<body class="navbar-sidebar-aside-lg">
  <!-- ========== HEADER ========== -->
  <?php
  include("header.php")
  ?>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
      <?php
      include("sidebar.php")
      ?>

    <!-- Content -->
    <div class="navbar-sidebar-aside-content content-space-1 content-space-md-2 px-lg-5 px-xl-10">
      <!-- Page Header -->
      <div class="docs-page-header">
        <div class="row align-items-center">
          <div class="col-sm">
            <h1 class="docs-page-header-title">Customer Feedback</h1>
          </div>
        </div>
      </div>
      <!-- End Page Header -->

      <!-- Heading -->
      <!--      <h2 id="component-1" class="hs-docs-heading">-->
      <!--        Component #1 <a class="anchorjs-link" href="#component-1" aria-label="Anchor" data-anchorjs-icon="#"></a>-->
      <!--      </h2>-->
      <!-- End Heading -->

      <!-- Card -->
      <div class="card">
        <!-- Tab Content -->
        <div class="tab-content" id="navTabContent1">
          <div class="tab-pane fade p-4 show active" id="nav-result1" role="tabpanel" aria-labelledby="nav-resultTab1">
            <!-- Content -->
            <div class="w-lg-75 mx-lg-auto">
              <!-- Card -->
              <div class="card card-shadow">
                <div class="card-body p-sm-7 p-md-5">

                  <form action="insert_db_customer_feedback.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                      <label class="form-label">Title</label>
                      <input type="text" class="form-control" name="article_Header" placeholder="" required>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Video link</label>
                      <textarea type="text" class="form-control" name="article_ConEn1" placeholder="https://www.youtube.com" ></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary  btn-sm">
                      <i class=" bi-save"></i>
                      Submit</button>

                  </form>
                </div>
              </div>
              <!-- End Card -->
            </div>
            <!-- End Content -->
          </div>
        </div>
        <!-- End Tab Content -->
      </div>
      <!-- End Card -->
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

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
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="../assets/vendor/hs-nav-scroller/dist/hs-nav-scroller.min.js"></script>
  <script src="../assets/vendor/list.js/dist/list.min.js"></script>
  <script src="../assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="../assets/vendor/prism/prism.js"></script>

  <!-- JS Unify -->
  <script src="../assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF NAV SCROLLER
      // =======================================================
      new HsNavScroller('.js-nav-scroller', {
        delay: 400,
        offset: 140
      })


      // INITIALIZATION OF LISTJS COMPONENT
      // =======================================================
      const snippetsSearch = HSCore.components.HSList.init('#snippetsSearch');


      // GET JSON FILE RESULTS
      // =======================================================
      fetch('../assets/json/snippets-search.json')
        .then(response => response.json())
        .then(data => {
          snippetsSearch.getItem(0).add(data)
        })


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')
    })()

    //อัพโหลดรูป
  </script>
</body>

</html>