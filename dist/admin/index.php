<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

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
    <link rel="stylesheet" href="../assets/css/docs.min.css">
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
        <div class="row justify-content-md-between align-items-md-center mb-10">
            <div class="col-md-6 col-xl-5">

            </div>
            <!-- End Row -->

            <span class="divider-center mb-10 lg-5">Design &amp; Graphics</span>
            <?php

            $conn = new mysqli("$host", "$User", "$Pass", "$dbname");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $id = 17;

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }

            $sql = "SELECT * FROM article ORDER BY article_Timestamp desc LIMIT 15";
            $result = $conn->query($sql);

            ?>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-5 mb-6">
                <?php while ($row = $result->fetch_assoc()) : ?>
                <div class="col mb-4">
                    <!-- Card -->
                    <a class="card card-sm card-transition h-100" href="../admin/edit-social-enterprise.php?id=<?php echo $row['article_id']; ?>">
                        <img class="card-img p-2" src="../assets/svg/design-system/docs-accordion.svg" alt="Image Description">
                        <div class="card-body">
                            <h4 class="card-title text-inherit"><?php echo $row['article_Header']; ?></h4>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
                <?php endwhile ?>

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