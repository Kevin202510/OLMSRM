<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../assets/img/rusilogo.png" class="avatar-img img-fluid" style="width:50px;">
                </div>
                <div class="sidebar-brand-text mx-3">RMSIMS<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <?php if($_SESSION['userRoleId']==1 || $_SESSION['userRoleId']==2||$_SESSION['userRoleId']==3||$_SESSION['userRoleId']==5||$_SESSION['userRoleId']==6){ ?>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Point of Sale
            </div>
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>POS</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="pointofsale.php?invoice=<?php echo $finalcode ?>">Cashier</a>
                        <a class="collapse-item" href="purchaseMotorcycleTable.php">Purchase Motorcycle</a>
                        <a class="collapse-item" href="salesTable.php">Sales</a>
                    </div>
                </div>
            </li>
            <?php }?>

            <?php if($_SESSION['userRoleId']==1 || $_SESSION['userRoleId']==2){ ?>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Users Management
            </div>
            <?php } ?>
            <?php if($_SESSION['userRoleId']==1){ ?>
            <li class="nav-item">
                <a class="nav-link" href="rolesTable.php">
                    <i class="fas fa-fw fa-lock"></i>
                    <span>Roles</span></a>
            </li>
            <?php } ?>
            <?php if($_SESSION['userRoleId']==1 || $_SESSION['userRoleId']==2){ ?>
            <li class="nav-item">
                <a class="nav-link" href="usersTable.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Users</span></a>
            </li>
            <?php } ?>
            <?php if($_SESSION['userRoleId']==1 || $_SESSION['userRoleId']==2||$_SESSION['userRoleId']==3||$_SESSION['userRoleId']==5||$_SESSION['userRoleId']==6){ ?>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Products Management
            </div>
            <li class="nav-item">
                <a class="nav-link" href="brandsTable.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Brands</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="suppliersTable.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Suppliers</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="freebiesTable.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Freebies</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="vouchersTable.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Vouchers</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productsTable.php">
                    <i class="fab fa-product-hunt"></i>
                    <span>Products</span></a>
            </li>
            <?php } ?>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Loan Management
            </div>
            <li class="nav-item">
                <a class="nav-link" href="loansTable.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Loans</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="motorcyclesTable.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Motorcycles</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="applicantsTable.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Applicants</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="applicants_spouseTable.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Applicants Spouse</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="agentsTable.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Agents</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>