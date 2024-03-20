<?php
header('Access-Control-Allow-Origin: http://localhost:8080');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');
?>
<!DOCTYPE html>
<html lang="en">

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
    <style>
        .cont {
            margin-top: 110px;
            margin-left: 190px;
            margin-right: 0px;

            width: 1000px;
            border: 0.1rem solid;

        }

        .intt {

            /* display: flex;
            justify-content: center;
            align-items: center; */
            /* background-color: antiquewhite; */
        }


        form {
            padding: 20px;
        
        }

        button {
            background-color: blue;
            /* Green */
            border: none;
            color: white;
            /* padding: 15px 32px; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            border-radius: 10px;
            width: 300px;
            height: 40px;
            margin-top: 30px;
            margin-left: 260px;
        }

        label{
            /* text-shadow: 0 0 2rem red; */
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 2px;
        }
      
    </style>
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
        <!-- Page Header Start-->

        <?php require_once('header.php'); ?>
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php require_once('sidebar.php'); ?>
            <!-- Page Sidebar Ends-->
            <div class="container mt-5">


                <div class="cont">
                    <div class="intt">
                        <form action="<?= site_url('indice/insert') ?>" method="POST">

                            <div class="form-group">
                                <label for="index_name">Index Name</label>
                                <input type="text" class="form-control" id="index_name" name="index_name">
                            </div>
                            <div class="form-group">
                                <label for="index_name">Index Value</label>
                                <input type="text" class="form-control" id="index_Value" name="index_Value">
                            </div>
                            <div class="form-group">
                                <label for="index_name">Index SubValue</label>
                                <input type="text" class="form-control" id="index_subValue" name="index_subValue">
                            </div>
                            <div class="form-group">
                                <label for="match_id">Match ID</label>
                                <input type="text" class="form-control" id="match_id" name="match_id">
                            </div>
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date">
                            </div>
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="date" class="form-control" id="end_date" name="end_date">
                            </div>
                            <div class="form-group">
                                <label for="start_time">Start Time</label>
                                <input type="time" class="form-control" id="start_time" name="start_time">
                            </div>
                            <div class="form-group">
                                <label for="end_time">End Time</label>
                                <input type="time" class="form-control" id="end_time" name="end_time">
                            </div>
                            <!-- <a href="#" class="btn btn-primary">Submit</a> -->
                            <div>
                                <button type="submit">Insert</button>
                                <a href="<?= base_url("createIndices")?>">Back</a>
                            </div>
                        </form>


                    </div>
                </div>
            </div>


            <!-- footer start-->
            <?php require_once('footer.php'); ?>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?php echo base_url(); ?>/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="<?php echo base_url(); ?>/assets/js/scrollbar/simplebar.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?php echo base_url(); ?>/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="<?php echo base_url(); ?>/assets/js/sidebar-menu.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/sidebar-pin.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/slick/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/slick/slick.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/header-slick.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/chart/morris-chart/raphael.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/chart/morris-chart/morris.js"> </script>
    <script src="<?php echo base_url(); ?>/assets/js/chart/morris-chart/prettify.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/dashboard/default.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/notify/index.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/datatable/datatables/datatable.custom1.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/owlcarousel/owl-custom.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/typeahead/handlebars.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/typeahead-search/handlebars.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/height-equal.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo base_url(); ?>/assets/js/script.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/theme-customizer/customizer.js"></script>
    <!-- Plugin used-->
</body>

</html>