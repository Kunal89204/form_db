<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "recon";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if(!$conn){
   die("There was an error connecting to the database".mysqli_connect_error());
}

else{
   echo "";
}

$title = $_POST['title'];
$desc = $_POST['desc'];
$name = $_POST['name'];
$select = $_POST['category'];

$sql = "INSERT INTO `reconform` (`Title`, `Description`, `Name`, `Category`) VALUES ('$title', '$desc', '$name', '$select')";

if (mysqli_query($conn, $sql)) {
    echo "Data added Successfully";
} 

else {
    echo "Data wasn't added";
}



?>



