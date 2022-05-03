<?php 
include("components/head.php");


//get user details
$data = $_SESSION['user'];

$sql = "SELECT * FROM `user` WHERE `user` = '$data'";
$rsl = query($sql);

if(row_count($rsl) == null) {

  redirect(".././logout");

} else {

    $row = mysqli_fetch_array($rsl);

    if($row['kyc'] == 0 && $row['categories'] == '') { 


?>



<body onload="myFunction(); ">

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
                                Kindly select <span class="fw-bold"> 3 options </span> from the courses categories below.
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
                    <h5 class="card-header fw-bolder text-primary">Courses Categories</h5>
                    <!-- Checkboxes and Radios -->

                    <form name="form1" id="form1">
                    <div class="card-body">
                      <div class="row gy-3">
                     
                        <div class="col-md-3">
                          <div class="form-check mt-3">
                            <input class="form-check-input" name="ckb" type="checkbox" value="Academics / Career" id="defaultCheck1" onclick='chkcontrol(0)'; />
                            <label class="form-check-label mb-3 fw-bold text-dark" for="defaultCheck1"> Academics / Career </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" name="ckb" type="checkbox" value="Politics" id="defaultCheck2" onclick='chkcontrol(1)';/>
                            <label class="form-check-label mb-3 fw-bold text-dark" for="defaultCheck2"> Politics </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" name="ckb" type="checkbox" value="Techonology" id="defaultCheck3" onclick='chkcontrol(2)';/>
                            <label class="form-check-label mb-3 fw-bold text-dark" for="defaultCheck3"> Techonology </label>
                          </div>
                        </div>
    

                        <div class="col-md-3">
                          <div class="form-check mt-md-3">
                            <input class="form-check-input" name="ckb" type="checkbox" value="Business / Entrepreneur" id="defaultCheck4" onclick='chkcontrol(3)';/>
                            <label class="form-check-label mb-3 fw-bold text-dark" for="defaultCheck4"> Business / Entrepreneur </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" name="ckb" type="checkbox" value="Spirituals" id="defaultCheck5" onclick='chkcontrol(4)';/>
                            <label class="form-check-label mb-3 fw-bold text-dark" for="defaultCheck5"> Spirituals </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" name="ckb" type="checkbox" value="Entertainment / Lifestyle" id="defaultCheck6" onclick='chkcontrol(5)';/>
                            <label class="form-check-label mb-3 fw-bold text-dark" for="defaultCheck6 "> Entertainment / Lifestyle </label>
                          </div>
                          
                      </div>
                   
                      </div>

                      <div class="col-6">
                      <label class="form-label" for="showToastPlacement">&nbsp;</label>
                     <!-- Bottom Offcanvas -->
                     <div class="col-lg-3 col-md-6">
                      <div class="mt-3">
                        <button class="btn btn-primary" type="button" id="test" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasBottom"
                          aria-controls="offcanvasBottom"
                          >Save my Choice</button>
                        <div
                          class="offcanvas offcanvas-bottom"
                          tabindex="-1"
                          id="offcanvasBottom"
                          aria-labelledby="offcanvasBottomLabel"
                        >
                          <div class="offcanvas-header">
                            <h5 id="offcanvasBottomLabel" class="offcanvas-title">Yipeee! @<?php echo $_SESSION['user'] ?></h5>
                            <button
                              type="button"
                              class="btn-close text-reset"
                              data-bs-dismiss="offcanvas"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="offcanvas-body">
                            <p>
                              You've successfully completed your registration! <br/> Let's begin learning something new. Shall We?
                            </p>
                            
                            <div id="shootmsg">
                            <button type="button" class="btn btn-primary me-2" id="shoot">Yes! Let's Shoot</button>
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas" onclick="chkcontrol();">
                             Hold on pls!
                            </button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    </form>
                   
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

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    
<?php

} else {
?>


<p>helo</p>


<?php
}
}
?>


    <!-- Core JS -->
   <!-- build:js assets/vendor/js/core.js -->
   <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    
      <!-- Page JS -->
      <script src="assets/js/ui-toasts.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script>
      function chkcontrol(j) {
      var total=0;
      for(var i=0; i < document.form1.ckb.length; i++){
      if(document.form1.ckb[i].checked){
      total =total +1;
    }

    if(total == 1) {

      document.getElementById("test").disabled = true;

      } else {

      if(total == 2) {

        document.getElementById("test").disabled = true;

      } else {

        if(total == 3) {

          document.getElementById("test").disabled = false;
        }
      }
      }


      if(total > 3){
      alert("Please Select only Three Options") 
      document.form1.ckb[j].checked = false ;
      return false;
}
}
} 


function myFunction() {
	  document.getElementById("test").disabled = true;
	}
</script>

<script src="../js/ajax.js"></script>
  </body>
</html>
