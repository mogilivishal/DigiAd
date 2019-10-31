<?php
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['time']) && isset($_POST['date']) && isset($_POST['place'])) {

        $sql = "INSERT INTO slot_info (time, date, place) VALUES (?,?,?)";
        if ($stmt = $link->prepare($sql)) {
            $stmt->bind_param("sss", $_POST['time'], $_POST['date'], $_POST['place']);
            if ($stmt->execute()) {
                header("location: changeslots1.php");
                exit();
            } else {
                echo "Error! Please try again later.";
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
    <title>Create User : bishrulhaq.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Create Users</h2>
                </div>
                <p>Fill this form to add users to the database.</p>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                    <div class="form-group">
                        <label>Time</label>
                        <input type="text" name="time" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <textarea name="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Place</label>
                        <input type="text" name="place" class="form-control" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="changeslots1.php" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>