<?php

//yllka
 
$base_url = "http://localhost/UEB24_Gr25/";
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