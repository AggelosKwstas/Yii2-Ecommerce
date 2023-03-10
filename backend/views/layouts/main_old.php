<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;
use backend\assets\FontAwesomeAsset;
use yii\helpers\Html;


AppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <?php $this->title = 'Bob-X' ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body id="page-top" style="background-color: #f9f9fb" onload="loadWait()" class="sidebar-toggled">
    <?php $this->beginBody() ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div style="background-color: white;">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <img src="img/leaflogo.png" style="width: 230px;height: 230px; margin-left: 5px; margin-right: 15px;margin-top: 25px" title="Αρχική Σελίδα">
                </a>
            </div>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <!--                <br>-->
                <a class="nav-link">
                    <i class="fa fa-solid fa-house-user"></i>
                    <span><b>Home</b></span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Charts -->
            <li id="graphIcon" class="nav-item">
                <a class="nav-link" onclick="makeGraphActive()" href="<?php echo \yii\helpers\Url::to(['product/graphs']) ?>">
                    <i class="fa fa-chart-bar"></i>
                    <span><b>Graphs</b></span></a>
            </li>

            <hr class="sidebar-divider">
            <li id="mapNav" class="nav-item <?php
            if(\yii\helpers\Url::current()==\yii\helpers\Url::to(['product/map']))
                echo 'active';
            ?>">
                <a class="nav-link active" href="<?php  echo \yii\helpers\Url::to(['product/map']) ?>">
                    <i class="fa fa-solid fa-map-marked-alt"></i>
                    <span><b>Map</b></span></a>
            </li>

            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <br>
                <a class="nav-link active" href="<?php echo \yii\helpers\Url::to(['product/graphs']) ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span><b>Statistics</b></span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <p3 id="date-id" style="color: #31343a;font-weight: bold"></p3>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <div clas="nav-item">
                            <p3 style="color: #31343a"><b>Follow us on:</b></p3>
                            <a href="https://www.linkedin.com/company/neuron-energy-solutions/about/" style="color: #31343a">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.neuronenergy.com/" style="color: #31343a">
                                <i class="fa fa-regular fa-globe"></i>
                            </a>
                        </div>
                        <!-- Nav Item - User Information -->
                        <!--                        <li class="nav-item dropdown no-arrow">-->
                        <!--                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"-->
                        <!--                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                        <!--                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">-->
                        <!--                                    --><?php //echo Yii::$app->user->identity->getDisplayName() ?>
                        <!--                                </span>-->
                        <!--                                <img-->
                        <!--                                        src="img/user.png" style="width: 25px">-->
                        <!--                            </a>-->
                        <!-- Dropdown - User Information -->
                        <!--                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"-->
                        <!--                                 aria-labelledby="userDropdown">-->
                        <!--                                <a class="dropdown-item" href="--><?php //echo \yii\helpers\Url::to(['site/profile']) ?><!--">-->
                        <!--                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>-->
                        <!--                                    Profile-->
                        <!--                                </a>-->
                        <!--                                <div class="dropdown-divider"></div>-->
                        <!--                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">-->
                        <!--                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>-->
                        <!--                                    Logout-->
                        <!--                                </a>-->
                        <!--                            </div>-->
                        <!--                        </li>-->
                    </ul>
                </nav>
                <div>
                    <?php echo $content ?>
                </div>

                <!-- Footer -->

                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->
            <footer class="sticky-footer bg-white" style="margin-top: auto;">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style="color: #31343a;font-weight: bold"><b>© 2023 | Neuron Energy Solutions. All rights reserved.</b></span>
                    </div>
                </div>
            </footer>
        </div>
        <!-- End of Page Wrapper -->

        <div class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
        <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
