<?php
    include 'config.php';
        $host=$config['DB_HOST'];
        $User=$config['DB_USERNAME'];
        $Pass=$config['DB_PASSWORD'];
        $dbname=$config['DB_DATABASE'];
?>
<!-- Navbar -->
<nav class="js-nav-scroller navbar navbar-expand-lg navbar-sidebar navbar-vertical navbar-light bg-white border-end" data-hs-nav-scroller-options='{
            "type": "vertical",
            "target": ".navbar-nav .active",
            "offset": 80
           }'>
    <!-- Navbar Toggle -->
    <div class="d-grid flex-grow-1 px-2">
        <button type="button" class="navbar-toggler btn btn-white" data-bs-toggle="collapse"
                data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false"
                aria-controls="navbarVerticalNavMenu">
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
                <li class="nav-item">
                    <a class="nav-link" href="../admin/list-banner.php">Banner</a>
                </li>

                <li class="nav-item my-2 my-lg-5"></li>

                <li class="nav-item">
                    <span class="nav-subtitle">About us</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-mission-vision.php">Mission & Vision</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-core-value.php">Core values</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-core-competency.php">Core competency</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/list-social-enterprise.php">Social Enterprise</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/list-feature-post.php">Feature Post</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/list-customer-feedback.php">Customer and social feedback</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/list-contact-us.php">Contact us</a>
                </li>

                <li class="nav-item my-2 my-lg-5"></li>

                <li class="nav-item">
                    <span class="nav-subtitle">Feed industry</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-feed-industry.php?id=17">POULTRY INDUSTRY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-feed-industry.php?id=18">SWINE INDUSTRY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-feed-industry.php?id=19">AQUACULTURE INDUSTRY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-feed-industry.php?id=20">DAIRY & BEEF INDUSTRY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-feed-industry.php?id=21">PET INDUSTRY</a>
                </li>

                <li class="nav-item">
                    <span class="nav-subtitle">Food industry</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-feed-industry.php?id=119">Food supplement  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-feed-industry.php?id=120">Branding creation and OEM product</a>
                </li>

                <li class="nav-item my-2 my-lg-5"></li>

                <li class="nav-item">
                    <span class="nav-subtitle">Sustainable development</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/add-development.php">Add Development</a>
                </li>

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
                    <li class="nav-item">
                        <a class="nav-link " href="../admin/edit-feed-industry.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
                    </li>
                <?php endwhile ?>

                <li class="nav-item my-2 my-lg-5"></li>

                <li class="nav-item">
                    <span class="nav-subtitle">Other</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-knowledge.php">Knowledge</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-animal-cate.php?id=135">Modern</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/edit-animal-cate.php?id=136">Case Study</a>
                </li>

                <li class="nav-item my-2 my-lg-5"></li>

                <li class="nav-item">
                    <span class="nav-subtitle">PRODUCT CATEGORY</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/add-product-category.php">Add category</a>
                </li>

                <?php

                $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM productcategory WHERE GroupType = 'ProductCategory' ORDER BY Type ASC ";
                $result = $conn->query($sql);

                ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <li class="nav-item">
                        <a class="nav-link " href="../admin/list-product-cat.php?id=<?php echo $row['Type']; ?>"><?php echo $row['Type']; ?></a>
                    </li>
                <?php endwhile ?>


                <li class="nav-item my-2 my-lg-5"></li>

                <li class="nav-item">
                    <span class="nav-subtitle">Animal</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="../admin/add-animal-cate.php">Add Animal</a>
                </li>

                <?php

                $sql = "SELECT * FROM article WHERE article_type = 'Animal' ORDER BY article_header ASC ";
                $result = $conn->query($sql);

                ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <li class="nav-item">
                        <a class="nav-link " href="../admin/edit-animal-cate.php?id=<?php echo $row['article_id']; ?>"><?php echo $row['article_Header']; ?></a>
                    </li>
                <?php endwhile ?>


        </div>
    </div>
    <!-- End Navbar Collapse -->
</nav>

<!-- End Navbar -->