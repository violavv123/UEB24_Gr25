<?php
$user = "root";
$pass ="";

try{
$conn = mysqli_connect("localhost",$user,$pass,"real_estate");

if(!$conn){
    throw new Exception ("Gabim gjate qasjes ne databaze me metoden mysqli!" . mysqli_connect_error());
    }   
        echo "<br>Komunikimi me databazë me metodën mysqli u krye me sukses!";

} catch (Exception $e){
 echo "<br>Gabim: " . $e->getMessage();
    die();
}
?>