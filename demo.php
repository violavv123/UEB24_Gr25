<?php

//yllka
 
$base_url = "http://localhost/UEB2/UEB24_Gr25/";
 function getAssetPath($assetName) {
     global $base_url;
     return rtrim($base_url, "/") . "/assets/" . $assetName;
 }
 
 $assets = [
     "blog3.png", "blog4.jpg", "blog5.webp", "blog6.webp", "blog7.jpg", "blog8.webp",
     "blog31.png", "blog41.webp", "blog51.avif", "blog52.avif", "blog53.avif",
     "blog54.avif", "blog55.avif", "blog61.jpg", "blog71.webp", "blog72.jpg",
     "blog73.jpg", "blog74.jpg", "blog75.webp", "blog76.jpg", "blog81.jpg", "blog82.webp"
 ];
 
 foreach ($assets as $asset) {
     echo getAssetPath($asset) . "<br>";
 }
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);


    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "Please fill out all fields.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address.";
        exit;
    }

    if (!preg_match("/^\d+$/", $phone)) {
        echo "Please enter a valid phone number (only numbers).";
        exit;
    }

    echo "Thank you, $name! We have received your message.";

} else {
    echo "Invalid request.";
}





//---------------------------------------------------------------------------------------------------
//rudina


//---------------------------------------------------------------------------------------------------
//riga


//----------------------------------------------------------------------------------------------------
//uranit


//----------------------------------------------------------------------------------------------------
//viola


//----------------------------------------------------------------------------------------------------


?>