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