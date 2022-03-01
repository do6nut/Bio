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
                    <i class="bi-eye me-1"></i> Preview Website
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
              <a class="nav-link " href="../admin/getting-started.html">Mission & Vision</a>
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

            $sql = "SELECT * FROM article";
            $result = $conn->query($sql);

            ?>

            <?php while ($row = $result->fetch_assoc()) : ?>

              <li class="nav-item">
                <a class="nav-link " href="../admin/edit-core-values.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
              </li>

            <?php endwhile ?>



            <li class="nav-item my-2 my-lg-5"></li>

            <li class="nav-item">
              <span class="nav-subtitle">Product category</span>
            </li>

            <li class="nav-item ">
              <a class="nav-link dropdown-toggle dropdown-toggle-collapse" href="#snippetsSidebarNavPlantExtractCollapse" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="snippetsSidebarNavPlantExtractCollapse">Plant extract</a>

              <div id="snippetsSidebarNavPlantExtractCollapse" class="nav-collapse collapse ">
                <a class="nav-link " href="features-general.html">AV3</a>
                <a class="nav-link " href="features-stats.html">Emanox</a>
                <a class="nav-link " href="features-step.html">Kerlait</a>
                <a class="nav-link " href="features-navs.html">Prodol</a>
                <a class="nav-link " href="features-navs.html">Silagreen / Flavotan</a>
                <a class="nav-link " href="features-navs.html">Fan+F4</a>
                <a class="nav-link " href="features-navs.html">Red protect</a>
                <a class="nav-link " href="features-navs.html">KIG</a>
                <a class="nav-link " href="features-navs.html">KOD</a>
              </div>
            </li>

            <li class="nav-item ">
              <a class="nav-link dropdown-toggle dropdown-toggle-collapse" href="#snippetsSidebarNavNaturalCollapse" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="snippetsSidebarNavNaturalCollapse">Natural antioxidant</a>

              <div id="snippetsSidebarNavNaturalCollapse" class="nav-collapse collapse ">
                <a class="nav-link " href="features-general.html">Arresto Liquithox</a>
                <a class="nav-link " href="features-stats.html">Arresto Rethox</a>
                <a class="nav-link " href="features-step.html">Arresto Acidox</a>
                <a class="nav-link " href="features-navs.html">Arresto 1.5 Conc.</a>
                <a class="nav-link " href="features-navs.html">Oxabiol Premium</a>
                <a class="nav-link " href="features-navs.html">Oxabiol blends</a>
              </div>
            </li>

            <li class="nav-item ">
              <a class="nav-link dropdown-toggle dropdown-toggle-collapse" href="#snippetsSidebarNavPigmentCollapse" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="snippetsSidebarNavPigmentCollapse">Pigment</a>

              <div id="snippetsSidebarNavPigmentCollapse" class="nav-collapse collapse ">
                <a class="nav-link " href="features-general.html">BS Leader yellow 2%</a>
                <a class="nav-link " href="features-stats.html">BS Leader red 1%</a>
                <a class="nav-link " href="features-step.html">Leader Golden 50 EXT</a>
                <a class="nav-link " href="features-navs.html">Leader Pink 100 EXT</a>
                <a class="nav-link " href="features-navs.html">Leader Red 100 EXT</a>
              </div>
            </li>

            <li class="nav-item ">
              <a class="nav-link dropdown-toggle dropdown-toggle-collapse" href="#snippetsSidebarNavImmuneCollapse" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="snippetsSidebarNavImmuneCollapse">Immune Stimulant</a>

              <div id="snippetsSidebarNavImmuneCollapse" class="nav-collapse collapse ">
                <a class="nav-link " href="features-general.html">Biolex MB 40</a>
                <a class="nav-link " href="features-stats.html">Beta S</a>
                <a class="nav-link " href="features-step.html">Cefi Pro</a>
                <a class="nav-link " href="features-navs.html">Leiber YeaFi</a>
              </div>
            </li>

            <li class="nav-item ">
              <a class="nav-link dropdown-toggle dropdown-toggle-collapse" href="#snippetsSidebarNavAlgaeCollapse" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="snippetsSidebarNavAlgaeCollapse">Spirulina and Algae</a>

              <div id="snippetsSidebarNavAlgaeCollapse" class="nav-collapse collapse ">
                <a class="nav-link " href="features-navs.html">Biomega-Tech® HA</a>
                <a class="nav-link " href="features-navs.html">Spirulina</a>
                <a class="nav-link " href="features-step.html">Antenna</a>
                <a class="nav-link " href="features-navs.html">Nutaste ® Profile</a>
              </div>
            </li>

            <li class="nav-item ">
              <a class="nav-link dropdown-toggle dropdown-toggle-collapse" href="#snippetsSidebarNavPalatabilityCollapse" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="snippetsSidebarNavPalatabilityCollapse">Palatability enhancer</a>

              <div id="snippetsSidebarNavPalatabilityCollapse" class="nav-collapse collapse ">
                <a class="nav-link " href="features-step.html">Antenna</a>
                <a class="nav-link " href="features-navs.html">Nutaste ® Profile</a>
                <a class="nav-link " href="features-navs.html">Nutaste ® Function</a>
              </div>
            </li>

            <li class="nav-item ">
              <a class="nav-link dropdown-toggle dropdown-toggle-collapse" href="#snippetsSidebarNavBinderCollapse" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="snippetsSidebarNavBinderCollapse">Mycotoxin Binder</a>

              <div id="snippetsSidebarNavBinderCollapse" class="nav-collapse collapse ">
                <a class="nav-link " href="features-step.html">Detoxizyme</a>
                <a class="nav-link " href="features-navs.html">Detoxizyme Conc.</a>
              </div>
            </li>

            <li class="nav-item ">
              <a class="nav-link dropdown-toggle dropdown-toggle-collapse" href="#snippetsSidebarNavEmuCollapse" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="snippetsSidebarNavEmuCollapse">Emulsifier</a>

              <div id="snippetsSidebarNavEmuCollapse" class="nav-collapse collapse ">
                <a class="nav-link " href="features-step.html">Liposorb P</a>
                <a class="nav-link " href="features-navs.html">Liposorb DS</a>
              </div>
            </li>

            <li class="nav-item my-2 my-lg-5"></li>

            <li class="nav-item">
              <span class="nav-subtitle">Sustainable development</span>
            </li>


            <li class="nav-item">
              <a class="nav-link " href="../documentation/accordion.html">Technical support</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="../documentation/alerts.html">Business development</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="../documentation/avatars.html">Product development</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="../documentation/badge.html">Research development and innovation center</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="../documentation/breadcrumb.html">Quality control and assurance</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="../documentation/buttons.html">Product registration</a>
            </li>

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
      <div class="row justify-content-md-between align-items-md-center mb-10">
        <div class="col-md-6 col-xl-5">
          <div class="mb-4">
            <h1 class="mb-3" style="font-size: 3rem;">Boost <span class="text-primary text-highlight-warning">your idea</span> with native components.</h1>
            <p class="lead">Components are the reusable building blocks of our design system to create patterns and intuitive user experiences.</p>
          </div>

          <div class="d-flex flex-wrap gap-2">
            <!-- Card -->
            <div class="card card-sm card-borderless bg-soft-secondary text-center rounded" style="min-width: 8rem;">
              <div class="card-body">
                <h2 class="h1 fw-normal mb-1">45</h2>
                <span class="small text-cap mb-0">Components</span>
              </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card card-sm card-borderless bg-soft-secondary text-center rounded" style="min-width: 8rem;">
              <div class="card-body">
                <h2 class="h1 fw-normal mb-1">20</h2>
                <span class="small text-cap mb-0">Plugins</span>
              </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card card-sm card-borderless bg-soft-secondary text-center rounded" style="min-width: 8rem;">
              <div class="card-body">
                <h2 class="h1 fw-normal mb-1">500+</h2>
                <span class="small text-cap mb-0">Combinations</span>
              </div>
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Col -->

        <div class="col-md-6 col-xl-6">
          <img class="img-fluid" src="../assets/svg/illustrations/oc-project-development.svg" alt="Image Description">
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <span class="divider-center text-cap mb-8">Design &amp; Graphics</span>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 mb-6">
        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/bs-icons.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-bs-icons.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Bootstrap Icons</h4>
              <p class="card-text small text-body">Free, high quality, open source icon library with over 1,300 icons. Include them anyway you like—SVGs, SVG sprite, or web fonts.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <span class="divider-center text-cap mb-8">Components</span>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 mb-6">
        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/accordion.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-accordion.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Accordion</h4>
              <p class="card-text small text-body">Vertically collapsing accordions.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->


        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/alerts.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-alerts.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Alerts</h4>
              <p class="card-text small text-body">An alert lets users know when important information is available or when an action is required.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/avatars.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-avatars.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Avatars</h4>
              <p class="card-text small text-body">An avatar is a visual representation of a user or entity.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/badge.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-badge.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Badge</h4>
              <p class="card-text small text-body">A badge is a visual indicator for numeric values such as tallies and scores.</p>
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

      <span class="divider-center text-cap mb-8">Navbars</span>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 mb-6">
        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/navbar.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-navbar.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Header (navbar)</h4>
              <p class="card-text small text-body">Powerful and responsive navigation header, the navbar.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/navs.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-navs.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Navs</h4>
              <p class="card-text small text-body">Documentation and examples for how to use navigation components.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/mega-menu.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-mega-menu.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Mega Menu</h4>
              <p class="card-text small text-body">A powerful, and responsive navigation mega menu.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/scrollspy.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-scrollspy.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Scrollspy</h4>
              <p class="card-text small text-body">Automatically update Unify navigation or list group components based on scroll position to indicate which link is currently active in the viewport.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <span class="divider-center text-cap mb-8">Basic forms</span>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 mb-6">
        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/basic-forms.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-basic-forms.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Basic Forms</h4>
              <p class="card-text small text-body">Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/checks-and-switches.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-checks-and-switches.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Checks &amp; Switches</h4>
              <p class="card-text small text-body">A checkbox is an input control that allows a user to select one or more options from a number of choices.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/input-group.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-input-group.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Input Group</h4>
              <p class="card-text small text-body">Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <span class="divider-center text-cap mb-8">Media</span>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 mb-6">
        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/fslightbox.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-fslightbox.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Fullscreen Lightbox</h4>
              <p class="card-text small text-body">Simple and powerful lightbox for displaying photos, HTML5 or YouTube videos in clean overlaying box.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/swiper.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-swiper.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Swiper</h4>
              <p class="card-text small text-body">Most modern mobile touch slider.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <span class="divider-center text-cap mb-8">Others</span>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5">
        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/sticky-block.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-sticky-block.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Sticky Block</h4>
              <p class="card-text small text-body">This is for making any block floating on your page.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/countdown.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-countdown.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Countdown</h4>
              <p class="card-text small text-body">A simple JavaScript API for producing an accurate, intuitive description of the timespan between two Date instances.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col mb-4">
          <!-- Card -->
          <a class="card card-sm card-transition h-100" href="../documentation/go-to.html">
            <img class="card-img p-2" src="../assets/svg/design-system/docs-go-to.svg" alt="Image Description">
            <div class="card-body">
              <h4 class="card-title text-inherit">Go To</h4>
              <p class="card-text small text-body">Smooth scroll back to the top of the page.</p>
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
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
  <script src=".../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src=".../assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src=".../assets/vendor/list.js/dist/list.min.js"></script>
  <script src=".../assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src=".../assets/vendor/prism/prism.js"></script>

  <!-- JS Unify -->
  <script src=".../assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()

      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')
    })()
  </script>
</body>

</html>