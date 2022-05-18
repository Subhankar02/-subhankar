<?php
$host="localhost";
$username="root";
$password="";
$database="restu";
$con=new mysqli($host,$username,$password,$database);
if($con->connect_error){
    die("ERROR:".$con->connect_error);
}
// else{
//     echo "connect";
// }
?>