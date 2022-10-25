<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ./index.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: ./index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<!--<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>-->

<html lang="en" dir="">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Log In | Bio Shine</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./BS.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

    <!-- CSS Unify Template -->
    <link rel="stylesheet" href="../assets/css/theme.min.css">
</head>

<body class="d-flex align-items-center min-h-100 bg-dark">
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="flex-grow-1 overflow-hidden">
    <!-- Content -->
    <div class="container content-space-t-1 content-space-b-2">
        <div class="mx-lg-auto" style="max-width: 55rem;">
            <!--        <div class="d-flex justify-content-center align-items-center flex-column min-vh-lg-100">-->
            <div class=" justify-content-center align-items-center flex-column ">

                <div class="wrapper">
                    <h2>Login</h2>
                    <p>Please fill in your credentials to login.</p>
                    <?php
                    if(!empty($login_err)){
                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                    }
                    ?>

                    <div class="position-relative">
                        <!-- Card -->
                        <div class="card card-shadow card-login">
                            <!-- ========== HEADER ========== -->
                            <header id="header" class="navbar navbar-height navbar-light mb-3">
                                <div class="container">
                                    <a class="navbar-brand mx-auto" href="../index.php" >
                                        <img class="navbar-brand-logo" src="../assets/img/logo/BS.png" alt="Image Description">
                                    </a>
                                </div>
                            </header>
                            <!-- ========== END HEADER ========== -->
                            <div class="row">
                                <div class="card-body">
                                    <!-- Form -->
                                <form class="js-validate needs-validation"
                                      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                      method="post" novalidate>
                <!--                    <div class="form-group">-->
                                    <div class="mb-4">
                                        <label class="form-label" >Username</label>
                                        <input type="text" name="username"
                                               class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                                               value="<?php echo $username; ?>">
                                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                    </div>
                <!--                    <div class="form-group ">-->
                                   <div class="mb-8">
                                       <label class="form-label" tabindex="0">Password</label>

                                       <div class="input-group-merge">
<!--                                        <label>Password</label>-->
                                        <input type="password" name="password"
                                               class="js-toggle-password form-control form-control-lg <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                        </div>
                                   </div>

                                    <div class="form-group d-grid gap-4">
                                        <input type="submit" class="btn btn-primary" value="Login">
                                    </div>
                            </form>
                                    <!-- End Form -->
                        </div>
                    </div>
                            <!-- End Row -->
                </div>
            </div>
         </div>
     </div>
    </div>
</div>
        <!-- End Content -->
</main>

<!-- JS Plugins Init. -->
<script>
    (function() {
        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        HSBsValidation.init('.js-validate', {
            onSubmit: data => {
                data.event.preventDefault()
            }
        })


        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password')
    })()
</script>
</body>
</html>