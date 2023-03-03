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
                                <h4>Point Of Sale</h4>
                                    <div class="dropdown">
                                        <input class="form-control" placeholder="Itemcode" id="productCode" data-toggle="dropdown" aria-expanded="true">
                                        <div class="dropdown-menu" id="productsList"></div>
                                    </div>
                            </div>
                        <div class="row d-flex justify-content-between">
                            <form>
                                <div class="form-row">
                                    <input type="hidden" id="newInvoiceCode" value="<?php echo $finalcode; ?>">
                                    <input type="hidden" id="invoice_number" value="<?php echo $_GET['invoice']; ?>">
                                    <div class="col-md-4 mb-2">
                                    <label for="validationDefault01">Customer name</label>
                                    <input type="text" value="<?php echo "Customer-".$_GET['invoice']; ?>" class="form-control" id="transaction_cfullName" name="transaction_cfullName">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                    <label for="validationDefault02">Address</label>
                                    <input type="text" value="<?php echo "Address-".$_GET['invoice']; ?>" class="form-control" id="transaction_caddress" name="transaction_caddress">
                                    </div>
                                    <div class="col-md-4 mb-2">
                                    <label for="validationDefault02">Voucher || Coupon</label>
                                    <input type="text" class="form-control" value="0" id="transaction_voucher_id" name="transaction_voucher_id">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-2">
                                        <label for="validationDefault03">Date & Time</label>
                                        <input type="text" class="form-control" id="dateAndTime" name="dateAndTime" disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="validationDefault03">Invoice #</label>
                                        <input type="text" disabled class="form-control" value="<?php echo $_GET['invoice']; ?>" id="invoice_number" name="invoice_number" disabled>
                                    </div>
                                </div>
                            </form>
                            <form>
                                <input type="hidden" id="toAdd">
                                <div class="form-row">
                                    <div class="col-md-12 mb-2 mt-4">
                                        <label for="validationDefault01">Total Amount</label>
                                        <input type="text" id="totalAmountInvoice" disabled class="form-control">
                                    </div>
                                </div><div class="form-row">
                                    <div class="col-md-12 mb-2 mt-4">
                                        <center>
                                            <button type="button" class="btn btn-primary" id="paymentna" disabled>
                                                Payment
                                            </button>
                                        </center>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                        <div class="card-body">
                           <table class="table table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Code</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="main-table">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php include('pos/modal.php'); ?>
                    <?php include('pos/printRecieptModal.php'); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <?php include('footer.php'); ?>
        </div>
    </div>
<script src="pos/pos.js"></script>
<?php include('script.php'); ?>