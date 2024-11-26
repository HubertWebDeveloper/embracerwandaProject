<?php include("Admin/includes/function.php"); ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Embracerwanda - Login</title>
  <link rel="shortcut icon" href="images/logo1.png" />
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <!-- inject:css -->
  <link rel="stylesheet" href="style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="logo.png" /> -->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- -------- slick slide --------- -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <!-- using alertify js message -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</head>
<style>
  .accordion-button {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .strong-text {
    display: -webkit-box;
    -webkit-line-clamp: 7;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
</style>
<body>
<?php
if (isset($_SESSION["success"])) {
    ?>
    <script type="text/javascript">
        alertify.set('notifier', 'position', 'top-right');
        alertify.success('<?= $_SESSION["success"] ?>');
    </script>
    <?php
    // Clear the session message after displaying it
    unset($_SESSION["success"]);
}
// Danger message
if (isset($_SESSION["danger"])) {
    ?>
    <script type="text/javascript">
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('<?= $_SESSION["danger"] ?>');
    </script>
    <?php
    unset($_SESSION["danger"]);
}
// Warning message
if (isset($_SESSION["warning"])) {
    ?>
    <script type="text/javascript">
        alertify.set('notifier', 'position', 'top-right');
        alertify.warning('<?= $_SESSION["warning"] ?>');
    </script>
    <?php
    unset($_SESSION["warning"]);
}
?>
<style>
    .navbar-nav .nav-item .nav-link{
        color:darkgrey;
    }
    .navbar-nav .nav-item .nav-link:hover,
    .navbar-nav .nav-item .nav-link.active{
        color: #c5722b;
        font-weight:bold;
    }
</style>

<div class="py-5 mt-4">
    <div class="container mt-4">
        <div class="row shadow justify-content-center">
            <div class="col-md-6 bg-light">
                <div class="row rounded-4 mt-4 mb-4">
                    <div class="text-center">

                        <div class="row">
                            <?php
                            $currentHour = (int)date("H");
                            if (($currentHour >= 0) && ($currentHour < 12))
                            {?>
                                <h5 style="color: #c5722b; font-weight: bold" class="textAnimation" id="h5">Good Morning !</h5>
                                <p style="color: #c5722b">Login to continue to Embrace Rwanda Portal.</p>
                                <?php
                            }
                            else if (($currentHour >= 12) && ($currentHour < 17))
                            {?>
                                <h5 style="color: #c5722b; font-weight: bold" class="textAnimation" id="h5">Good Afternoon !</h5>
                                <p style="color: #c5722b">Login to continue to Embrace Rwanda Portal.</p>
                                <?php
                            }
                            else
                            {?>
                                <h5 style="color: #c5722b; font-weight: bold" class="textAnimation" id="h5">Good Evening !</h5>
                                <p style="color: #c5722b">Login to continue to Embrace Rwanda Portal.</p>
                                <?php
                            }
                            ?>

                        </div>

                        <img src="images/logo.png" alt="" height="150" width="60%" style="mix-blend-mode: multiply;">

                        <div class="text-center mt-3 mb-3">
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear())</script> &copy; Designed by <a href="#" class="text-decoration-none" style="color: #c5722b">HubertDeveloper</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="background:#c5722b">
                <div class="row rounded-4 mt-4 mb-4">
                    <div class="text-center">
                        <form class="row" action="EditCode.php" method="POST">
                            <div class="col-md-12 mb-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="username"><i class="fa fa-envelope" style="margin-right:5px"></i> Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="password"><i class="fa fa-envelope" style="margin-right:5px"></i> Password</label>
                                    <input type="Password" class="form-control" name="userpassword" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 text-center">
                                <input class="form-check-input" type="checkbox" value="" id="customControlInline">
                                <label class="form-check-label" for="customControlInline">
                                    Remember Me!
                                </label>
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" name="login" class="btn w-100" style="background: #103b4d;color: white">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer" style="background:#c5722b">
    <div class="container" style="padding:20px 0">
        <div class="footer__inner">
            <div class="footer__item">
            <!-- after make an action target="_blank" -->
                <form action="#" method="post">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div class="form-group">
                            <h5 class="mb-1 text-white">Learn More About Embrace Rwanda</h5>
                            <div class="form-text mt-0 text-white">
                                Embrace Rwanda is a grassroots community development partnership between Canada and Rwanda.
                                Embrace Rwanda provides a remarkable example of how developing relationships,
                                establishing partnerships and building on the strengths and resilience of a 
                                very vulnerable population has created an environment for healing and growth</div>
                        </div>
                        <div class="d-flex align-items-start">
                            <button class="btn" type="submit" style="margin-right:5px;background:#eeb351;color:white">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button class="btn" type="submit" style="margin-right:5px;background:#eeb351;color:white">
                                <i class="fab fa-instagram"></i>
                            </button>
                            <button class="btn" type="submit" style="margin-right:5px;background:#eeb351;color:white">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button class="btn" type="submit" style="margin-right:5px;background:#eeb351;color:white">
                                <i class="fab fa-whatsapp"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <hr style="color:white">
            <div class="footer__item d-lg-flex justify-content-lg-between align-items-lg-center">
                <ul id="menu-seller-footer" class="nav sub-nav footer__sub-nav">
                    <li class="nav-item">
                       <a class="nav-link text-light" aria-current="page" href="#">Mission&Vision</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link text-light" aria-current="page" href="#">About-Us</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link text-light" aria-current="page" href="ContactUs.php">Contact-Us</a>
                    </li>
                </ul>
                <p class="hidden-sm-down d-none d-lg-block text-secondary">Developed and Designed By <a href="#" class="text-light">Hubert Developer.</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- --------- slick slide -------- -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>

