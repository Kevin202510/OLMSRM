<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Roles</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="rolesForm" action="roles/rolesCrudFunction.php">
            <input type="text" name="brand_id" id="brand_id">
            <div class="mb-3">
                <label class="form-label">Display Name</label>
                <input type="text" class="form-control" id="role_display_name" name="role_display_name" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
            </div>
            <div class="mb-3">
                <label class="form-label">brand_display_name</label>
                <input type="text" class="form-control" id="role_display_name" name="role_display_name" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
            </div>
            <div class="mb-3">
                <label class="form-label">brand_logo</label>
                <input type="text" class="form-control" id="role_display_name" name="role_display_name" id="role_display_name" aria-describedby="emailHelp" placeholder="Display Name" style="background-color:gray;">
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