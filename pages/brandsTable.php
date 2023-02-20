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
                      <td class="align-middle text-center"><button style="margin-right:5px;" type="button" class="btn btn-primary" id="edit" data-id="<?php echo $data['brand_id']; ?>">Edit</button><button type="button" class="btn btn-danger" data-id="<?php echo $data['brand_id']; ?>" id="delete">Delete</button></td>
                    </tr>
                    <?php $index++;} ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include_once('template/footer.php'); ?>