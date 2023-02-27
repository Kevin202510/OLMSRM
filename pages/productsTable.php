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
                                    Add Products
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">product_brand_id</th>
                                    <th scope="col">product_supplier_id</th>
                                    <th scope="col">product_code</th>
                                    <th scope="col">product_description</th>
                                    <th scope="col">product_size</th>
                                    <th scope="col">product_purchaseprice</th>
                                    <th scope="col">product_wholesale</th>
                                    <th scope="col">product_saleprice</th>
                                    <th scope="col">product_stocksavail</th>
                                    <th scope="col">product_image</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="main-table">
                                </tbody>
                            </table>
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