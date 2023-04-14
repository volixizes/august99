<!-- sql -->
<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "library";

$conn = mysqli_connect($servername, $username, $pass, $dbname);

if ($conn){
    echo "<script>console.log('ok')</script>";
    
} else {
    echo "<script>console.log('error')</script>";
}


?>