<?php
header('Access-Control-Allow-Origin: http://localhost:8080');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.net/dunzo/template/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2024 05:28:09 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dunzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Dunzo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <!-- topimage domain -->
    <link rel="icon" href="<?php echo base_url(); ?>/assets/images/logo/vector1@3x.png" type="image/x-icon">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/logo/vector1@3x.png" type="image/x-icon">
    <title>OptionBails- Admin Pannel</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Outfit:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/vendors/owlcarousel.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css" rel="stylesheet">
</head>

<body>
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <?php require_once('header.php'); ?>
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <?php require_once('sidebar.php'); ?>
            <!-- Page Sidebar Start-->
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6 ps-0">
                                <h3>INSERT FORM</h3>
                            </div>
                            <div class="col-sm-6 pe-0">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">
                                            <svg class="stroke-icon">
                                                <use href="https://admin.pixelstrap.net/dunzo/assets/svg/icon-sprite.svg#stroke-home"></use>
                                            </svg></a></li>
                                    <li class="breadcrumb-item">Pages</li>
                                    <li class="breadcrumb-item active">insert Page</li>
                                </ol>

                            </div>



                            <div class="col-md-12" >
                                <div class="card" style="margin-top: 30px;">
                                    <!-- <div class="card-header pb-0">
                                      
                                            <div class="col-md-6">
                                                    <label class="form-label" for="index_name">Team Name</label>
                                                    <input class="form-control" id="team_name" name="team_name" type="text" placeholder="Enter Your team Name">
                                                </div>
                                    </div> -->
                                    <div class="card-body" >
                                        <div class="card-wrapper border rounded-3">
                                            <form class="row g-3 " action="<?= site_url('indice/insert') ?>" method="POST">
                                                <div class="col-md-6">
                                                    <label class="form-label" for="index_name">Index Name</label>
                                                    <input class="form-control" id="index_name" name="index_name" type="text" placeholder="Enter Your Index Name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="index_value">Index Value</label>
                                                    <input class="form-control" id="index_value" name="index_value" type="text" placeholder="Enter Your Index Value">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="index_subvalue">Index SubValue</label>
                                                    <input class="form-control" id="index_subvalue" type="text" placeholder="Enter Your Index SubValue">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="match_id">Match ID</label>
                                                    <input class="form-control" id="match_id" type="text" placeholder="Enter Your Match ID">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="start_date">Start Date</label>
                                                    <input class="form-control" id="start_date" type="date" placeholder="Enter Your Start Date">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="end_date">End Date</label>
                                                    <input class="form-control" id="end_date" type="date" placeholder="Enter Your End Date">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="start_time">Start Time</label>
                                                    <input class="form-control" id="start_time" type="time" placeholder="Enter Your Strat Time">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="end_time">End Time</label>
                                                    <input class="form-control" id="end_time" type="time" placeholder="Enter Your End Time">
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check checkbox-checked">
                                                        <input class="form-check-input" id="gridCheck1" type="checkbox">
                                                        <label class="form-check-label" for="gridCheck1">Check me out</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary" type="submit">INSERT </button>
                                                    <a href="<?= base_url("createIndices")?>"> <button class="btn btn-primary" type="submit">BACK </button></a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                </div>

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">


                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <?php require_once('footer.php'); ?>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/sidebar-pin.js"></script>
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/header-slick.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
</body>

<!-- Mirrored from admin.pixelstrap.net/dunzo/template/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2024 05:28:09 GMT -->

</html>