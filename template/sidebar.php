 <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?page=dashboard">
                <div class="sidebar-brand-text "><?= $dataAdmin['nrn_admin'] ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="?page=dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-book"></i>
                    <span>DADUS INPUT</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item text-success" href="?page=pasiente">PASIENTE</a>
                        <a class="collapse-item text-success" href="?page=moras">MORAS</a>
                        <a class="collapse-item text-success" href="?page=klasifikasaun">KLASIFIKASAUN</a>
                        <a class="collapse-item text-success" href="?page=doutor">DOUTOR</a>
                        <a class="collapse-item text-success" href="?page=tpasiente">TIPU PASIENTE</a>
                        <a class="collapse-item text-success" href="?page=admin">ADMINISTRATOR</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-book"></i>
                    <span>DADUS PROSESU</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item text-success" href="?page=registupasiente">REGISTU PASIENTE</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="?page=relatorio">
                    <i class="fas fa-fw fa-table"></i>
                    <span>RELATORIO</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="logs/logout.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>LOGOUT</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>