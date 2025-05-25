<?php
$personel = [
    "Uranit Vuçitërna" => [
        "role" => "Agjent",
        "sherbime" => [
            "Shitja e pasurive",
            "Qiradhënia e pasurive",
            "Konsulencë imobiliare"
        ]
    ],
    "Riga Zubaku" => [
        "role" => "Menaxhere për suksesin e klientëve",
        "sherbime" => [
            "Menaxhimi i marrëdhënieve me klientët",
            "Sigurimi i shërbimit të shkëlqyer për klientët",
            "Konsulencë për klientët"
        ]
    ],
    "Yllka Fejzullahu" => [
        "role" => "Agjente kryesore",
        "sherbime" => [
            "Konsulencë për shitjen e pasurive të luksit",
            "Përgatitja e dokumentacionit të shitjes",
            "Negociata me blerësit"
        ]
    ],
    "Viola Resyli" => [
        "role" => "CEO",
        "sherbime" => [
            "Strategji për zhvillimin e biznesit",
            "Marrëdhënie me partnerë dhe investitorë",
            "Menaxhimi i ekipit"
        ]
    ],
    "Rudina Bulliqi" => [
        "role" => "Specialiste e marketingut",
        "sherbime" => [
            "Fushata marketingu për pasuri",
            "Përgatitja e materialeve promocionale",
            "Analiza e tregut dhe pozicionimi"
        ]
    ]
];

function getPersonByService($service, $personel)
{
    foreach ($personel as $emri => $detajet) {
        if (in_array($service, $detajet['sherbime'])) {
            return [
                'emri' => $emri,
                'role' => $detajet['role']
            ];
        }
    }
    return null;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sherbimi'])) {
    $selectedService = $_POST['sherbimi'];
    $person = getPersonByService($selectedService, $personel);

    if ($person) {
        echo "<b>{$person['emri']}</b> është përgjegjës për shërbimin <b>{$selectedService}</b>. <br> Roli: {$person['role']}";
    } else {
        echo "Nuk u gjet asnjë person për këtë shërbim.";
    }
} else {
    echo "Request not valid.";
}
?>