<?php
$ds ="mysql:host=localhost; dbname=real_estate; ";
$user = "root";
$pass ="";
$conn = mysqli_connect("localhost",$user,$pass,"test_ligjerata");
if(!$conn){
    echo "<br> Gabim gjate qasjes ne databaze me metoden mysqli!".mysqli_connect_error();
    die();
}else{
    echo"<br> Komunikimi me databaze me metoden mysqli u krye me sukses!";
}
?>