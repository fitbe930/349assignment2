<!DOCTYPE html>

<head>
    <meta charset="UTF-8">


</head>

<?php
session_start();

require_once "db_connection.php";


$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    echo "Connected to database";
}


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$course = $_POST['course'];
$stud_id = $_POST['stud_id'];

$sql = "INSERT INTO Students (firstname, lastname, course, stud_id)
        VALUES ('$firstname', '$lastname', '$course', '$stud_id')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
      
}
$conn -> close();
?>
<!DOCTYPE html>
<body>
    <a href ="index.html">
        <button>Return</button>
</body>
