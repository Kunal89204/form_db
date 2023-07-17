<?php
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movie = $_POST['Title'];
    $sql = "DELETE FROM `reconform` WHERE `Title` = '$movie'";
    $result = mysqli_query($conn, $sql);
    $aff = mysqli_affected_rows($conn);

    if ($result) {
        echo $aff;
    } else {
        echo "Error deleting the $movie row";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting Records</title>
    <link rel="stylesheet" href="delete.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="movie">Enter Movie name to delete</label>
        <input type="text" name="Title">
        <button type="submit">Delete</button> <!-- Add the submit button -->
    </form>
</body>
</html>
