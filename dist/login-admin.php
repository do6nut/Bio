<!DOCTYPE html>
<html lang="en" dir="">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Log In | Unify - Multipurpose Responsive Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <!-- CSS Unify Template -->
  <link rel="stylesheet" href="./assets/css/theme.min.css">
</head>

<body class="d-flex align-items-center min-h-100 bg-dark">
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="flex-grow-1 overflow-hidden">
    <!-- Content -->
    <div class="container content-space-t-1 content-space-b-2">
      <div class="mx-lg-auto" style="max-width: 55rem;">
<!--        <div class="d-flex justify-content-center align-items-center flex-column min-vh-lg-100">-->
            <div class=" justify-content-center align-items-center flex-column ">
          <!-- ========== HEADER ========== -->
          <header id="header" class="navbar navbar-height navbar-light mb-3">
            <div class="container">
              <a class="navbar-brand mx-auto" href="./index.html" aria-label="Unify">
                <img class="navbar-brand-logo" src="./assets/img/logo/BS.png" alt="Image Description">
              </a>
            </div>
          </header>
          <!-- ========== END HEADER ========== -->

          <div class="position-relative">
            <!-- Card -->
            <div class="card card-shadow card-login">
              <div class="row">
                  <div class="card-body">
                    <!-- Form -->
                    <form class="js-validate needs-validation" novalidate>

                      <!-- Form -->
                      <div class="mb-4">
                        <label class="form-label" for="signinSrEmail">Your email</label>
                        <input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail" tabindex="1" placeholder="email@address.com" aria-label="email@address.com" required>
                        <span class="invalid-feedback">Please enter a valid email address.</span>
                      </div>
                      <!-- End Form -->

                      <!-- Form -->
                      <div class="mb-8">
                        <label class="form-label" for="signupSrPassword" tabindex="0">Password</label>

                        <div class="input-group-merge">
                          <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8"
                                 data-hs-toggle-password-options='{
                                   "target": "#changePassTarget",
                                   "defaultClass": "bi-eye-slash",
                                   "showClass": "bi-eye",
                                   "classChangeTarget": "#changePassIcon"
                                 }'>
                          <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
                            <i id="changePassIcon" class="bi-eye"></i>
                          </a>

                          <span class="invalid-feedback">Please enter a valid password.</span>
                        </div>
                      </div>
                      <!-- End Form -->

                      <div class="d-flex justify-content-end mb-4">
                        <a class="form-label-link" href="./page-reset-password.html">Forgot Password?</a>
                      </div>

                      <div class="d-grid gap-4">
                        <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
                        <p class="card-text text-muted">Don't have an account yet? <a class="link" href="./page-signup.html">Sign up here</a></p>
                      </div>
                    </form>
                    <!-- End Form -->
                  </div>
              </div>
              <!-- End Row -->
            </div>
            </div>
            <!-- End Card -->
          </div>
        </div>
      </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>

  <!-- JS Unify -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF TOGGLE PASSWORD
      // =======================================================
      new HSTogglePassword('.js-toggle-password')
    })()
  </script>
</body>
</html>
