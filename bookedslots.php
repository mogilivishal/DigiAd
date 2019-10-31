<?php
require_once "config.php";

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


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
    function myFunction() {
  var x = document.getElementById("show-table");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}</script>

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
                  <li><a href="admin.php" class="nav-link">Home</a></li>
                  <li><a href="changeslots1.php" class="nav-link">Change Slots</a></li>
                  <li class="active"><a href="bookslot.php" class="nav-link">Booked Slots</a></li>
                  
                 
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
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('https://images.unsplash.com/29/night-square.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1059&q=80')">
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


    

        <div class="site-section">
        <div class="container">
      <div class="jumbotron">
        <div class="card">
          <div class="card-header">
            Digital Outdoor Advertisement
          </div>
          <div class="card-body">
            <h4 class="card-title">Approve/Reject Slots</h4>
            <form method = "POST" action = "#">
            <button name = "reqslots" class="btn btn-danger" style="height:50px;width:200px;" onclick="myFunction()">SHOW REQUESTED SLOTS</button>
            </form>



            <?php
                if(isset($_POST['accept']))
                {
                    $vid = $_GET['vid'];
                    echo $vid;
                    $sql3= "update video_details set approval = 1 where vid_id = $vid";
                    echo $sql3;
                    $result3 = $link->query($sql3);
                }
                elseif(isset($_POST['reject']))
                {
                    $vid = $_GET['vid'];
                    $sql4= "update video_details set approval = -1 where vid_id = $vid";
                    $result4 = $link->query($sql4);

                }
                if(isset($_POST["reqslots"]))
                {
                $sql2 = "select vid_id,approval,s_id,username from video_details where approval=0 or approval=-1";
                $result2 = $link->query($sql2);
                if($result2->num_rows>0)
                {
                  // echo "he";
                  echo "<table class='table table-bordered table-striped'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Username</th>";
                        echo "<th>Time</th>";
                        echo "<th>Date</th>";
                        echo "<th>Place</th>";
                        echo "<th>Action</th>";
                        echo "<th>Client Details</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                  while($row2 = $result2->fetch_assoc())
                  { 
                    // echo "a;skfj";
                    $vid = $row2['vid_id'];
                    $x =$row2['s_id'];
                      $sql = "select * from slot_info where sid =$x";
                    
                      $result = $link->query($sql);
                      if ($result->num_rows > 0) {
                        
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['sid'] . "</td>";
                            echo "<td>" . $row2['username'] . "</td>";
                            echo "<td>" . $row['time'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['place'] . "</td>";
                            echo "<td>";
                          
                            // echo "<a href='uploaddetails.php?sid=" . $row['sid'] . "' class='btn btn-primary'>Book</a>";
                            echo "<form method = 'post' action='bookedslots.php?vid=$vid'> <button name = 'accept' class='btn btn-primary' style='height:50px;width:200px;'>Accept</button></form>";
                            echo "<form method = 'post' action='bookedslots.php?vid=$vid'> <button name = 'reject' class='btn btn-danger' style='height:50px;width:200px;'>Reject</button></form>";

                            // echo "<a href='delete.php?sid=" . $row['sid'] . "' class='btn btn-danger'>Reject</a>";
                            echo "</td>";
                            echo "<td>";
                            echo "<form method = 'post' action='viewvideo.php?vid=$vid'> <button name = 'cli_det' class='btn btn-success' style='height:50px;width:200px;'>Clnt Details</button></form>";
                            echo "</td>";
                            echo "</tr>";
                        }
                      
                        // Free result set
                        $result->free();

                        } else {
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                  }
                  echo "</tbody>";
                  echo "</table>";


                }
             
                }
                $link->close();
                ?>




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
