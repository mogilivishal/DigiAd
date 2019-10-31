<?php include 'db.php';?>
<?php
    
    $pass1_val=$pass2_val=$first_val=$dob_val=$ans_val=$last_val=$pass1=$pass2=$email_val=$phone_num_val="";
    $firstname=$lastname=$dob=$ans=$pass1=$pass2=$sec_ques=$email=$num="";
    if(isset($_POST['but2']))
    {
        $sec_ques = $_POST['questions'];
        echo($sec_ques);
        $count =0;
        if($_POST['first']=="")
        {
            $first_val = "[This is required]";
        }
        else
        {
            $count = $count+1;
            $firstname = $_POST['first'];
        }
        if($_POST['last']=="")
        {
            $last_val = "[This is required]";
        }
        else
        {
            $count = $count+1;
            $lastname = $_POST['last'];
        }
        if($_POST['pwd1']=="")
        {
            $pass1_val = "[This is required]";
        }
        else
        {
            $count = $count+1;
            $pass1 = $_POST['pwd1'];
        }
        if($_POST['pwd2']=="")
        {
            $pass2_val = "[This is required]";
        }
        else
        {
            $count = $count+1;
            $pass2 = $_POST['pwd2'];
        }
        if($_POST['dob']=="")
        {
            $dob_val = "[This is required]";
        }
        else
        {
            $count = $count+1;
            $dob = $_POST['dob'];
        }
        if($_POST['ans']=="")
        {
            $ans_val = "[This is required]";
        }
        else
        {
            $count = $count+1;
            $ans = $_POST['ans'];
        }
        if($pass1!=$pass2&&$_POST['pwd2']!=""&&$_POST['pwd2']!="")
        {
            $pass2_val = "[Both passwords must match!]";
        }
        if($_POST['email']=="")
        {
            $email_val = "[This is required]";
        }
        else
        {
            $count = $count+1;
            $email = $_POST['email'];  
        }
        if($_POST['num']=="")
        {
            $phone_num_val="[This is required]";
        }
        else
        {
            $count = $count+1;
            $num = $_POST['num'];
        }

        if($count==8)
        {
           
            $q = "insert into user_details values(?,?,?,?,?,?,?,?,?)";
            $pre = mysqli_prepare($con,$q);
            mysqli_stmt_bind_param($pre,'sssssssss',$lastname,$pass1,$firstname,$lastname,$sec_ques,$ans,$dob,$email,$num);
            if(mysqli_stmt_execute($pre))
            {
                echo "Inserted Successfully";
            }

        }

    }
   
?>

<!DOCTYPE html>
<html>
    <head>
            <!-- <link rel="stylesheet" href="loginpage_17BCE7028.css"> -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="main.css">
            <style>
        body 
        {
            background-image: url("https://steamuserimages-a.akamaihd.net/ugc/2429005285073196621/BE5C4F81D687C12362AD8DD12A5B6E5670EFEB97/");
        background-repeat:no-repeat;
       background-size:cover;
        }

        
        </style>
    </head>
    <body>
        <title>Sign up Page</title>
        <form method="POST" action="">
        <div class = "con">
            <!-- <h2>Sign up Page</h2> -->
            <h1 style="text-align: center">Sign Up</h1>
            <h4 style="text-align: center">Enter your personal details</h4>
            <div style="width: 30%; margin: 25px auto;">
            <div class="form-group">
            <label>First Name:</label>
            <input class = "form-control" name = "first" type = "text" placeholder="First name"><br>
            <span style="color:red;">*<?php echo $first_val;?></span><br>
             </div>
             <div class="form-group">
            <label>Last Name:</label>
            <input class = "form-control" type = "text" name = "last" placeholder="Last name"><br>
            <span style="color:red;">*<?php echo $last_val;?></span><br>
             </div>
             <div class="form-group">
            <label>Enter DOB:</label>
            <input class = "form-control" name = "dob" type = "date"><br>
            <span style="color:red;">*<?php echo $dob_val;?></span><br>
            </div>
            <div class="form-group">
            <label>Choose Security question:</label>
            <select name = "questions">
                <option >What is your birth year?</option>
                <option>What is your favourite number?</option>
                <option>What is your favourite place?</option>
            </select>
            <br><br>
            </div>
            <div class="form-group">
           <label> Answer:</label>
            <input class = "form-control" type = "text" name = "ans"><br><br>
            <span style="color:red;">*<?php echo $ans_val;?></span><br><br>
            </div>
            <div class="form-group">
            <label>Password:</label>
            <input class = "form-control" name = "pwd1" type = "password" placeholder="Enter password"><br><br>
            <span style="color:red;">*<?php echo $pass1_val;?></span><br><br>
            </div>
            <div class="form-group">
           <label> Confirm Password:</label>
            <input class = "form-control"name = "pwd2" type = "password" placeholder="Enter password"><br><br>
            <span style="color:red;">*<?php echo $pass2_val;?></span><br><br>
            </div>
            <div class="form-group">
            <label> Enter your Email:</label>
            <input class="form-control" name ="email" type = "email" placeholder="Enter your Email"><br><br>
            <span style="color:red;">*<?php echo $email_val;?></span><br><br>
            </div>
            <div class="form-group">
            <label> Enter your Phone number:</label>
            <input class="form-control" name ="num" type = "tel" placeholder="Enter your Phone Number (+91)"><br><br>
            <span style="color:red;">*<?php echo $phone_num_val;?></span><br><br>
            </div>
            <div class="form-group">
            <!-- <input name = "but2" type = "submit" value="Submit"><br><br> -->
            <button name = "but2" class="btn btn-lg btn-primary btn-block">Submit</button><br><br>
            </div>
            <label>Already a User?</label>
        <a href ="loginpage.php">Sign In </a><br><br>
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
