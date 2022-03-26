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
  <header id="header" class="navbar navbar-expand navbar-fixed navbar-end navbar-light navbar-sticky-lg-top bg-white">
    <div class="container-fluid">
      <nav class="navbar-nav-wrap">
        <div class="row flex-grow-1">
          <!-- Default Logo -->
          <div class="docs-navbar-sidebar-container d-flex align-items-center mb-2 mb-lg-0">
            <a class="navbar-brand" href="../index.html" aria-label="BioShine">
              <img class="navbar-brand-logo" src="../assets/svg/logos/image2vector.svg" alt="Image Description">
            </a>
          </div>
          <!-- End Default Logo -->

          <div class="col-md px-lg-0">
            <div class="d-flex justify-content-between align-items-center px-lg-5 px-xl-10">
              <div class="d-none d-md-block">

                <!-- List Item Template -->
                <div class="d-none">
                  <div id="searchTemplate" class="dropdown-item">
                    <a class="d-block link" href="#">
                      <span class="category d-block text-muted mb-1"></span>
                      <span class="component fw-bold text-dark"></span>
                    </a>
                  </div>
                </div>
                <!-- End List Item Template -->
              </div>

              <!-- Navbar -->
              <ul class="navbar-nav p-0">
                <li class="nav-item">
                  <a class="btn btn-primary" href="../index.html">
                    <i class="bi-eye me-1"></i> Goto Website
                  </a>
                </li>
              </ul>
              <!-- End Navbar -->
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </nav>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Navbar -->
    <nav class="js-nav-scroller navbar navbar-expand-lg navbar-sidebar navbar-vertical navbar-light bg-white border-end" data-hs-nav-scroller-options='{
            "type": "vertical",
            "target": ".navbar-nav .active",
            "offset": 80
           }'>
      <!-- Navbar Toggle -->
      <div class="d-grid flex-grow-1 px-2">
        <button type="button" class="navbar-toggler btn btn-white" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu">
          <span class="d-flex justify-content-between align-items-center">
            <span class="h3 mb-0">Nav menu</span>

            <span class="navbar-toggler-default">
              <i class="bi-list"></i>
            </span>

            <span class="navbar-toggler-toggled">
              <i class="bi-x"></i>
            </span>
          </span>
        </button>
      </div>
      <!-- End Navbar Toggle -->

        <!-- Navbar Collapse -->
        <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
            <div class="navbar-brand-wrapper border-end" style="height: auto;">
                <!-- Default Logo -->
                <div class="d-flex align-items-center mb-3">
                    <a class="navbar-brand" href="../admin/index.php">
                        <img class="navbar-brand-logo" src="../assets/svg/logos/image2vector.svg" alt="Logo">
                    </a>
                </div>
                <!-- End Default Logo -->
            </div>

            <div class="docs-navbar-sidebar-aside-body navbar-sidebar-aside-body">
                <ul id="navbarSettings" class="navbar-nav nav nav-vertical nav-tabs nav-tabs-borderless nav-sm">
                    <li class="nav-item">
                        <span class="nav-subtitle">Dashboard</span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php">Homepage</a>
                    </li>

                    <li class="nav-item my-2 my-lg-5"></li>

                    <li class="nav-item">
                        <span class="nav-subtitle">About us</span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="../admin/edit-mission-vision.php">Mission & Vision</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="../admin/add-core-values.php">Core values</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="../admin/edit-knowledge.php">Edit knowledge</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="../documentation/customization.html">Core competency</a>
                    </li>

                    <li class="nav-item my-2 my-lg-5"></li>

                    <li class="nav-item">
                        <span class="nav-subtitle">Feed industry</span>
                    </li>

                    <?php
                    $conn = new mysqli("localhost", "root", "", "bio");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM article WHERE article_type = 'INDUSTRY' ";
                    $result = $conn->query($sql);
                    ?>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="../admin/edit-feed-industry.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
                        </li>
                    <?php endwhile ?>

                    <li class="nav-item my-2 my-lg-5"></li>
                    <li class="nav-item">
                        <span class="nav-subtitle">Product category</span>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle dropdown-toggle-collapse" href="#snippetsSidebarNavPlantExtractCollapse"
                           role="button" data-bs-toggle="collapse" aria-expanded="false"
                           aria-controls="snippetsSidebarNavPlantExtractCollapse">Plant extract</a>
                        <?php
                        $conn = new mysqli("localhost", "root", "", "bio");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM article WHERE article_type = 'PLANT' ";
                        $result = $conn->query($sql);
                        ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                        <div id="snippetsSidebarNavPlantExtractCollapse" class="nav-collapse collapse ">
                            <a class="nav-link " href="../admin/edit-plant-extract.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
                        </div>
                    </li>
                <?php endwhile ?>


                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle dropdown-toggle-collapse" href="#snippetsSidebarNavNaturalCollapse"
                           role="button" data-bs-toggle="collapse" aria-expanded="false"
                           aria-controls="snippetsSidebarNavNaturalCollapse">Natural antioxidant</a>
                        <?php
                        $conn = new mysqli("localhost", "root", "", "bio");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM article WHERE article_type = 'NATURAL' ";
                        $result = $conn->query($sql);
                        ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                        <div id="snippetsSidebarNavNaturalCollapse" class="nav-collapse collapse ">
                            <a class="nav-link " href="../admin/edit-natural.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
                        </div>
                    </li>
                <?php endwhile ?>

                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle dropdown-toggle-collapse"
                           href="#snippetsSidebarNavPigmentCollapse"
                           role="button" data-bs-toggle="collapse" aria-expanded="false"
                           aria-controls="snippetsSidebarNavPigmentCollapse">Pigment</a>

                        <?php
                        $conn = new mysqli("localhost", "root", "", "bio");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM article WHERE article_type = 'PIGMENT' ";
                        $result = $conn->query($sql);
                        ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                        <div id="snippetsSidebarNavPigmentCollapse" class="nav-collapse collapse ">
                            <a class="nav-link " href="../admin/edit-pigment.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
                        </div>
                    </li>
                <?php endwhile ?>

                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle dropdown-toggle-collapse"
                           href="#snippetsSidebarNavImmuneCollapse" role="button" data-bs-toggle="collapse"
                           aria-expanded="false" aria-controls="snippetsSidebarNavImmuneCollapse">Immune Stimulant</a>

                        <?php
                        $conn = new mysqli("localhost", "root", "", "bio");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM article WHERE article_type = 'IMMUNE' ";
                        $result = $conn->query($sql);
                        ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                        <div id="snippetsSidebarNavImmuneCollapse" class="nav-collapse collapse ">
                            <a class="nav-link " href="../admin/edit-immune.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
                        </div>
                    </li>
                <?php endwhile ?>

                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle dropdown-toggle-collapse"
                           href="#snippetsSidebarNavAlgaeCollapse" role="button" data-bs-toggle="collapse"
                           aria-expanded="false" aria-controls="snippetsSidebarNavAlgaeCollapse">Spirulina and Algae</a>

                        <?php
                        $conn = new mysqli("localhost", "root", "", "bio");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM article WHERE article_type = 'ALGAE' ";
                        $result = $conn->query($sql);
                        ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                        <div id="snippetsSidebarNavAlgaeCollapse" class="nav-collapse collapse ">
                            <a class="nav-link " href="../admin/edit-algae.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
                        </div>
                    </li>
                <?php endwhile ?>

                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle dropdown-toggle-collapse"
                           href="#snippetsSidebarNavPalatabilityCollapse" role="button" data-bs-toggle="collapse"
                           aria-expanded="false" aria-controls="snippetsSidebarNavPalatabilityCollapse">Palatability enhancer</a>

                        <?php
                        $conn = new mysqli("localhost", "root", "", "bio");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM article WHERE article_type = 'PALATABILITY' ";
                        $result = $conn->query($sql);
                        ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                        <div id="snippetsSidebarNavPalatabilityCollapse" class="nav-collapse collapse ">
                            <a class="nav-link " href="../admin/edit-palatability.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
                        </div>
                    </li>
                <?php endwhile ?>

                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle dropdown-toggle-collapse"
                           href="#snippetsSidebarNavBinderCollapse" role="button" data-bs-toggle="collapse"
                           aria-expanded="false" aria-controls="snippetsSidebarNavBinderCollapse">Mycotoxin Binder</a>

                        <?php
                        $conn = new mysqli("localhost", "root", "", "bio");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM article WHERE article_type = 'BINDER' ";
                        $result = $conn->query($sql);
                        ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                        <div id="snippetsSidebarNavBinderCollapse" class="nav-collapse collapse ">
                            <a class="nav-link " href="../admin/edit-binder.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
                        </div>
                    </li>
                <?php endwhile ?>

                    <li class="nav-item ">
                        <a class="nav-link dropdown-toggle dropdown-toggle-collapse"
                           href="#snippetsSidebarNavEmuCollapse" role="button" data-bs-toggle="collapse"
                           aria-expanded="false" aria-controls="snippetsSidebarNavEmuCollapse">Emulsifier</a>

                        <?php
                        $conn = new mysqli("localhost", "root", "", "bio");
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM article WHERE article_type = 'EMULSIFIER' ";
                        $result = $conn->query($sql);
                        ?>
                        <?php while ($row = $result->fetch_assoc()) : ?>
                        <div id="snippetsSidebarNavEmuCollapse" class="nav-collapse collapse ">
                            <a class="nav-link " href="../admin/edit-emulsifier.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
                        </div>
                    </li>
                <?php endwhile ?>


                    <li class="nav-item my-2 my-lg-5"></li>

                    <li class="nav-item">
                        <span class="nav-subtitle">Sustainable development</span>
                    </li>

                    <?php
                    $conn = new mysqli("localhost", "root", "", "bio");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM article WHERE article_type = 'SUSTAINABLE' ";
                    $result = $conn->query($sql);
                    ?>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <li class="nav-item">
                            <a class="nav-link " href="../admin/edit-sustainable.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
                        </li>
                    <?php endwhile ?>

                    <li class="nav-item my-2 my-lg-5"></li>

                    <li class="nav-item">
                        <span class="nav-subtitle">Other</span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="../admin/edit-knowledge.php">Knowledge</a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- End Navbar Collapse -->
    </nav>

    <!-- End Navbar -->

    <!-- Content -->
    <div class="navbar-sidebar-aside-content content-space-1 content-space-md-2 px-lg-5 px-xl-10">
      <!-- Page Header -->
      <div class="docs-page-header">
        <div class="row align-items-center">
          <div class="col-sm">
            <h1 class="docs-page-header-title">Knowledge</h1>
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

                  <form action="knowledge_db.php" method="post" enctype="multipart/form-data">

                    <div class="mb-5">
                      <h4 class="card-title">Image</h4>
                    </div>

                    <!-- Form -->
                    <div class="mb-4">
                      <label for="careersApplyFormFile" class="js-file-attach form-label" data-hs-file-attach-options='{
                                "textTarget": "[for=\"careersApplyFormFile\"]"
                               }'>Select image for upload</label>
                      <input class="form-control" type="file" id="careersApplyFormFile" name="knowledge_Img" required >
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-3">
                      <ul class="nav justify-content-end " id="navTab1" role="tablist">
                        <li class="nav-item">
                          <button type="submit" class="btn btn-primary">
                            <i class=" bi-pencil-square"></i>
                            Upload</button>
                        </li>
                      </ul>
                    </div>
                    <!-- End Form -->
                  </form>

                  <hr class="my-md-7">

                  <div class="mb-5">
                    <h4 class="card-title">List of knowledge</h4>
                  </div>

                  <!-- Table -->
                  <table class="table table-sm">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <td scope="col">NAME</td>
                        <td scope="col">DELETE</td>
                      </tr>
                    </thead>
                    <tbody>

                      <?php

                      $conn = new mysqli("localhost", "root", "", "bio");
                      // Check connection
                      if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                      }

                      $sql = "SELECT * FROM knowledge";
                      $result = $conn->query($sql);

                      ?>

                      <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                          <th scope="row"><?php echo $row['knowledge_id']; ?></th>
                          <th scope="row"><?php echo $row['knowledge_Img']; ?></th>
                          <th style="width: 1rem;">
                              <a
                                 type="button" class="btn btn-soft-danger btn-sm " OnClick="chkConfirm('"<?php echo $row['knowledge_id']; ?>"', '"<?php echo $row['knowledge_Img']; ?>"')">
                                  <i class="bi bi-x-lg"></i>
                              </a>
                          </th>
                        </tr>
                      <?php endwhile ?>

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
    function chkConfirm(i, j)
    {
        if(confirm('Do you want to visit : https://www.thaicreate.com')==true)
        {
            alert('Going to https://www.thaicreate.com');
        }
        else
        {
            window.location.href="knowledge_del.php?id="+i;
           /* href="knowledge_del.php?id="+i;*/
        }
    }

  </script>
</body>

</html>