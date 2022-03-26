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
  <link rel="stylesheet" href="../assets/css/docs.min.css">
</head>

<body class="navbar-sidebar-aside-lg">
  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand navbar-fixed navbar-end navbar-light navbar-sticky-lg-top bg-white">
    <div class="container-fluid">
      <nav class="navbar-nav-wrap">
        <div class="row flex-grow-1">
          <!-- Default Logo -->
          <div class="docs-navbar-sidebar-container d-flex align-items-center mb-2 mb-lg-0">
            <a class="navbar-brand" href="../index.php" aria-label="BioShine">
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
                  <a class="btn btn-primary" href="../index.php">
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

            <li class="nav-item">
               <a class="nav-link " href="../admin/list-social-enterprise.php">Social Enterprise</a>
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

              <li class="nav-item">
                  <a class="nav-link " href="../admin/add-product-category.php">Add category</a>
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

              <li class="nav-item">
                  <a class="nav-link " href="../admin/add-development.php">Add Development</a>
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


              <li class="nav-item my-2 my-lg-5"></li>

              <li class="nav-item">
                  <span class="nav-subtitle">PRODUCT CATEGORY</span>
              </li>

              <li class="nav-item">
                  <a class="nav-link " href="../admin/add-product-category.php">Add category</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link " href="../admin/list-product-cat.php">List category</a>
              </li>


              <?php
              $conn = new mysqli("localhost", "root", "", "bio");
              // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT Type FROM productcategory 
                     WHERE GroupType = 'ProductCategory' ";
              $result = $conn->query($sql);

              ?>
              <?php while ($row = $result->fetch_assoc()) : ?>
                  <li class="nav-item">
                      <a class="nav-link " href="../admin/list-product-cat.php?id=<?php echo $row['Type']; ?>"><?php echo $row['Type']; ?></a>
                  </li>

              <?php endwhile ?>





          </ul>
        </div>
      </div>
      <!-- End Navbar Collapse -->
    </nav>

    <!-- End Navbar -->

    <!-- Content -->
    <div class="navbar-sidebar-aside-content content-space-1 content-space-md-2 px-lg-5 px-xl-10">
      <div class="row justify-content-md-between align-items-md-center mb-10">
        <div class="col-md-6 col-xl-5">

      </div>
      <!-- End Row -->

      <span class="divider-center mb-10 lg-5">Design &amp; Graphics</span>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 mb-6">
        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../admin/edit-mission-vision.php">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-accordion.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Mission & Vision</h4>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->


        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/alerts.html">
              <img class="card-img p-2" src="../assets/svg/design-system/docs-accordion.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Core values</h4>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

          <div class="col mb-4">
              <!-- Card -->
              <a class="card card-sm card-transition h-100" href="../admin/edit-knowledge.php">
                  <img class="card-img p-2" src="../assets/svg/design-system/docs-accordion.svg" alt="Image Description">
                  <div class="card-body">
                      <h4 class="card-title text-inherit">Knowledge</h4>
                  </div>
              </a>
              <!-- End Card -->
          </div>
          <!-- End Col -->

          <div class="col mb-4">
              <!-- Card -->
              <a class="card card-sm card-transition h-100" href="../documentation/alerts.html">
                  <img class="card-img p-2" src="../assets/svg/design-system/docs-accordion.svg" alt="Image Description">
                  <div class="card-body">
                      <h4 class="card-title text-inherit">Core competency</h4>
                  </div>
              </a>
              <!-- End Card -->
          </div>
          <!-- End Col -->


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
          <div class="col mb-4">

              <!-- Card -->
              <a class="card card-sm card-transition h-100" href="../admin/edit-feed-industry.php?id=<?php echo $row['article_id']; ?>">
                  <img class="card-img p-2" src="../assets/svg/design-system/docs-accordion.svg" alt="Image Description">
                  <div class="card-body">
                      <h4 class="card-title text-inherit " ><?= $row['article_Header'] ?></h4>
                  </div>
              </a>
              <!-- End Card -->

          </div>
          <?php endwhile ?>
          <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/badge.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-badge.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Badge</h4>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/breadcrumb.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-breadcrumb.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Breadcrumb</h4>
              <p class="card-text small text-body">Breadcrumbs are a navigation system used to show a user's location in a site or app.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/buttons.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-buttons.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Buttons</h4>
              <p class="card-text small text-body">A button triggers an event or action. They let users know what will happen next.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/cards.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-cards.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Cards</h4>
              <p class="card-text small text-body">A flexible and extensible content container with multiple variants and options.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/collapse.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-collapse.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Collapse</h4>
              <p class="card-text small text-body">Toggle the visibility of content across your project.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/column-divider.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-column-divider.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Column Divider</h4>
              <p class="card-text small text-body">Separate groups of related menu items with a vertical divider.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/devices.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-devices.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Devices</h4>
              <p class="card-text small text-body">Beautifully demonstrate your contents in phone, laptop or tablet device mockups.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/divider.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-divider.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Divider</h4>
              <p class="card-text small text-body">Separate groups of related menu items with a vertical divider.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/dropdowns.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-dropdowns.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Dropdowns</h4>
              <p class="card-text small text-body">A dropdown menu displays a list of actions or options to a user.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/list-group.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-list-group.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">List Group</h4>
              <p class="card-text small text-body">List groups are a flexible and powerful component for displaying a series of content.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/lists.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-lists.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Lists</h4>
              <p class="card-text small text-body">Lists are a flexible and powerful component for displaying a series of content.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/modal.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-modal.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Modal</h4>
              <p class="card-text small text-body">A modal dialog displays content that requires user interaction, in a layer above the page.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/offcanvas.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-offcanvas.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Offcanvas</h4>
              <p class="card-text small text-body">Build hidden sidebars into your project for navigation, shopping carts, and more.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/pagination.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-pagination.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Pagination</h4>
              <p class="card-text small text-body">Pagination allows you to divide large amounts of content into smaller chunks across multiple pages.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/popovers.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-popovers.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Popovers</h4>
              <p class="card-text small text-body">Add Bootstrap popovers, like those found in iOS, to any element on your site.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/progress.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-progress.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Progress</h4>
              <p class="card-text small text-body">Documentation and examples for using custom progress bars.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/shapes.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-shapes.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Shapes</h4>
              <p class="card-text small text-body">Shapes to use as background cover elements.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/sliding-img.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-sliding-img.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Sliding Image</h4>
              <p class="card-text small text-body">Sliding background effect.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/spinners.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-spinners.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Spinners</h4>
              <p class="card-text small text-body">A spinner is an animated spinning icon that lets users know content is being loaded.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/steps.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-steps.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Steps</h4>
              <p class="card-text small text-body">A component that displays content as a process with defined by user milestones.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/tab.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-tab.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Tab</h4>
              <p class="card-text small text-body">Tabbable panes.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/tables.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-tables.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Tables</h4>
              <p class="card-text small text-body">Documentation and examples for opt-in styling of tables with Bootstrap.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/toasts.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-toasts.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Toasts</h4>
              <p class="card-text small text-body">Push notifications to your visitors with a toast.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/tooltips.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-tooltips.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Tooltips</h4>
              <p class="card-text small text-body">A tooltip is a floating, non-actionable label used to explain a user interface element or feature.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/typography.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-typography.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Typography</h4>
              <p class="card-text small text-body">Documentation and examples for Unify typography, including global settings,
                headings, body text, lists, and more.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      </div>
      <!-- End Row -->
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
  </script>
</body>

</html>