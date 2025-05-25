<?php
$qytetet = ["Peja", "Prishtina", "Prizreni", "Gjakova", "Ferizaj", "Gjilani", "Podujeva", "Mitrovica"];

function kontrolloQytetin($qytet, $listaQyteteve) {
    $qytet = trim($qytet);
    if (in_array($qytet, $listaQyteteve)) {
        return "$qytet është në listën tonë të shërbimit.";
    } else {
        return "Na vjen keq, $qytet nuk është në listën tonë.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $qytetiPerTeKontrolluar = $_POST["qyteti"] ?? '';
    echo kontrolloQytetin($qytetiPerTeKontrolluar, $qytetet);
}
?>