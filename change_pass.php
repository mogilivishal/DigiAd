<?php include 'db.php';?>
<?php
    session_start();
    $username = $_SESSION['username'];
    $old_val = $pass_val="";
    $pwd = $old_pwd = "";
    if(isset($_POST['submit']))
    {
        $count =0;
        if(empty($_POST['oldpwd']))
        {
            $old_val = "[This is required]";
        }
        else
        {
            $count=$count+1;
            $old_pwd = $_POST['oldpwd'];
        }
        if(empty($_POST['pwd']))
        {
            $pass_val = "[This is required]";
        }
        else
        {
            $count=$count+1;
            $pwd= $_POST['pwd'];
        }
        if($count ==2)
        {
            $q = "select * from user_details where username = ?";
            $pre = mysqli_prepare($con,$q);
            mysqli_stmt_bind_param($pre,'s',$username);
            mysqli_stmt_execute($pre);
            $result = mysqli_stmt_get_result($pre);
            if($result)
            {
                while($r = mysqli_fetch_assoc($result))
                {
                    if(strcmp($old_pwd,$r['password'])==0)
                    {
                        // $r['password']=$pwd;
                        $q = "update user_details set password = ? where username = ?";
                         $pre = mysqli_prepare($con,$q);
                         mysqli_stmt_bind_param($pre,'ss',$pwd,$username);
                         mysqli_stmt_execute($pre);
                        ?><script>alert("Changed Successfully")</script><?php
                    }
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <script src= "loginpage_17BCD7047.js"></script>
    <link rel="stylesheet" href="loginpage_17BCD7047.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <body>
         <title>Change Password Page</title>
        <form method = "POST" action = "#">
            <div class = "con">
            <!-- <h2>Change Password Page</h2> -->
            <h1 style="text-align: center">Change Password</h1>
            <div style="width: 30%; margin: 25px auto;">
            <div class="form-group">
            <label>Enter Old Password:</label>
            <input class = "form-control" type = "password" placeholder="Password" name = "oldpwd"><br>
            <span style="color:red;">*<?php echo $old_val;?></span><br>
             </div>
             <div class="form-group">
            <label> Enter New Password:</label>
            <input class = "form-control" type = "password" placeholder="Password" name = "pwd">
            <br>
            <span style="color:red;">*<?php echo $pass_val;?></span><br>
            </div>
            <button name = "submit" class="btn btn-lg btn-primary btn-block">Submit</button><br>
            <!-- <input type = "submit" name = "submit" value = "Submit" > -->
        </div>
        </form>
        </div>
               <!-- jQuery CDN -->
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<!-- Bootstrap JS CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
