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
                                <h4>Point Of Sale</h4>
                                <form class="form-inline my-2 my-lg-0" id="searchForm">
                                    <input class="form-control mr-sm-2" type="submitsearch" placeholder="Itemcode" id="productCode" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" id="searchProductCode" type="button">Search</button>
                                </form>
                            </div>
                        <div class="row">
                            <form>
                                <div class="form-row">
                                    <div class="col-md-6 mb-2">
                                    <label for="validationDefault01">Customer name</label>
                                    <input type="text" class="form-control" id="transaction_cfullName" name="transaction_cfullName">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                    <label for="validationDefault02">Address</label>
                                    <input type="text" class="form-control" id="transaction_caddress" name="transaction_caddress">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-2">
                                        <label for="validationDefault03">Date & Time</label>
                                        <input type="text" class="form-control" id="dateAndTime" name="dateAndTime" disabled>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                        <div class="card-body">
                           
                        </div>
                    </div>
                    <?php include('pos/modal.php'); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <?php include('footer.php'); ?>
        </div>
    </div>
<script src="pos/pos.js"></script>
<?php include('script.php'); ?>