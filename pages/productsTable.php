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
                                <h4>List of Products</h4>
                                <button type="button" class="btn btn-primary" id="create-new">
                                    Add Products
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Supplier</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Size</th>
                                        <th scope="col">Wholesale</th>
                                        <th scope="col">Saleprice</th>
                                        <th scope="col">Stocksavail</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="main-table">
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include('products/modal.php'); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <?php include('footer.php'); ?>
        </div>
    </div>
<script type="module" src="products/products.js"></script>
<?php include('script.php'); ?>