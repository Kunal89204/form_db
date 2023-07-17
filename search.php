<?php
require 'db_connect.php';

$search = "";
$numrows = 0;

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $sql = "SELECT * FROM `reconform` WHERE `Title` = '$search'";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    text-transform: capitalize;
    box-sizing: border-box;
    outline: none;
    transition: 0.3s;
    font-family: "Courier New", Courier, monospace;
  }

  body {
    background: linear-gradient(#253659, #243b55);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-attachment: fixed;
    /* padding-top: 100px; */
  }

  h1 {
    text-align: center;
    color: white;
    padding-top: 10px;
  }
  
  .search {
    padding: 20px;
    display: flex;
    justify-content: space-between;

  }

  input {
    width: 95%;
    padding: 5px 5px 5px 10px;
    border-radius: 20px;
    border: 0px solid;
    box-shadow: 2px 2px 10px 1px rgb(21, 21, 21);
    height: 35px;
  }

  button{
    padding: 0px 15px;
    height: 35px;
    border-radius: 20px;
    border: none;
    color: aqua;
    background-color: rgb(31, 31, 78);
    cursor: pointer;
  }

  button:hover {
    color: rgb(31, 31, 78);
    background-color: aqua;
    font-weight: bold;
  }

  .info {
    padding: 10px;
    background-color: red;
    color: white;
    width: 95%;
    margin: auto;
    border-radius: 10px;
  }
    </style>
</head>
<body>
    <h1>Search</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="search">
            <input type="text" name="search" placeholder="Search for a movie">
            <button type="submit">GO</button>
        </div>
    </form>
    <div class="results">
        <?php 
        $no = 1;
        if ($numrows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p class='info'>" . $no . ". " . $row['Name'] . " wants " . $row['Title'] . "</p><br>";
                $no = $no + 1;
            }
        }
        ?>
    </div>
</body>
</html>
