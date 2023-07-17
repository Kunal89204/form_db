<?php
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['what'], $_POST['from'], $_POST['to'])) {
        $what = $_POST['what'];
        $from = $_POST['from'];
        $to = $_POST['to'];

        $sql = "UPDATE `reconform` SET `$what` = '$to' WHERE `$what` = '$from'";
        $result = mysqli_query($conn, $sql);
        $aff = mysqli_affected_rows($conn);

        if (!$result) {
            echo "Update failed";
        } else {
            echo "<p id='message'>Update Successful</p>";
            echo "<p id='message'>Number of affected rows$aff</p>";
        }
    } else {
        echo "Missing form field values";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <h1>Update your records</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="what">What:</label>
        <select name="what" id="what">
            <option value="Name">Name</option>
            <option value="Title">Title</option>
            <option value="Desc">Description</option>
            <option value="id">ID</option>
        </select>
        <label for="from">From:</label>
        <input type="text" name="from">
        <label for="to">To:</label>
        <input type="text" name="to">
        <button type="submit">Update</button>
    </form>
    <script src="script.js"></script>
</body>
</html>
