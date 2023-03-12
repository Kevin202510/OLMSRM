<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Motorcycles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="rolesForm">
            <input type="hidden" name="method" id="method">
            <input type="hidden" name="mc_id" id="mc_id">
            <div class="mb-3">
                <label class="form-label">Mvfile</label>
                <input type="text" class="form-control" id="mc_mvfile" name="mc_mvfile" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Platenumber</label>
                <input type="text" class="form-control" id="mc_platenumber" name="mc_platenumber" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Enginenumber</label>
                <input type="text" class="form-control" id="mc_enginenumber" name="mc_enginenumber" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Chassisnumber</label>
                <input type="text" class="form-control" id="mc_chassisnumber" name="mc_chassisnumber" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Desposition</label>
                <input type="text" class="form-control" id="mc_desposition" name="mc_desposition" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Pistondisplacement</label>
                <input type="text" class="form-control" id="mc_pistondisplacement" name="mc_pistondisplacement" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Numberofcylinders</label>
                <input type="text" class="form-control" id="mc_numberofcylinders" name="mc_numberofcylinders" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Fuel</label>
                <input type="text" class="form-control" id="mc_fuel" name="mc_fuel" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Make</label>
                <input type="text" class="form-control" id="mc_make" name="mc_make" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Series</label>
                <input type="text" class="form-control" id="mc_series" name="mc_series" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Bodytype</label>
                <input type="text" class="form-control" id="mc_bodytype" name="mc_bodytype" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Bodynumber</label>
                <input type="text" class="form-control" id="mc_bodynumber" name="mc_bodynumber" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Yearmodel</label>
                <input type="text" class="form-control" id="mc_yearmodel" name="mc_yearmodel" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Grosswt</label>
                <input type="text" class="form-control" id="mc_grosswt" name="mc_grosswt" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Netwt</label>
                <input type="text" class="form-control" id="mc_netwt" name="mc_netwt" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Shippingwt</label>
                <input type="text" class="form-control" id="mc_shippingwt" name="mc_shippingwt" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Netcapacity</label>
                <input type="text" class="form-control" id="mc_netcapacity" name="mc_netcapacity" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="addNew" id="btn-mul" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>