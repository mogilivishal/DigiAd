<!DOCTYPE html>
<html>
<body>
    

<form name="form" method="post" action="video.php" enctype="multipart/form-data" >
<input type="file" name="my_file" /><br /><br />
<input type="submit" name="submit" value="Upload"/>
<?php
if (($_FILES['my_file']['name']!="")){
// Where the file is going to be stored
 $target_dir = "videos/";
 $file = $_FILES['my_file']['name'];
 $path = pathinfo($file);
 $filename = $path['filename'];
 $ext = $path['extension'];
 $temp_name = $_FILES['my_file']['tmp_name'];
 $path_filename_ext = $target_dir.$filename.".".$ext;
 
// Check if file already exists
if (file_exists($path_filename_ext)) {
 echo "Sorry, file already exists.";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 echo "Congratulations! File Uploaded Successfully.";
 }
}
?>

<video width="500" height="240" controls>
  <source src="videos/1.mp4" type="video/mp4">
  <!-- <source src="movie.ogg" type="video/ogg"> -->
  Your browser does not support the video tag.
</video>
</form>
</body>
</html>