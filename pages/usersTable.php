<?php include('header.php'); ?>
<?php 
    if(!$_SESSION['userFullname']){
        header('Location: login.php');
    }
?>
    <div id="wrapper">
        <?php include('sidebar.php'); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- Topbar -->
                <?php include('topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h4>List of Users</h4>
                                <div class="row">
                                    <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-2">
                                        Generate Report
                                    </button>
                                    <button type="button" class="btn btn-success" id="create-new">
                                        Add User
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">RoleName</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="main-table">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <?php include('users/modal.php'); ?>
                </div>
            </div>
            <?php include('footer.php'); ?>
        </div>
    </div>
<script type="module" src="users/users.js"></script>
<?php include('script.php'); ?>