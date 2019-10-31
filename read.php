<?php
require_once "config.php";

if (isset($_GET["sid"]) && !empty(trim($_GET["sid"]))) {
    $sql = "SELECT * FROM slot_info WHERE sid = ?";
    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["sid"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $time = $row["time"];
                $date = $row["date"];
                $place = $row["place"];

            } else {
                echo "Error! Please try again later.";
                exit();
            }

        } else {
            echo "Error! Please try again later.";
            exit();
        }
    }
    $stmt->close();
    $link->close();
} else {
    echo "Error! Please try again later.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Slot</title>
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
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
                        <div class="page-header">
                            <h1>View User</h1>
                        </div>
                        <div class="form-group">
                            <label >Time</label>
                            <p class="form-control-static"><?php echo $time; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <p class="form-control-static"><?php echo $date; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Place</label>
                            <p class="form-control-static"><?php echo $place; ?></p>
                        </div>
                        <p><a href="changeslots1.php" class="btn btn-primary">Back</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>