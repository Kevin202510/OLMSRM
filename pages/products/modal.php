<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="formData">
            <input type="hidden" name="product_id" id="product_id">
            <div class="mb-3">
                <label class="form-label">product_brand_id</label>
                <input type="text" class="form-control" id="product_brand_id" name="product_brand_id" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">product_supplier_id</label>
                <input type="text" class="form-control" id="product_supplier_id" name="product_supplier_id" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">product_code</label>
                <input type="text" class="form-control" id="product_code" name="product_code" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">product_description</label>
                <input type="text" class="form-control" id="product_description" name="product_description" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">product_size</label>
                <input type="text" class="form-control" id="product_size" name="product_size" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">product_purchaseprice</label>
                <input type="text" class="form-control" id="product_purchaseprice" name="product_purchaseprice" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">product_wholesale</label>
                <input type="text" class="form-control" id="product_wholesale" name="product_wholesale" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">product_saleprice</label>
                <input type="text" class="form-control" id="product_saleprice" name="product_saleprice" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">product_stocksavail</label>
                <input type="text" class="form-control" id="product_stocksavail" name="product_stocksavail" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">product_image</label>
                <input type="text" class="form-control" id="product_image" name="product_image" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <input type="hidden" id="method" name="update">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="addNew" id="btn-mul" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>