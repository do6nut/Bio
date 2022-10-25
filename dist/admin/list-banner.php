<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

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
            <h1 class="docs-page-header-title">Banner</h1>
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
        <form method="post" enctype="multipart/form-data">
      <div class="card">
        <!-- Tab Content -->
        <div class="tab-content" id="navTabContent1">
          <div class="tab-pane fade p-4 show active" id="nav-result1" role="tabpanel" aria-labelledby="nav-resultTab1">
            <!-- Content -->
            <div class="w-lg-75 mx-lg-auto">
              <!-- Card -->
              <div class="card card-shadow">
                <div class="card-body p-sm-7 p-md-5">

                  <div class="mb-5">
                    <h4 class="card-title">
                            List of banner   </h4>
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
                  </div>


                  <!-- Table -->
                  <table class="table table-sm">
                    <thead>
                      <tr>
                        <td scope="col">Row</td>
                          <td scope="col">Description</td>
                          <td scope="col">Edit</td>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php

                $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
                        // Check connection
                        if ($conn->connect_error) {
                           die("Connection failed: " . $conn->connect_error);
                         }
                             $sql = "SELECT * FROM article WHERE article_type = 'Banner'";
                             $result = $conn->query($sql);
                        ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                    <th style="width: 1rem;"><?php echo $row['article_tag']; ?></th>
                        <th style="width: 1rem;"><?php echo $row['article_Header']; ?></th>
                        <th style="width: 1rem;">
                            <a href="edit-banner.php?id=<?php echo $row['article_tag']; ?>"
                               type="button" class="btn btn-soft-success btn-sm "><i class="bi bi-pencil-square"></i>
                            </a>
                        </th>
                    </tr>
                        <?php endwhile ?>
<!--                            <select>-->
<!--                                <option value="Select">Select</option>}-->
<!--                      --><?php
//                       $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
//                      // Check connection
//                      if ($conn->connect_error) {
//                        die("Connection failed: " . $conn->connect_error);
//                      }
//                      $sql = "SELECT * FROM article";
//                      $result = $conn->query($sql);
//                      ?>
<!--                      --><?php //while ($row = $result->fetch_assoc()) : ?>
<!--                              <option name="value1" value="--><?php //echo $row['article_Header']; ?><!--">--><?php //echo $row['article_Header']; ?><!--</option>-->
<!--                      --><?php //endwhile ?>
<!--                    </select>-->
                    </tbody>
                  </table>
                  <!-- End Table -->
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
        </form>
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
    function chkConfirm(i)
    {
        if(confirm('Do you want to delete this content')==true)
        {
            window.location.href="del-social-enterprise.php?id="+i;
        }
        else
        {
            /* href="knowledge_del.php?id="+i;*/
        }
    }
  </script>
</body>

</html>