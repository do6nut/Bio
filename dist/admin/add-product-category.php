<?php
include 'config.php';
$host=$config['DB_HOST'];
$User=$config['DB_USERNAME'];
$Pass=$config['DB_PASSWORD'];
$dbname=$config['DB_DATABASE'];
?>
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
                    <h1 class="docs-page-header-title">Product category</h1>
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

                                <form action="../admin/insert_db_product_category.php" method="post" enctype="multipart/form-data">

                                    <div class="mb-5">
                                        <h4 class="card-title">Product category</h4>
                                    </div>

                                    <!-- Form -->

                                    <div class="mb-4">
                                        <label class="form-label">Header</label>
                                        <input type="text" class="form-control" name="type" value="" placeholder="" required>
                                    </div>

                                    <!-- End Form -->

                                    <!-- Form -->
                                    <div class="mb-3">
                                        <ul class="nav justify-content-end " id="navTab1" role="tablist">
                                            <li class="nav-item">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class=" bi-plus"></i>
                                                    Add</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Form -->
                                </form>

                                <hr class="my-md-7">

                                <div class="mb-5">
                                    <h4 class="card-title">List of product</h4>
                                </div>

                                <!-- Table -->
                                <table class="table table-sm">
                                    <thead>
                                    <tr>
                                        <th scope="col">Category Type</th>
                                        <td scope="col">Value</td>
                                        <td scope="col">list</td>
                                        <td scope="col">DELETE</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                    $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $sql = "SELECT pc.Type AS Type,COUNT(art.article_type) AS Count
                                            FROM productcategory pc
                                            LEFT JOIN article art
                                            ON pc.Type = art.article_type
                                            WHERE GroupType = 'ProductCategory'                    
                                            GROUP BY pc.Type";
                                    $result = $conn->query($sql);

                                    ?>

                                    <?php while ($row = $result->fetch_assoc()) : ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['Type']; ?></th>
                                            <th style="width: 1rem;"><?php echo $row['Count']; ?></th>
                                            <th style="width: 1rem;">
                                                <a
                                                        type="button" class="btn btn-soft-primary btn-sm "
                                                        class="nav-link " href="../admin/list-product-cat.php?id=<?php echo $row['Type']; ?>">
                                                    <i class="bi bi-list-ul"></i>
                                                </a>
                                            </th>

                                            <th style="width: 1rem;">
                                                <a
                                                        type="button" class="btn btn-soft-danger btn-sm "
                                                        OnClick="chkConfirm('<?php echo $row['Type']; ?>')">
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
    function chkConfirm(i)
    {
        if(confirm('Do you want to delete "'+i+ '" product category')==true)
        {
            window.location.href="del-product-cat.php?id="+i;
        }
        else
        {
            /* href="knowledge_del.php?id="+i;*/
        }
    }

</script>
</body>

</html>