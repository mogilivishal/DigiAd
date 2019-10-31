




<!DOCTYPE html>
<html>
<head>
	<title>Change Slots</title>
    <link rel="stylesheet" type="text/css" href="changeslots.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>






<form>
	<form method="post" action="server.php" >
		<div class="input-group">
            <label>Time</label>
            <div class="row">
            <div class="col">
           <input type="time" name="time1" value="">
</div>to 
<div class="col">
<input type="time" name="time2">
</div>
        </div>
</div>
		<div class="input-group">
			<label>Date</label>
			<input type="date" name="date" value="">
		</div>
        <div class="input-group">
			<label>Place</label>
			<input type="text" name="place" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>
</body>
</html>