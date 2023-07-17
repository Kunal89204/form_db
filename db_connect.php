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

 ?>