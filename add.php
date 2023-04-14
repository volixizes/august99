<?php

include "db_connect.php";

$add_title = $_POST ['add_title'];
$add_isbn = $_POST ['add_isbn'];
$add_author = $_POST ['add_author'];
$add_pub = $_POST ['add_pub'];
$add_year = $_POST ['add_year'];
$add_category = $_POST ['add_category'];

$sql = "INSERT INTO `books`
( 
`title`, 
`isbn`, 
`author`, 
`publisher`, 
`year_published`, 
`category`) 
VALUES ('$add_title',
'$add_isbn',
'$add_author',
'$add_pub',
'$add_year',
'$add_category')";

if (mysqli_query($conn,$sql)){
    echo json_encode(array("statuscode" => 200));
}else{
    echo json_encode(array("statuscode" => 201));
}

mysqli_close($conn);

?>