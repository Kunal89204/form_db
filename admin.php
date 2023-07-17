<?php
require 'db_connect.php';

$sql = "SELECT * FROM `reconform`";
$result = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);

echo "Total number of requests received till now: " . $numrows . "<h1>";

if ($numrows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['id'].".".$row['Name'] . " wants " . $row['Title'] . "<br>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    
</body>
</html>