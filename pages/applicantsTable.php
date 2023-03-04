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
                                <h4>List of Applicants</h4>
                                <button type="button" class="btn btn-primary" id="create-new">
                                    Add Applicants
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">app_fname</th>
                                    <th scope="col">app_mname</th>
                                    <th scope="col">app_lname</th>
                                    <th scope="col">app_age</th>
                                    <th scope="col">app_dob</th>
                                    <th scope="col">app_smarried</th>
                                    <th scope="col">app_religion</th>
                                    <th scope="col">app_nickname</th>
                                    <th scope="col">app_pres_address</th>
                                    <th scope="col">app_paddress</th>
                                    <th scope="col">app_haddress</th>
                                    <th scope="col">app_bplace</th>
                                    <th scope="col">app_nodc</th>
                                    <th scope="col">app_ohl</th>
                                    <th scope="col">app_lor</th>
                                    <th scope="col">app_ohrl</th>
                                    <th scope="col">app_oname</th>
                                    <th scope="col">app_loresidences</th>
                                    <th scope="col">app_cnumber</th>
                                    <th scope="col">app_firm</th>
                                    <th scope="col">app_address</th>
                                    <th scope="col">app_position</th>
                                    <th scope="col">app_salary</th>
                                    <th scope="col">app_loservices</th>
                                    <th scope="col">app_bname</th>
                                    <th scope="col">app_baddress</th>
                                    <th scope="col">app_lobusiness</th>
                                    <th scope="col">app_swo</th>
                                    <th scope="col">app_capital	</th>
                                    <th scope="col">app_nincome</th>
                                    <th scope="col">app_oincome</th>
                                    </tr>
                                </thead>
                                <tbody id="main-table">
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <?php include('applicants/modal.php'); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <?php include('footer.php'); ?>
        </div>
    </div>
<script type="module" src="applicants/applicants.js"></script>
<?php include('script.php'); ?>