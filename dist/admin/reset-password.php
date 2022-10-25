<?php
// Initialize the session
session_start();

// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
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
            <div class=" justify-content-center align-items-center flex-column ">
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
                                <div class="wrapper">
                                    <h2>Reset Password</h2>
                                    <p>Please fill out this form to reset your password.</p>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="form-group mb-4">
                                            <label>New Password</label>
                                            <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                                            <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                                        </div>
                                        <div class="form-group mb-8">
                                            <label>Confirm Password</label>
                                            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                                            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                                        </div>
                                        <div class="form-group d-grid gap-4">
                                            <input type="submit" class="btn btn-primary" value="Submit">
                                            <a class="btn btn-link ml-2" href="./index.php">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>