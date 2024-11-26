<?php include("Admin/includes/function.php"); ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Embracerwanda - Home</title>
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
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/")+1);
// ===================================================================================
$cards = mysqli_query($con, "SELECT * FROM `cards` WHERE `status`='Posted'");
$cards_count = mysqli_num_rows($cards);

$aderts = mysqli_query($con, "SELECT * FROM `advert` WHERE `status`='Posted'");
$comments = mysqli_query($con, "SELECT * FROM `comments` WHERE `status`='Posted' LIMIT 5");

$upcomings = mysqli_query($con, "SELECT * FROM `upcoming` WHERE `status`='Posted'");
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
    .about .row:nth-child(even) .img-col {
        order: 2;
    }
    .about .row:nth-child(even) .text-col {
        order: 1;
    }
</style>
<nav class="navbar navbar-expand-lg shadow" data-bs-theme="dark" style="background:white">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo.png" style="width:170px;height:50px;mix-blend-mode:multiply"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background-color:#c5722b"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                   <a class="nav-link <?= $page == 'index.php' ? 'active':'';?>" aria-current="page" href="index">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link <?= $page == 'aboutUs.php' ? 'active':'';?>" href="aboutUs">About Us</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link <?= $page == 'missionVision.php' ? 'active':'';?>" href="missionVision">Mission & Vision</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link <?= $page == 'contactUs.php' ? 'active':'';?>" href="contactUs">Contact Us</a>
                </li>
                <li class="nav-item">
                   <a class="btn text-white" style="background:#c5722b" href="donate">Donate</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
