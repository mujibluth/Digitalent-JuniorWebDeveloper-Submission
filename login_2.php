<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta content="Abdul Mujiburrohman Luthfi" name="author">
  <meta content="KeyMoto - Perushaan Motor dan Persewaan" name="description">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true">
  <meta name="format-detection" content="telephone=no">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">

  <title>Kontak &mdash; Perusahaan KeyMoto</title>
  <link rel="shortcut icon" href="assets/img/favicon.svg" type="image/x-icon">

  <link rel="stylesheet" href="assets/css/uikit.min.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/slick-theme.css">
  <link rel="stylesheet" href="assets/css/ion.rangeSlider.css">
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="page-contacts">
  <?php
    // Start the session
    session_start();

    // Initialize response message
    $response = "";

    // Check if the user has just logged in or logged out
    if(isset($_GET['login'])) {
        if($_GET['login'] == 'success') {
            $response = "Login successful.";
        } else if($_GET['login'] == 'failure') {
            $response = "Login failed. Invalid username or password.";
        }
    } else if(isset($_GET['logout'])) {
        if($_GET['logout'] == 'success') {
            $response = "You have been logged out successfully.";
        } else if($_GET['logout'] == 'failure') {
            $response = "There was a problem logging you out.";
        }
    }

    // Check if the user is logged in
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        echo '<a href="logout.php">Logout</a>';
    } else {
  ?>
  <div class="page-wrapper">
    <header class="page-header page-header-transparent">
      <?php 
        include "header.php";
      ?>
    </header>
    <main class="page-main">
    <div class="section-hero">
        <div class="section-hero__bg" style="background-image: url(assets/img/img-home-slideshow.jpg)">
          <div class="uk-container">
            <div class="section-hero__content">
              <div class="section-hero__title"> <span>Membawa perjalanan ke tingkat yang lebih baru</span>
                <div class="uk-h1">Halaman Tentang</div>
              </div>
              <div class="section-hero__breadcrumb">
                <ul class="uk-breadcrumb">
                  <li><a href="#">Beranda</a></li>
                  <li> <span>Login</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content">
        <div class="uk-section-large uk-container">
        <h1 id="respons-form"><?php echo $response; ?></h1>
          <div class="contact-form">
            <div class="section-title uk-text-center"><img src="assets/img/logo-dark.svg" alt=""><span>Membawa perjalanan ke tingkat yang lebih baru</span>
              <h3 class="uk-h2">Silahkan masuk untuk akses fitur</h3>
            </div>
            <div class="section-content">
              <form action="authentication.php" name="f1" onsubmit = "return validation()" method = "POST">
                <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                  <div><input class="uk-input uk-form-large" type="text" placeholder="Username" id="user" name="user"></div>
                  <div><input class="uk-input uk-form-large" type="text" placeholder="Password" id="pass" name="pass"></div>
                  <div class="uk-margin-medium-top uk-width-1-1 uk-text-center">
                    <button class="uk-button uk-button-danger uk-button-large" type="submit" id="btn" value="Login">Login</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <footer class="page-footer">
      <?php
      include "footer.php";
      ?>
    </footer>
      
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/uikit.min.js"></script>
  <script src="assets/js/uikit-icons.min.js"></script>
  <script src="assets/js/fontawesome.all.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/ion.rangeSlider.min.js"></script>
  <script src="assets/js/main.js"></script>
  <?php
  }
  ?>
</body>

</html>