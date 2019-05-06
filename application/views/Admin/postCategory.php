<?php include("fonction.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title><?php echo $categ['Nom'] ?> Posts</title>

    <!-- All CSS-->
    <link href="<?php echo base_url() ?>assets/Admin/css/All.css" rel="stylesheet" media="all">

    <link href="<?php echo base_url() ?>assets/Admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/Admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/Admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <link href="<?php echo base_url() ?>assets/Admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/Admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/Admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/Admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/Admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/Admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/Admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="<?php echo base_url() ?>Home-Admin">
                            <img src="<?php echo base_url() ?>assets/Admin/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                  <ul class="list-unstyled navbar__list">
                      <li>
                          <a href="<?php echo base_url() ?>Home-Admin">
                              <i class="fas fa-chart-bar"></i>Home</a>
                      </li>
                      <li class="has-sub">
                          <a class="js-arrow" href="#">
                              <i class="fas fa-copy"></i>Post Category
                          </a>
                          <?php foreach ($listeCateg as $liste) { ?>
                          <ul class="list-unstyled navbar__sub-list js-sub-list">
                              <li>
                                  <a href="<?php echo base_url() ?>Admin/Category/<?php echo $liste['Nom'] ?>-<?php echo $liste['IdCategorie']; ?>"><?php echo $liste['Nom'] ?></a>
                              </li>
                          </ul>
                          <?php } ?>
                      </li>
                  </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url() ?>assets/Admin/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?php echo base_url() ?>Home-Admin">
                                <i class="fas fa-chart-bar"></i>Home</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Post Category
                            </a>
                            <?php foreach ($listeCateg as $liste) { ?>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo base_url() ?>Admin/Category/<?php echo $liste['Nom'] ?>-<?php echo $liste['IdCategorie']; ?>"><?php echo $liste['Nom'] ?></a>
                                </li>
                            </ul>
                            <?php } ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url() ?>assets/Admin/images/icon/avatar-01.jpg" alt="Ratsimbazafy Andry Promo 10A num 46" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Ratsimbazafy Andry Promo 10A num 46</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
              <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                                <!-- DATA TABLE -->
                          <h1 class="pb-2 display-4"><?php echo $categ['Nom'] ?> Posts</h1>
                          <div class="table-data__tool">
                            <div class="table-data__tool-right">
                              <form action="<?php echo base_url() ?>Add-Item" method="post">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>add item
                                </button>
                              </form>
                            </div>
                          </div>
                          <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                              <thead>
                                <tr>
                                  <th>title</th>
                                  <th>sub title</th>
                                  <th>category</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($listePost as $liste) { ?>
                                <tr class="tr-shadow">
                                  <td class="desc"><?php echo $liste['Titre'] ?></td>
                                  <td ><?php echo $liste['SousTitre'] ?></td>
                                  <td><?php echo $liste['NomCategorie'] ?></td>
                                  <td>
                                    <div class="table-data-feature">
                										<?php
                											$string = transformSpace($liste['Titre']);
                										?>
                  										<form action="<?php echo base_url() ?>Edit-Item/<?php echo $string ?>-<?php echo $liste['IdPost'] ?>" method="post">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </button>
                  										</form>
                  										<form action="<?php echo base_url() ?>index.php?c=Admin&m=deleteItem&idPost=<?php echo $liste['IdPost'] ?>" method="post">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                  										</form>
                                    </div>
                                  </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
                                <!-- END DATA TABLE -->
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url() ?>assets/Admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url() ?>assets/Admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url() ?>assets/Admin/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url() ?>assets/Admin/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url() ?>assets/Admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url() ?>assets/Admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url() ?>assets/Admin/js/main.js"></script>

</body>

</html>
<!-- end document-->
