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
        <form method="post" id="formData" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id">
            <input type="hidden" name="logo" id="logo">
            <div class="row">
              <div class="col-md-4 text-center"> 
                <label for="brand_logo" class="form-label">Brand Logo
                    <img id="brandlogo" src="../assets/img/brandlogos/rusilogo.png" onerror="this.onerror=null;this.src='../assets/img/brandlogos/rusilogo.png'" class="img-thumbnail" style="height:100px">
                    <input class="form-control" style="display:none;" name="brand_logo" type="file" id="brand_logo">
                </label>
              </div>

              <div class="col-md-8">
            
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" id="brand_display_name" name="brand_display_name" aria-describedby="emailHelp" placeholder="Display Name" >
                </div>
              </div>
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