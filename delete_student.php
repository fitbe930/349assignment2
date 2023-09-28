<?php
$dbhost = 'db.cgmjlbiqninb.us-east-1.rds.amazonaws.com';
$dbuser = "user";
$dbpass = "password";
$dbname = "studs";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if (isset($_GET["stud_id"])) {
    $stud_id = $_GET["stud_id"];

    // Delete student record
    $sql = "DELETE FROM Students WHERE stud_id = '$stud_id'";
    if ($conn->query($sql) === TRUE) {
        header("Location: admin_panel.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>