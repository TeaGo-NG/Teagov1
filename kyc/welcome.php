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
                <div class="col-xl-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Courses Categories</h5>
                    <!-- Checkboxes and Radios -->
                    <div class="card-body">
                      <div class="row gy-3">
                        <div class="col-md">
                          <small class="text-light fw-semibold">Checkboxes</small>
                          <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
                            <label class="form-check-label" for="defaultCheck1"> Unchecked </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked />
                            <label class="form-check-label" for="defaultCheck2"> Indeterminate </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked />
                            <label class="form-check-label" for="defaultCheck3"> Checked </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="disabledCheck1" disabled />
                            <label class="form-check-label" for="disabledCheck1"> Disabled Unchecked </label>
                          </div>
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="disabledCheck2"
                              disabled
                              checked
                            />
                            <label class="form-check-label" for="disabledCheck2"> Disabled Checked </label>
                          </div>
                        </div>
                        <div class="col-md">
                          <small class="text-light fw-semibold">Radio</small>
                          <div class="form-check mt-3">
                            <input
                              name="default-radio-1"
                              class="form-check-input"
                              type="radio"
                              value=""
                              id="defaultRadio1"
                            />
                            <label class="form-check-label" for="defaultRadio1"> Unchecked </label>
                          </div>
                          <div class="form-check">
                            <input
                              name="default-radio-1"
                              class="form-check-input"
                              type="radio"
                              value=""
                              id="defaultRadio2"
                              checked
                            />
                            <label class="form-check-label" for="defaultRadio2"> Checked </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value="" id="disabledRadio1" disabled />
                            <label class="form-check-label" for="disabledRadio1"> Disabled unchecked </label>
                          </div>
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="radio"
                              value=""
                              id="disabledRadio2"
                              disabled
                              checked
                            />
                            <label class="form-check-label" for="disabledRadio2"> Disabled checkbox </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="m-0" />
                    <!-- Inline Checkboxes -->
                    <div class="card-body">
                      <div class="row gy-3">
                        <div class="col-md">
                          <small class="text-light fw-semibold d-block">Inline Checkboxes</small>
                          <div class="form-check form-check-inline mt-3">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              id="inlineCheckbox3"
                              value="option3"
                              disabled
                            />
                            <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                          </div>
                        </div>
                        <div class="col-md">
                          <small class="text-light fw-semibold d-block">Inline Radio</small>
                          <div class="form-check form-check-inline mt-3">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="inlineRadioOptions"
                              id="inlineRadio1"
                              value="option1"
                            />
                            <label class="form-check-label" for="inlineRadio1">1</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="inlineRadioOptions"
                              id="inlineRadio2"
                              value="option2"
                            />
                            <label class="form-check-label" for="inlineRadio2">2</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="inlineRadioOptions"
                              id="inlineRadio3"
                              value="option3"
                              disabled
                            />
                            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
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
