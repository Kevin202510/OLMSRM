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
              <div
                class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3"
              >
                <h6 class="text-white text-capitalize ps-3">Brands table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th
                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                      >
                        #
                      </th>
                      <th
                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"
                      >
                        Logo
                      </th>
                      <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                      >
                        Brand Name
                      </th>
                      <th
                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                      >
                        Action          
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                          include_once('../API/DBCRUDAPI.php');
                          $newAPIFunctions = new DBCRUDAPI();
                          $newAPIFunctions->select("brands","*");
                          $brandsList = $newAPIFunctions->sql;
                    
                          $index = 1;
                          while ($data = mysqli_fetch_assoc($brandsList)){
                    ?>

                    <tr>
                      <td class="align-middle">
                        <div class="d-flex px-2 py-1">
                            <h6 class="mb-0 text-sm"><?php echo $index; ?></h6>
                        </div>
                      </td>
                      <td class="align-middle text-center"><img src="assets/img/brands/<?php echo $data["brand_logo"]; ?>" class="img-thumbnail" style="max-width:100px;"></td>
                      <td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"><?php echo $data["brand_display_name"]; ?></span></td>
                      <td class="align-middle text-center"><button style="margin-right:5px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?php echo $data['id']; ?>">Edit</button><button type="button" class="btn btn-danger" data-id="<?php echo $data['id']; ?>" id="delete">Delete</button></td>
                    </tr>
                    <?php $index++;} ?>
                  </tbody>
                </table>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include_once('template/footer.php'); ?>