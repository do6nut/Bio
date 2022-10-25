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
            <h1 class="docs-page-header-title" >Mission & Vision</h1>
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
        <!-- Header -->
        <div class="card-header">
          <!-- Nav -->
          <ul class="nav justify-content-end " role="tablist">
            <li class="nav-item">

              <?php
              $id = 0;
              if (isset($_GET['id'])) {
                $id = $_GET['id'];
              }

              ?>

              <!-- <a href="../admin/atricle_del.php?id=<?php echo $id; ?>" type="submit" class="btn btn-primary  btn-sm">
                <i class=" bi-trash"></i>
                Delete</a> -->

            </li>

          </ul>
          </ul>
          <!-- End Nav -->
        </div>
        <!-- End Header -->
        <!-- Tab Content -->
        <div class="tab-content" id="navTabContent1">
          <div class="tab-pane fade p-4 show active" id="nav-result1" role="tabpanel" aria-labelledby="nav-resultTab1">
            <!-- Content -->
            <div class="w-lg-75 mx-lg-auto">
              <!-- Card -->
              <div class="card card-shadow">
                <div class="card-body p-sm-7 p-md-5">

                  <form action="article_update.php" method="post" enctype="multipart/form-data">

                    <?php

                     $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
                   // $id = 17;

                    if (isset($_GET['id'])) {
                      $id = $_GET['id'];
                    }

                    $sql = "SELECT * FROM article WHERE article_type = 'VISION'";
                    $result = $conn->query($sql);

                    $row = $result->fetch_assoc();

                    ?>

                    <input type="hidden" name="id" value="<?= $row['article_id'] ?>">

                    <div class="mb-3">
                      <label class="form-label">Header</label>
                      <input type="text" class="form-control" name="article_Header" value="<?= $row['article_Header'] ?>" placeholder="">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Content English line1</label>
                      <textarea type="text" class="form-control" name="article_ConEn1" placeholder=""><?= $row['article_ConEn1'] ?></textarea>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Content Thai line1</label>
                      <textarea type="text" class="form-control" name="article_ConTh1" placeholder=""><?= $row['article_ConTh1'] ?></textarea>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Image</label>
                      <input type="file" id="customFileEg1" name="article_Image_1" class="form-control">
                      <input type="hidden" name="article_Image_1_old" value="<?= $row['article_Image_1'] ?>"><span><?= $row['article_Image_1'] ?></span>
                    </div>

                    <hr class="my-md-7">

                    <div class="mb-3">
                      <label class="form-label">Content English line2</label>
                      <textarea type="text" class="form-control" name="article_ConEn2" placeholder=""><?= $row['article_ConEn2'] ?></textarea>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Content Thai line2</label>
                      <textarea type="text" class="form-control" name="article_ConTh2" placeholder=""><?= $row['article_ConTh2'] ?></textarea>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Image</label>
                      <input type="file" id="customFileEg2" name="article_Image_2" class="form-control">
                      <input type="hidden" name="article_Image_2_old" value="<?= $row['article_Image_2'] ?>"><span><?= $row['article_Image_2'] ?></span>
                    </div>

                    <hr class="my-md-7">

                    <div class="mb-3">
                      <label class="form-label">Content English line3</label>
                      <textarea type="text" class="form-control" name="article_ConEn3" placeholder=""><?= $row['article_ConEn3'] ?></textarea>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Content Thai line3</label>
                      <textarea type="text" class="form-control" name="article_ConTh3" placeholder=""><?= $row['article_ConTh3'] ?></textarea>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Image</label>
                      <input type="file" id="customFileEg3" name="article_Image_3" class="form-control">
                      <input type="hidden" name="article_Image_3_old" value="<?= $row['article_Image_3'] ?>"><span><?= $row['article_Image_3'] ?></span>
                    </div>

                    <br>

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