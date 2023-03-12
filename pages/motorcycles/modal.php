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
                <label class="form-label">motor_name</label>
                <input type="text" class="form-control" id="motor_name" name="motor_name" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">image</label>
                <input type="text" class="form-control" id="image" name="image" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_engineType</label>
                <input type="text" class="form-control" id="motor_engineType" name="motor_engineType" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_displacement</label>
                <input type="text" class="form-control" id="motor_displacement" name="motor_displacement" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_startingsystem</label>
                <input type="text" class="form-control" id="motor_startingsystem" name="motor_startingsystem" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_borestroke</label>
                <input type="text" class="form-control" id="motor_borestroke" name="motor_borestroke" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_brakeTypeFront</label>
                <input type="text" class="form-control" id="motor_brakeTypeFront" name="motor_brakeTypeFront" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_brakeTypeRear</label>
                <input type="text" class="form-control" id="motor_brakeTypeRear" name="motor_brakeTypeRear" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_tiresizeFront</label>
                <input type="text" class="form-control" id="motor_tiresizeFront" name="motor_tiresizeFront" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_tiresizeRear</label>
                <input type="text" class="form-control" id="motor_tiresizeRear" name="motor_tiresizeRear" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_wheelType</label>
                <input type="text" class="form-control" id="motor_wheelType" name="motor_wheelType" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_overallDimension</label>
                <input type="text" class="form-control" id="motor_overallDimension" name="motor_overallDimension" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_curbweight</label>
                <input type="text" class="form-control" id="motor_curbweight" name="motor_curbweight" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_seatheight</label>
                <input type="text" class="form-control" id="motor_seatheight" name="motor_seatheight" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_seatheight</label>
                <input type="text" class="form-control" id="motor_seatheight" name="motor_seatheight" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_groundClearance</label>
                <input type="text" class="form-control" id="motor_groundClearance" name="motor_groundClearance" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_fuelTankCapacity</label>
                <input type="text" class="form-control" id="motor_fuelTankCapacity" name="motor_fuelTankCapacity" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_fuelSystem</label>
                <input type="text" class="form-control" id="motor_fuelSystem" name="motor_fuelSystem" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_batteryType</label>
                <input type="text" class="form-control" id="motor_batteryType" name="motor_batteryType" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_engineOilCapacity</label>
                <input type="text" class="form-control" id="motor_engineOilCapacity" name="motor_engineOilCapacity" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_gearShiftPattern</label>
                <input type="text" class="form-control" id="motor_gearShiftPattern" name="motor_gearShiftPattern" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">motor_description</label>
                <input type="text" class="form-control" id="motor_description" name="motor_description" aria-describedby="emailHelp" placeholder="Display Name" >
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