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
                <label class="form-label">fb_id</label>
                <input type="text" class="form-control" id="fb_id" name="fb_id" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">fb_package_name</label>
                <input type="text" class="form-control" id="fb_package_name" name="fb_package_name" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">fb_description</label>
                <input type="text" class="form-control" id="fb_description" name="fb_description" aria-describedby="emailHelp" placeholder="Display Name" >
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