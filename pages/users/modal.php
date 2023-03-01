<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="formData">
            <input type="hidden" name="id" id="id">
            <input type="hidden" id="method" name="update">
            <div class="mb-3">
                <label class="form-label">Role id</label>
                <select class="form-control" name="user_role_id" id="user_role_id">
                    <option>Choose Role</option>
                    <?php
                            include_once('../API/DBCRUDAPI.php');
                            $newAPIFunctions = new DBCRUDAPI();
                            $newAPIFunctions->select("roles","*");
                            $rolesList = $newAPIFunctions->sql;
                        
                            $index = 1;
                            while ($roles = mysqli_fetch_assoc($rolesList)){
                    ?>

                    <option value="<?php echo $roles['id']; ?>"><?php echo $roles['role_display_name']; ?></option>

                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" id="user_fname" name="user_fname" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="user_mname" name="user_mname" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" id="user_lname" name="user_lname" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" id="user_address" name="user_address" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Contact</label>
                <input type="text" class="form-control" id="user_contact" name="user_contact" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Date Of Birthday</label>
                <input type="text" class="form-control" id="user_DOB" name="user_DOB" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" id="user_email" name="user_email" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" id="user_username" name="user_username" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="text" class="form-control" id="user_password" name="user_password" aria-describedby="emailHelp" placeholder="Display Name" >
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