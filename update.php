<?php
require_once "config.php";

if (isset($_GET['sid'])) {
    $sql = "SELECT * FROM slot_info WHERE sid = ?";
    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["sid"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $param_time = $row["time"];
                $param_date = $row["date"];
                $param_place = $row["place"];
            } else {
                echo "Error! Data Not Found";
                exit();
            }
        } else {
            echo "Error! Please try again later.";
            exit();
        }
        $stmt->close();
    }
} else {
    header("location: changeslots1.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["time"]) && !empty($_POST["date"]) && !empty($_POST["place"])) {

        $sql = "UPDATE slot_info SET time = ?, date = ?, place = ? WHERE sid = ?";
        if ($stmt = $link->prepare($sql)) {

            $stmt->bind_param("sssi", $_POST["time"], $_POST["date"], $_POST["place"], $_GET["sid"]);
            $stmt->execute();
            if ($stmt->error) {
                echo "Error!" . $stmt->error;
                exit();
            } else {
                header("location: index.php");
                exit();
            }
            $stmt->close();
        }
    }
    $link->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Slot</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        label{
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="card" style="margin-top:20px;">
                   <div class="card-body">
                       <div class="page-header">
                           <h2>Update Slot</h2>
                       </div>
                       <p>Edit the input to update the Slot.</p>
                       <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                           <div class="form-group">
                               <label>Time</label>
                               <input type="text" name="time" class="form-control" required value="<?php echo $param_time; ?>">
                           </div>
                           <div class="form-group">
                               <label>Date</label>
                               <textarea name="date" class="form-control" required ><?php echo $param_date; ?></textarea>
                           </div>
                           <div class="form-group">
                               <label>Place</label>
                               <input type="text" name="place" class="form-control" value="<?php echo $param_place; ?>" required>
                           </div>
                           <input type="submit" class="btn btn-primary" value="Submit">
                           <a href="changeslots1.php" class="btn btn-default">Cancel</a>
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>