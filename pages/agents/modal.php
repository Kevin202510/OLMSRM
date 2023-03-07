<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Agents</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="formData">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label class="form-label">agent_name</label>
                <input type="text" class="form-control" id="agent_name" name="agent_name" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">agent_address</label>
                <input type="text" class="form-control" id="agent_address" name="agent_address" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">agent_contact</label>
                <input type="text" class="form-control" id="agent_contact" name="agent_contact" aria-describedby="emailHelp" placeholder="Display Name" >
            </div>
            <div class="mb-3">
                <label class="form-label">agent_since_when</label>
                <input type="text" class="form-control" id="agent_since_when" name="agent_since_when" aria-describedby="emailHelp" placeholder="Display Name" >
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