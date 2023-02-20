<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Roles</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="rolesForm" action="roles/rolesCrudFunction.php">
            <input type="text" name="user_id" id="user_id">
            <div class="mb-3">
                <label class="form-label">role_id</label>
                <input type="text" class="form-control" id="role_id" name="role_id" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
            </div>
            <div class="mb-3">
                <label class="form-label">user_fname</label>
                <input type="text" class="form-control" id="user_fname" name="user_fname" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
            </div>
            <div class="mb-3">
                <label class="form-label">user_mname</label>
                <input type="text" class="form-control" id="user_mname" name="user_mname" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
            </div>
            <div class="mb-3">
                <label class="form-label">user_lname</label>
                <input type="text" class="form-control" id="user_lname" name="user_lname" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
            </div>
            <div class="mb-3">
                <label class="form-label">user_address</label>
                <input type="text" class="form-control" id="user_address" name="user_address" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
            </div>
            <div class="mb-3">
                <label class="form-label">user_contact</label>
                <input type="text" class="form-control" id="user_contact" name="user_contact" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
            </div>
            <div class="mb-3">
                <label class="form-label">user_DOB</label>
                <input type="text" class="form-control" id="user_DOB" name="user_DOB" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
            </div>
            <div class="mb-3">
                <label class="form-label">user_email</label>
                <input type="text" class="form-control" id="user_email" name="user_email" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
            </div>
            <div class="mb-3">
                <label class="form-label">user_username</label>
                <input type="text" class="form-control" id="user_username" name="user_username" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
            </div>
            <div class="mb-3">
                <label class="form-label">user_password</label>
                <input type="text" class="form-control" id="user_password" name="user_password" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="addNew" id="btn-mul" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>