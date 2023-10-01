<!DOCTYPE html>

<head>
    <meta charset="UTF-8">


</head>

<?php
$dbhost = 'db.cgmjlbiqninb.us-east-1.rds.amazonaws.com';
$dbuser = "user";
$dbpass = "password";
$dbname = "studs";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
