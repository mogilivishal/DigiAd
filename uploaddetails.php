<?php
  session_start();
?>
<!doctype html>
<html lang="en">

  <head>
    <title>DigiAd</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container mb-3">
          <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
              <a href="index.html">DigiAd</a><span class="text-primary">.</span></a>
            </div>
            <div class="site-quick-contact d-none d-lg-flex ml-auto ">
              <div class="d-flex site-info align-items-center mr-5">
                <span class="block-icon mr-3"><span class="icon-map-marker"></span></span>
                <span>34 Street Jubilee Hills, Hyderabad, <br> India</span>
              </div>
              <div class="d-flex site-info align-items-center">
                <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                <span>Sunday - Friday 8:00AM - 4:00PM <br> Saturday CLOSED</span>
              </div>
              
            </div>
          </div>
        </div>


        <div class="container">
          <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

              

              <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto ">
                  <li><a href="home1.php" class="nav-link">Home</a></li>
                  <!-- <li class="active"><a href="uploaddetails.php" class="nav-link">Upload Details</a></li> -->
                  <li><a href="bookaslot.php" class="nav-link">Book a Slot</a></li>
                  <li><a href="status.php" class="nav-link">Status</a></li>
                </ul>
              </nav>

              <nav class="site-navigation text-right mr-auto" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto ">
              <li><a href="logout.php" class="nav-link" >Logout</a></li>
              </ul>
              </nav>

              <!-- <div class="top-social ml-auto">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div> -->
          </div>
        </div>

       

      </header>

    

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('https://images.unsplash.com/photo-1424296308064-1eead03d1ad9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-5 mt-5 pt-5">
              <h1 class="mb-3">Our Services</h1>
              <p>We provide a peer-to-peer advertising network and content management system that connects owners of public displays with brands.</p>
              <p><a href="#" class="btn btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


   

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Upload Video Details</h2>
          <p>Please enter the Video description and upload video which you want to advertise</p>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <!-- <form action="#" method="post"> -->
              

              <div class="form-group row">
                <div class="col-md-12">
                <form name="form" method="post" action="#" enctype="multipart/form-data" >
                  <textarea name="vid_desc" id="" class="form-control" placeholder="Description of Video" cols="30" rows="10" required></textarea>
                  
                    <input type="file" name="my_file" required/><br /><br />
                    <!-- <input type="submit" name="file" value="Upload"/> -->
                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" name="file" value="Submit Details">
                    <?php
                    // session_start();
                    if(isset($_POST['file']))
                    if (($_FILES['my_file']['name']!="")){
                    // Where the file is going to be stored
                    $target_dir = "videos/";
                    $file = $_FILES['my_file']['name'];
                    $path = pathinfo($file);
                    
                    $ext = $path['extension'];
                    $temp_name = $_FILES['my_file']['tmp_name'];
                    
                    // echo $temp_name;
                    require_once "db.php";
                    $sql = "select count(*)as count from video_details";
                    $result=mysqli_query($con,$sql);
                    $v_id =0;
                    if(!empty($result))
                    {
                      // echo "Hdakljf";
                        while($row = mysqli_fetch_assoc($result))
                        {
                          $v_id = $row['count'];
                        }
                    }
                    $filename = $v_id+1;
                    // $temp_name=$v_id.".".$ext;
                    // rename($temp_name,$v_id.".".$ext);
                    $path_filename_ext = $target_dir.$filename.".".$ext;
                    $vid_desc = $_POST['vid_desc'];
                    // echo $_SESSION['username'];
                    // $sql = "insert into video_details(username,file_extension)   values('".$_SESSION['username']."','".$ext."')";
                    $sid = $_GET["sid"];
                    echo $sid;
                    $sql = "insert into video_details(username,filename,file_extension,vid_desc,s_id)   values('".$_SESSION['username']."','$filename','".$ext."','$vid_desc','$sid')";
                    // echo $sql;
                    mysqli_query($con,$sql);
                   
                    // echo $path_filename_ext;
                    // Check if file already exists
                    if (file_exists($path_filename_ext)) {
                    echo "Sorry, file already exists.";
                    }else{
                    move_uploaded_file($temp_name,$path_filename_ext);
                    echo "Congratulations! File Uploaded Successfully."; 
                    
                    }
                    }
                    ?>
                    </form>
                </div>

              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  
                </div>
              </div>
            <!-- </form> -->
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Address:</span>
                  <span>34 Street Jubilee Hills, Hyderabad, India</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+91 9876543210</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>digiad@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-7 mb-5">
            <h5 class="subtitle">Features</h5>
            <h2>A creative digital agency with excellence services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-home"></span>
              </span>
              <h3>Real Time</h3>
              <p>Advertisement can be changed in real time to react to current events as they unfold such as weather variations, public events, or changes in traffic flow.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-face"></span>
              </span>
              <h3>Hyperlocal</h3>
              <p>Advertisement can address local issues where people live and work and encourage consumers to use their purchasing power at local small businesses.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-drafts"></span>
              </span>
              <h3>Time specific
              </h3>
              <p>Advertisement can be funded to run across an extended period or at peak periods such as rush hour</p>
            </div>
          </div>

         

        </div>
        
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-3">About Us</h2>
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>

                <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-4 ml-auto">
                <h2 class="footer-heading mb-4">Navigation</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Navigation</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
                
              </div>

              
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart text-danger" aria-hidden="true"></i> 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

