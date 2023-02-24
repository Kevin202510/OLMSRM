<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="rolesForm">
            <input type="hidden" name="user_id" id="user_id">
            <div class="mb-3">
                <label class="form-label">role_id</label>
                <select class="form-control" name="brands_id" id="brands_id">
                    <option selected>Choose Role</option>
                    <?php
                            include_once('../API/DBCRUDAPI.php');
                            $newAPIFunctions = new DBCRUDAPI();
                            $newAPIFunctions->select("roles","*");
                            $rolesList = $newAPIFunctions->sql;
                        
                            $index = 1;
                            while ($roles = mysqli_fetch_assoc($rolesList)){
                    ?>

                    <option value="<?php echo $roles['role_id']; ?>"><?php echo $roles['role_display_name']; ?></option>

                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label"><div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="rolesForm">
            <input type="hidden" name="user_id" id="user_id">
            <div class="mb-3">
                <label class="form-label">role_id</label>
                <select class="form-control" name="fb_id" id="fb_id">
                    <option selected>Choose Role</option>
                    <?php
                            include_once('../API/DBCRUDAPI.php');
                            $newAPIFunctions = new DBCRUDAPI();
                            $newAPIFunctions->select("roles","*");
                            $rolesList = $newAPIFunctions->sql;
                        
                            $index = 1;
                            while ($roles = mysqli_fetch_assoc($rolesList)){
                    ?>

                    <option value="<?php echo $roles['role_id']; ?>"><?php echo $roles['role_display_name']; ?></option>

                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">mc_id</label>
                <input type="text" class="form-control" id="mc_id" name="mc_id" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_mvfile</label>
                <input type="text" class="form-control" id="mc_mvfile" name="mc_mvfile" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_platenumber</label>
                <input type="text" class="form-control" id="mc_platenumber" name="mc_platenumber" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_enginenumber</label>
                <input type="text" class="form-control" id="mc_enginenumber" name="mc_enginenumber" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_chassisnumber</label>
                <input type="text" class="form-control" id="mc_chassisnumber" name="mc_chassisnumber" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_desposition</label>
                <input type="text" class="form-control" id="mc_desposition" name="mc_desposition" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_pistondisplacement</label>
                <input type="text" class="form-control" id="mc_pistondisplacement" name="mc_pistondisplacement" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_numberofcylinders</label>
                <input type="text" class="form-control" id="mc_numberofcylinders" name="mc_numberofcylinders" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_fuel</label>
                <input type="text" class="form-control" id="mc_fuel" name="mc_fuel" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_make</label>
                <input type="text" class="form-control" id="mc_make" name="mc_make" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_series</label>
                <input type="text" class="form-control" id="mc_series" name="mc_series" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_bodytype</label>
                <input type="text" class="form-control" id="mc_bodytype" name="mc_bodytype" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_bodynumber</label>
                <input type="text" class="form-control" id="mc_bodynumber" name="mc_bodynumber" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_yearmodel</label>
                <input type="text" class="form-control" id="mc_yearmodel" name="mc_yearmodel" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_grosswt</label>
                <input type="text" class="form-control" id="mc_grosswt" name="mc_grosswt" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_netwt</label>
                <input type="text" class="form-control" id="mc_netwt" name="mc_netwt" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_shippingwt</label>
                <input type="text" class="form-control" id="mc_shippingwt" name="mc_shippingwt" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">mc_netcapacity</label>
                <input type="text" class="form-control" id="mc_netcapacity" name="mc_netcapacity" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="addNew" id="btn-mul" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div></label>
                <input type="text" class="form-control" id="brands_id" name="brands_id" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">id</label>
                <input type="text" class="form-control" id="id" name="id" aria-describedby="emailHelp" placeholder="Display Name" >
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="addNew" id="btn-mul" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>