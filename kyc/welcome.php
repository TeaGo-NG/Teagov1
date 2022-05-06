<?php 
include("components/head.php");


//get user details
$data = $_SESSION['user'];

$sql = "SELECT * FROM `user` WHERE `user` = '$data'";
$rsl = query($sql);

if(row_count($rsl) == null) {

  redirect("./logout");

} else {

    $row = mysqli_fetch_array($rsl);

    if($row['kyc'] == 0 && $row['choice 1'] == '' && $row['choice 1'] == '' && $row['choice 1'] == '') { 


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
                            <input class="form-check-input" name="ckb" type="checkbox" value="Technology" id="defaultCheck3" onclick='chkcontrol(2)';/>
                            <label class="form-check-label mb-3 fw-bold text-dark" for="defaultCheck3"> Technology </label>
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
  

  $choice1 = $row['choice 1'];
  $choice2 = $row['choice 2'];
  $choice3 = $row['choice 3'];


  //split the courses into thier categories to get distint lectures from google drive
  if($choice1 == 'Academics / Career' || $choice2 == 'Academics / Career' || $choice3 == 'Academics / Career') {

    $varchoiceaca =  '
    <p>1. Academics and Career by Adedigba Israel Taiwo.</p>
    <iframe src="https://drive.google.com/file/d/1zxBiRaKMxqjqaAUW8MnvYPmZ1aBmorlb/preview" height="50" width="100%" title="1. Academics and Career by Adedigba Israel Taiwo."></iframe>
    <p>2. Academics and Career by Debbie AGBOOLA</p>
    <iframe src="https://drive.google.com/file/d/1nK2lDRd3ds20KE2hmLmgVjQNQ-PPjaLI/preview" height="50" width="100%" title="2. Academics and Career by Debbie AGBOOLA"></iframe>
    <p>3. Dare to Soar by Faith Omoniyi</p>
    <iframe src="https://drive.google.com/file/d/1-iOu2ELItOmzEUdVzaOsLgQZObCbVCXp/preview" height="50" width="100%" title="3. Dare to Soar by Faith Omoniyi"></iframe>
      ';
 
 
   } else {
 
     if($choice1 == 'Politics' || $choice2 == 'Politics' || $choice3 == 'Politics') {
 
    $varchoiceplt =  '
    <p>1. Leadership in political space by Owolabi Adekunle</p>
    <iframe src="https://drive.google.com/file/d/12dy6QGthwUZU6zxh_n_tAoxUqz_p7Qec/preview" height="50" width="100%" title="1. Leadership in political space by Owolabi Adekunle"></iframe>
    <p>2. Finding your templates as a student politician by Seyi Babs</p>
    <iframe src="https://drive.google.com/file/d/14OvFQtCOR0j6ttcWB6hVPwqE6tKHZqYD/preview" height="50" width="100%" title="2. Finding your templates as a student politician by Seyi Babs"></iframe>
    <p>3. Participating in students politics by Ajayi Dotun Emmanuel</p>
    <iframe src="https://drive.google.com/file/d/12theMOhiW6WInCm-6lq5wiV_5SpQnC1R/preview" height="50" width="100%" title="3. Participating in students politics by Ajayi Dotun Emmanuel"></iframe>
      ';
 
 
     
 
     } else {
 
       if($choice1 == 'Technology' || $choice2 == 'Technology' || $choice3 == 'Technology') {
 
    $varchoicetch =  '
    <p>1. Maximizing the opportunities around you on campus in the media and tech space by Helena Idiovo</p>
    <iframe src="https://drive.google.com/file/d/1-hc-FdC4P63dPBsIiRAvGGlp80_oprg4/preview" height="50" width="100%" title="1. Maximizing the opportunities around you on campus in the media and tech space by Helena Idiovo"></iframe>
     ';
 
    
 
       } else {
 
         if($choice1 == 'Business / Entrepreneur' || $choice2 == 'Business / Entrepreneur' || $choice3 == 'Business / Entrepreneur') {
 
           $varchoicebiz =  '
    <p>1. Lead generation by AYENI JONATHAN</p>
    <iframe src="https://drive.google.com/file/d/1zyLtn_E3_f70agOthYPzLpKrk5i2BdbN/preview" height="50" width="100%" title="1. Lead generation by AYENI JONATHAN"></iframe>
    <p>2. Building a business that counts by Victor Akinode </p>
    <iframe src="https://drive.google.com/file/d/1-aEkF45PrdzdHJyN9slERNcpVGftTHZ_/preview" height="50" width="100%" title="2. Building a business that counts by Victor Akinode"></iframe>
    <p>3. Formidable Qualities by Victor Akinode</p>
    <iframe src="https://drive.google.com/file/d/1-_egfzA15icwCZ3hoEbe4zBqgZf2eQvY/preview" height="50" width="100%" title="3. Formidable Qualities by Victor Akinode"></iframe>
    <p>4. Business and Entreprenuership by Seyi Babs</p>
    <iframe src="https://drive.google.com/file/d/14djPfsy-DJUUl9qsPh4DIgIygaihn_4s/preview" height="50" width="100%" title="4. Business and Entreprenuership by Seyi Babs"></iframe>
       
     ';
 
 
      
 
         } else {
 
           if($choice1 == 'Spirituals' || $choice2 == 'Spirituals' || $choice3 == 'Spirituals') {
 
 
             $varchoicesprl =  '
             <p>1. Knowing God on Campus by Alabi Ayoade</p>
             <iframe src="https://drive.google.com/file/d/13YIa2Z5cFcoXyc5bvQWC_ESjpBIq1Xtu/preview" height="50" width="100%" title="1. Knowing God on Campus by Alabi Ayoade"></iframe>
            ';
 
 
              
 
 
           } else {
 
             if($choice1 == 'Entertainment / Lifestyle' || $choice2 == 'Entertainment / Lifestyle' || $choice3 == 'Entertainment / Lifestyle') {
 
               $varchoiceent =  '
               <p>1. Lifestyle by John-muboh Oluwaseun</p>
               <iframe src="https://drive.google.com/file/d/1fbwc7KeEfXf9OHH6Ib4G8edx3sohJfXh/preview" height="50" width="100%" title="1. Lifestyle by John-muboh Oluwaseun"></iframe>
               <p>2. Personal Branding by Rasaq Olamide </p>
               <iframe src="https://drive.google.com/file/d/1-6HpQDFnPQafIIGAXPh4TsrJfTX2cWoD/preview" height="50" width="100%" title="2. Personal Branding by Rasaq Olamide"></iframe>
               <p>3. Leveraging on social media by Rasaq Olamide</p>
               <iframe src="https://drive.google.com/file/d/1-6ef4yOV7rGLseXAdCau4hikHELRWwHR/preview" height="50" width="100%" title="3. Leveraging on social media by Rasaq Olamide"></iframe>
               
                ';
 
             
             }
 
           }
 
         }
 
 
       }
       
     }
   } 





   //first choice split

  if($choice1 == 'Academics / Career') {

    $displayframes = $varchoiceaca;

  } else {

    if($choice1 == 'Politics') {

      $displayframes = $varchoicesprl;
    } else {

      if($choice1 == 'Technology') {

        $displayframes = $varchoicetch;
      }else {

        if($choice1 == 'Business / Entrepreneur') {

          $displayframes = $varchoicebiz;

        } else {

          if($choice1 == 'Spirituals') {

            $displayframes = $varchoicesprl;
          }else {

            if($choice1 == 'Entertainment / Lifestyle') {

              $displayframes = $varchoiceent;
            }
          }
        }
      }
    }
  }

 //2nd choice

 if($choice2 == 'Academics / Career') {

  $displayframes2 = $varchoiceaca;

} else {

  if($choice2 == 'Politics') {

    $displayframes2 = $varchoicesprl;
  } else {

    if($choice2 == 'Technology') {

      $displayframes2 = $varchoicetch;
    }else {

      if($choice2 == 'Business / Entrepreneur') {

        $displayframess = $varchoicebiz;

      } else {

        if($choice2 == 'Spirituals') {

          $displayframes2 = $varchoicesprl;
        }else {

          if($choice2 == 'Entertainment / Lifestyle') {

            $displayframess = $varchoiceent;
          }
        }
      }
    }
  }
}


?>

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
              <h4 class="fw-bold py-3 mb-4 text-primary">Welcome <span style="color: black;"> <?php echo Ucwords($_SESSION['user']) ?>!</span> ✨</h4>

    <!-- Accordion -->
    <h5 class="mt-4 text-dark">We've selected courses based on your interest</h5>
              <div class="row">
                <div class="col-md-6">
                  <div id="accordionIcon" class="accordion mt-3 accordion-without-arrow">
                    <div class="accordion-item card">
                      <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
                        <button
                          type="button"
                          class="accordion-button collapsed text-dark fw-bold"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionIcon-1"
                          aria-controls="accordionIcon-1"
                        >
                        <h5 class="mt-4 text-dark"><?php echo $choice1; ?></h5>
                        </button>
                      </h2>

                      <div id="accordionIcon-1" class="accordion-collapse collapse show" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                        <?php echo $displayframes  ?>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item card">
                      <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconTwo">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionIcon-2"
                          aria-controls="accordionIcon-2"
                        >
                        <h5 class="mt-4 text-dark"><?php echo $choice2 ?></h5>
                        </button>
                      </h2>
                      <div id="accordionIcon-2" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                        <?php echo $displayframes2  ?>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item card active">
                      <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconThree">
                        <button
                          type="button"
                          class="accordion-button"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionIcon-3"
                          aria-expanded="true"
                          aria-controls="accordionIcon-3"
                        >
                        <h5 class="mt-4 text-dark"><?php echo $choice3 ?></h5>
                        </button>
                      </h2>
                      <div
                        id="accordionIcon-3"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                       <?php  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                 <!-- Bootstrap crossfade carousel -->
                 <div class="col-md-6">
                  <h5 class="pt-4 text-primary fw-bold">KYC SPONSPORS AND INSTRUCTORS</h5>

                  <div
                    id="carouselExample-cf"
                    class="carousel carousel-dark slide carousel-fade"
                    data-bs-ride="carousel"
                  >
                    <ol class="carousel-indicators">
                      <li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
                      <li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/elements/hynitr.png" alt="First slide" />
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/elements/download.png" alt="Second slide" />
                      </div>
                     
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample-cf" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample-cf" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
                </div>
              </div>
              <!--/ Accordion -->

</div>
            


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
    <script src="../js/ajax.js"></script>
    <script src="node_modules/canvas-confetti/dist/confetti.browser.js"></script>
    <script>
      function shout() {

        var count = 900;
        var defaults = {
          origin: { y: 0.7 }
        };
        
        function fire(particleRatio, opts) {
          confetti(Object.assign({}, defaults, opts, {
            particleCount: Math.floor(count * particleRatio)
          }));
        }
        
        fire(0.25, {
          spread: 26,
          startVelocity: 55,
        });
        fire(0.2, {
          spread: 360,
        });
        fire(0.35, {
          spread: 360,
          decay: 0.91,
          scalar: 0.8
        });
        fire(0.1, {
          spread: 360,
          startVelocity: 25,
          decay: 0.92,
          scalar: 1.2
        });
        fire(0.1, {
          spread: 360,
          startVelocity: 45,
        });
          
      }

      shout();
      </script>

    <script type="text/javascript">
      function chkcontrol(j) {
      var total=0;
      for(var i=0; i < document.form1.ckb.length; i++){
      if(document.form1.ckb[i].checked){
      total =total +1;
    
    }

    if(total == 1 || total == 2) {

    document.getElementById("test").disabled = true;

} else {
  if(total == 3) {


    document.getElementById("test").disabled = false;


  }


}

      if(total > 3){
      alert("Please Select only three") 
      document.form1.ckb[j].checked = false ;
      return false;
      }
      }
      }

      function myFunction() {

        document.getElementById("test").disabled = true;
      }
      
      </script>
  </body>
</html>
