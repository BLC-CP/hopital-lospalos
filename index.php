<?php 
    session_start();

    if($_SESSION['status'] != 'logins'){
        header("Location:logs/login.php");
    }
    
    include 'config/config.php';

 ?>

<!-- Header -->
<?php include 'template/header.php'; ?>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include 'template/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow text-success">
            <marquee>
                <h4 class="text-center" style="font-family: MV Boli; font-weight: bold;">SISTEMA INFORMASAUN MORAS TUBERKOLOSA IHA SENTRU SAUDE LOSPALOS BASEADU WEBSITE FRAMEWORK BOOTSRAP</h4>
            </marquee>
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                        class="fas fa-book fa-sm text-white-50"></i> <?= $title; ?></a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content -->
                         <?php eval($CONTENT['main']); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<!-- End of Page Wrapper -->


<?php include 'template/footer.php'; ?>