<?php include 'db.php';?>
<?php
    session_start();
    $user_val=$pass_val="";
    $username=$pwd=$error="";
    if(isset($_POST['but']))
    {
        $count =0;
        if($_POST['username']=="")
        {
            $user_val = "[This is required]";
        }
        else
        {
            $count=$count+1;
            $username = $_POST['username'];
        }
        if($_POST['pwd']=="")
        {
            $pass_val = "[This is required]";
        }
        else
        {
            $count=$count+1;
            $pwd= $_POST['pwd'];
        }


   
        if($count==2)
        {
            
            $q = "select * from user_details where username = ? and password = ?";
            $pre = mysqli_prepare($con,$q);
            mysqli_stmt_bind_param($pre,'ss',$username,$pwd);
            $_SESSION['username']=$username;
            mysqli_stmt_execute($pre);
            $result = mysqli_stmt_get_result($pre);
            $count = mysqli_num_rows($result);
            if($count == 1)
            {
                $user="";
                while($r = mysqli_fetch_assoc($result))
                {
                    $user = $r['username'];
                }
                header('location:home.php?user='.$user);
              
  
            }
            else
            {
            $error = "Your Username or Password is invalid";
            }
            
        }

       


        // else
        // {
        //     $error = "Your Login Name or Password is invalid";
        // }
        
    }
    // Admin Page to be constructed
    // if($_POST['but']){
    if(($username == "Administrator")){
        if(($pwd == "admin")){
            header('location:admin.php?user='.$user);
        }
    }
// }
   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <!-- <link rel="stylesheet" href="loginpage_17BCE7028.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
        <style>
        body 
        {
            background-image: url("https://redpithemes.com/Documentation/assets/img/page_bg/page_bg_blur02.jpg ");
        background-repeat:no-repeat;
       background-size:cover;
        }

        
        </style>
    </head>
    <body >
   
    <div class="container">
    <!-- style="background-color:white;" -->

       <form method="POST" action=""  >
        <div class = "con">
            <!-- <h2>Login Page</h2> -->
            <h1 style="text-align: center">Login</h1>
            <div style="width: 30%; margin: 25px auto;">
            <div style = "font-size:12px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
            <div class="form-group">
            <label>Username:</label>
            <input class = "form-control"name = "username" type = "text" placeholder="Enter username"><br>
            <span style="color:red;">*<?php echo $user_val;?></span><br>
            </div>
            <div class="form-group">
            <label> Password:</label>
            <input class ="form-control" name = "pwd" type = "password" placeholder="Enter password"><br>
            <span style="color:red;">*<?php echo $pass_val;?></span><br>
            </div>
            <!-- <input name = "but" type = "submit" value = "Sign in"><br><br> -->
            <div class="form-group">
            <button name = "but" class="btn btn-lg btn-primary btn-block">Login</button><br><br>
           </div>
            <label>New User?</label>
            <a href ="signup.php">Sign Up </a><br><br>
            <a href="forgot_pass.html">Forgot Password</a><br><br>
            <a href="change_pass.php">Change Password</a>
        </div>
        </div>
        </div>

       </form>
       
       <!-- jQuery CDN -->
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<!-- Bootstrap JS CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
