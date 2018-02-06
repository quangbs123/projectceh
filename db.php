<?php 

$db_name = "projectceh";
$mysql_user = "root";
$mysql_password = "";
$server_name = "localhost";

$conn = mysqli_connect($server_name, $mysql_user, $mysql_password, $db_name);

if(!$conn){
 
   	echo "Ket noi that bai";
 
}else{
 
    echo"Ket noi thanh cong";
 
}

?>


