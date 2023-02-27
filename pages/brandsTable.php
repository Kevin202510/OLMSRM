<?php include('header.php'); ?>
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
                                <h4>List of Brands</h4>
                                <button type="button" class="btn btn-primary" id="create-new">
                                    Add Brand
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Brand Logo</th>
                                    <th scope="col">Brand Name</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="main-table">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php include('brands/modal.php'); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <?php include('footer.php'); ?>
        </div>
    </div>
<script type="module" src="brands/brands.js"></script>
<?php include('script.php'); ?>