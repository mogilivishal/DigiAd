<?php
if (isset($_GET["sid"]) && !empty($_GET["sid"])) {

    require_once "config.php";
    $sql = "DELETE FROM slot_info WHERE sid = ?";

    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["sid"]);
        if ($stmt->execute()) {
            header("location: changeslots1.php");
            exit();
        } else {
            echo "Error! Please try again later.";
        }
    }
    $stmt->close();
    $link->close();
} else {
    echo "Error! Please try again later.";
}
?>