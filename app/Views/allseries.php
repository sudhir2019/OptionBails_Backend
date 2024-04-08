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
  <title>OptionBails - Admin </title>
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
    <!-- Page Header Start-->
    <?php require_once('header.php'); ?>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <?php require_once('sidebar.php'); ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-sm-6 p-0">
                <h3>Series List</h3>
              </div>
              <div class="col-sm-6 p-0">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/dashboard">
                      Home</a></li>
                  <!-- <li class="breadcrumb-item">Dashboard</li> -->
                  <li class="breadcrumb-item active">Series List </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->




        <div class="row">


          <!-- <div class="col-xxl-3 col-xl-50 col-md-6 box-col-6 proorder-xl-7">
                    <div class="card review-slider">
                      <div class="card-header card-no-border pb-0">
                        <div class="header-top">
                          <h4>Review</h4>
                          <div class="dropdown icon-dropdown">
                            <button class="btn dropdown-toggle" id="userdropdown4" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown4"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="owl-carousel owl-theme" id="owl-carousel-dashboard">
                          <div class="review">
                            <div> <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/dashboard/user/14.png" alt="">
                              <div class="review-content">
                                <h2>John Connor</h2>
                              </div>
                              <div class="d-flex">
                                <h5>4.3</h5>
                                <p class="pull-right ms-2 me-2 mb-0 mt-0"><i class="fa fa-star font-secondary"></i></p>
                                <div class="flex-grow-1">
                                  <h5>136</h5>
                                </div>
                              </div>
                              <p>“Best Product i’ve been seen on market, best price, best quality! Overall Amazing!!!”</p>
                            </div>
                          </div>
                          <div class="review">
                            <div class="review">
                              <div> <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/dashboard/user/20.png" alt="">
                                <div class="review-content">
                                  <h2>Paul Miller</h2>
                                </div>
                                <div class="d-flex">
                                  <h5>5.6</h5>
                                  <p class="pull-right ms-2 me-2 mb-0 mt-0"><i class="fa fa-star font-secondary"></i></p>
                                  <div class="flex-grow-1">
                                    <h5>120</h5>
                                  </div>
                                </div>
                                <p>“Best Product i’ve been seen on market, best price, best quality! Overall Amazing!!!”</p>
                              </div>
                            </div>
                          </div>
                          <div class="review">
                            <div class="review">
                              <div> <img class="img-fluid" src="<?php echo base_url(); ?>/assets/images/dashboard/user/21.png" alt="">
                                <div class="review-content">
                                  <h2>Alen Lee</h2>
                                </div>
                                <div class="d-flex">
                                  <h5>6.3</h5>
                                  <p class="pull-right ms-2 me-2 mb-0 mt-0"><i class="fa fa-star font-secondary"></i></p>
                                  <div class="flex-grow-1">
                                    <h5>140</h5>
                                  </div>
                                </div>
                                <p>“Best Product i’ve been seen on market, best price, best quality! Overall Amazing!!!”</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->


          <div class="col-xxl-12 col-xl-100 box-col-12 proorder-xl-1">
            <div class="card">
              <div class="card-header card-no-border pb-0">
                <div class="header-top">

                  <div class="dropdown icon-dropdown">
                    <button class="btn dropdown-toggle" id="userdropdown2" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0 recent">
                <div class="table-responsive custom-scrollbar">
                  <table class="table display" id="resent-order" style="width:100%">
                    <thead>
                      <th>ID</th>
                      <th>NAME</th>
                      <th>MATCHES</th>
                      <th>START DATE</th>
                      <th>END DATE</th>
                      <th>ODI</th>
                      <th>T20</th>
                      <th>TEST</th>
                      <th>SQUADS</th>
                      <td>From</td>

                      <thead>

                      <tbody>
                        <?php
                        $countriesList = array();
                        $offset = 0;
                        $maxOffset = 1;
                        $apikey = '80955849-5826-419a-af3f-bd8858ab24b8';
                        $json_result = file_get_contents('https://api.cricapi.com/v1/series?apikey=' . $apikey . '&offset=' . $offset);


                        // print_r($data);
                        $dataSereis = json_decode($json_result);

                        ?>
                        Total Records : <?php echo $maxOffset; ?>
                        <?php
                        if ($dataSereis->status == 'failure') { ?>
                          <tr>
                            <td colspan="9">Blocked </td>
                          </tr>
                        <?php } else {
                          $maxOffset = $dataSereis->info->totalRows;
                          $offset += count($dataSereis->data);
                        ?>
                          <?php foreach ($dataSereis->data as $row) : ?>
                            <tr>
                              <td><?php echo $row->id ?></td>
                              <td><a href='<?php echo base_url(); ?>getMatchList?id=<?= $row->id ?>'><?php echo $row->name ?></a></td>
                              <td><?php echo $row->matches ?></td>
                              <td><?php echo $row->startDate ?></td>
                              <td><?php echo $row->endDate ?></td>
                              <td><?php echo $row->odi ?></td>
                              <td><?php echo $row->t20 ?></td>
                              <td><?php echo $row->test ?></td>
                              <td><?php echo $row->squads ?></td>
                              <td>By Api</td>


                            </tr>

                          <?php endforeach; ?>

                        <?php
                        } ?>


                        <?php foreach ($customseries as $row) : ?>
                          <tr>
                            <td><?php echo $row->id ?></td>
                            <td><a href='<?php echo base_url(); ?>getMatchList?id=<?= $row->id ?>'><?php echo $row->name ?></a></td>
                            <td><?php echo $row->matches ?></td>
                            <td><?php echo $row->start_date ?></td>
                            <td><?php echo $row->end_date ?></td>
                            <td><?php echo $row->odi ?></td>
                            <td><?php echo $row->t20 ?></td>
                            <td><?php echo $row->test ?></td>
                            <td><?php echo $row->squads ?></td>
                            <td>Custom</td>


                          </tr>

                        <?php endforeach; ?>



                      </tbody>
                  </table>
                  <hr>
                  

                  </table>
                </div>
              </div>
            </div>
          </div>


        </div>
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


<?php
// $url = 'https://api.cricapi.com/v1/series';
// $params = [
//     'apikey' => $apikey,
//     'offset' => $offset
// ];

// // Initialize cURL session
// $ch = curl_init();

// // Set cURL options
// curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($params));
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disabling SSL verification temporarily, consider removing this line and properly configure SSL
// // Execute cURL request
// $result = curl_exec($ch);

// // Check for errors
// if ($result === false) {
//     echo 'cURL error: ' . curl_error($ch);
// } else {
//     // Handle the result
//     // For example, decode the JSON
//     $json_result = json_decode($result, true);
//     // Further processing of $json_result...
// }

// return $json_result;
?>