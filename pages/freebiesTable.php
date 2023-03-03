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
                                <h4>List of Freebies</h4>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Add Freebies
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="main-table">
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <?php include('freebies/modal.php'); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <?php include('footer.php'); ?>
        </div>
    </div>
<script src="freebies/freebies.js"></script>
<?php include('script.php'); ?>