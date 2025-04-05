<?php
//yllka
//variablat globale: $_GET — për të marrë të dhëna nga URL query string, $_POST — për të marrë të dhëna nga forma, $_SESSION — për të ruajtur të dhëna midis faqeve (si përdoruesi që është loguar).,
// $_SERVER — për informata rreth serverit dhe kërkesës, $_COOKIE — për të lexuar cookie-t, $_FILES — për menaxhimin e file upload.

$lokacioni = $_GET['lokacion'] ?? 'prishtina';
$lloji = $_GET['lloji'] ?? 'apartment';

function filtro() {
    global $lokacioni, $lloji;
    echo "Filtrim për: $lloji në $lokacioni";
}

filtro();




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