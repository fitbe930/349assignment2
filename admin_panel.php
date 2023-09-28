<?php
$dbhost = 'db.cgmjlbiqninb.us-east-1.rds.amazonaws.com';
$dbuser = "user";
$dbpass = "password";
$dbname = "studs";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    echo "Connected to database";
}

// Fetch student records from the database
$sql = "SELECT * FROM Students";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

</head>
<body>
    <div class="admin-panel">
        <h1>Admin Access</h1>
        <h2>Student Records</h2>
        <table>
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Course</th>

            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row["stud_id"]}</td>";
                    echo "<td>{$row["firstname"]}</td>";
                    echo "<td>{$row["lastname"]}</td>";
                    echo "<td>{$row["course"]}</td>";
                    echo "<td><a href=\"delete_student.php?stud_id={$row["stud_id"]}\">Delete</a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
    <a href="admin_login.html">
        <button>Sign out</button>
</body>
</html>

