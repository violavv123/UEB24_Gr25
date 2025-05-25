<?php
$user = "root";
$pass ="";

try{
$conn = mysqli_connect("localhost",$user,$pass,"real_estate");

if(!$conn){
    throw new Exception ("Gabim gjate qasjes ne databaze me metoden mysqli!" . mysqli_connect_error());
    }   

} catch (Exception $e){
 echo "<br>Gabim: " . $e->getMessage();
    die();
}
?>