
        <!DOCTYPE html>
        <html lang="en">
          <head>
            
              <title>Login</title>
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <link rel="stylesheet" href="main.css">
          </head>
          <body>
          <nav class="navbar navbar-default">
              <div class="container">
                  <div class="navbar-header">
                      
        
                      <a class="navbar-brand" href="welcome.php">HangOut</a>
                  </div>
                  <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                      <li class=""><a href="welcome.php">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        
                            
                            <li class=""><a href="register.php"><span>Not a User? </span>Sign Up</a></li>
                       
                            
                            
                       
                    </ul>
                  </div>
              </div>
          </nav>
          
         
          <div class="container">

    <div class="row">
        <h1 style="text-align: center">Login</h1>
        <div style="width: 30%; margin: 25px auto;">
            <form action="welcome.php" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="username">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="password">
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block">Login</button>
                </div>
            </form>
            <a href="welcome.php">Go Back</a>
        </div>
    </div>
</div><!-- /.container -->

<!-- jQuery CDN -->
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<!-- Bootstrap JS CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
    