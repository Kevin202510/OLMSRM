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
                                <h4>List of Applicants_Spouse</h4>
                                <button type="button" class="btn btn-primary" id="create-new">
                                    Add Applicants_Spouse
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Middle Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Single Married</th>
                                    <th scope="col">Religion</th>
                                    <th scope="col">Nickname</th>
                                    <th scope="col">Present Address</th>
                                    <th scope="col">Previous Address</th>
                                    <th scope="col">Home Address</th>
                                    <th scope="col">Birth Place</th>
                                    <th scope="col">Name of Dependent Children</th>
                                    <th scope="col">Own House & Lot</th>
                                    <th scope="col">Length of Residence</th>
                                    <th scope="col">Own House & reting Lot</th>
                                    <th scope="col">Owner Name</th>
                                    <th scope="col">Length of Residences</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Firm</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Salary</th>
                                    <th scope="col">Length of Services</th>
                                    <th scope="col">Business Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Line of Business</th>
                                    <th scope="col">Since when Operated</th>
                                    <th scope="col">Capital	</th>
                                    <th scope="col">Net Income</th>
                                    <th scope="col">Others Income</th>
                                    </tr>
                                </thead>
                                <tbody id="main-table">
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <?php include('applicants_spouse/modal.php'); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <?php include('footer.php'); ?>
        </div>
    </div>
<script type="module" src="applicants_spouse/applicants_spouse.js"></script>
<?php include('script.php'); ?>