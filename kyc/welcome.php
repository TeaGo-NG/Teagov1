<?php 
include("components/head.php");
?>
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

    

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include("components/nav.php"); ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                    <div class="col-lg-12 col-12 mb-4 order-0">
                      <div class="card">
                        <div class="d-flex align-items-end row">
                          <div class="col-sm-7">
                            <div class="card-body">
                              <h5 class="card-title text-primary">Welcome <span style="color: black;"> <?php echo Ucwords($_SESSION['user']) ?>!</span> 🎉</h5>
                              <p class="mb-4">
                                Kindly select <span class="fw-bold"> 3 </span> categories of training you'll love to attend to.
                              </p>
                            </div>
                          </div>
                          <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                              <img
                                src="assets/img/illustrations/man-with-laptop-light.png"
                                height="140"
                                alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>


                <!-- Default Checkboxes and radios & Default checkboxes and radios -->
                <div class="col-xl-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Courses Categories</h5>
                    <!-- Checkboxes and Radios -->
                    <div class="card-body">
                      <div class="row gy-3">
                        <div class="col-md-3">
                        
                          <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                            <label class="form-check-label" for="defaultCheck1"> Academics / Career </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2"/>
                            <label class="form-check-label" for="defaultCheck2"> Politics </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3"/>
                            <label class="form-check-label" for="defaultCheck3"> Techonology </label>
                          </div>

                        </div>
    

                        <div class="col-md-3">
                        
                        <div class="form-check mt-3">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                          <label class="form-check-label" for="defaultCheck1"> Business / Entrepreneur </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck2"/>
                          <label class="form-check-label" for="defaultCheck2"> Spirituals </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck3"/>
                          <label class="form-check-label" for="defaultCheck3"> Entertainment / Lifestyle </label>
                        </div>
                        
                      </div>
  
                      </div>
                    </div>
                   
                   
                  </div>
                </div>
            </div>
            <!-- / Content -->


            


            <?php include("components/footer.php"); ?>

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

    


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
