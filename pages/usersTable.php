  <?php include_once('template/header.php'); ?>
  <?php include_once('template/sidebar.php'); ?>
  <main
    class="main-content position-relative max-height-vh-100 h-100 border-radius-lg"
  >
    <!-- Navbar -->
      <?php include_once('template/navbar.php'); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="d-flex justify-content-between bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Users Table</h6>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Add Users
                </button>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table">
                  <thead class="table-light">
                    <tr>
                      <th>#</th>
                      <th>RoleName</th>
                      <th>Fullname</th>
                      <th>Address</th>
                      <th>Contact</th>
                      <th>DOB</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                          include_once('../API/DBCRUDAPI.php');
                          $newAPIFunctions = new DBCRUDAPI();
                          $newAPIFunctions->selectleftjoin("users","roles","role_id","user_role_id");
                          $userList = $newAPIFunctions->sql;
                    
                          $index = 1;
                          while ($data = mysqli_fetch_assoc($userList)){
                    ?>
                    <tr>
                      <td class="align-middle">
                        <?php echo $index; ?>
                      </td>
                      <td><?php echo $data['role_display_name'] ?></td>
                      <td><?php echo $data['user_fname']." ".$data['user_mname']." ".$data['user_lname'] ?></td>
                      <td><?php echo $data['user_address'] ?></td>
                      <td><?php echo $data['user_contact'] ?></td>
                      <td><?php echo $data['user_DOB'] ?></td>
                      <td><?php echo $data['user_email'] ?></td>
                      <td>
                        <button style="margin-right:5px;" type="button" class="btn btn-primary" id="edit" data-id="<?php echo $data['user_id']; ?>">Edit</button>
                        <button style="margin-right:5px;" type="button" class="btn btn-primary" id="delete" data-id="<?php echo $data['user_id']; ?>">Delete</button>
                      </td>
                    </tr>
                    <?php $index++;
                        } 
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <?php include('users/modal.php'); ?>
        </div>
      </div>
    </div>
  </main>
  <script src="users/users.js"></script>
  <?php include_once('template/footer.php'); ?>