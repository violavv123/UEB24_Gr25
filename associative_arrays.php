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


function getPersonByService($service, $personel) {
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


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedService = $_POST['sherbimi'];
    $person = getPersonByService($selectedService, $personel);

    if ($person) {
        $result = "<b>{$person['emri']}</b> është përgjegjës për shërbimin <b>{$selectedService}</b>. <br> Roli: {$person['role']}";
    } else {
        $result = "Nuk u gjet asnjë person për këtë shërbim.";
    }
}
?>

<div class="associative-arrays">
    <h2><strong>Shërbimet dhe Personeli</strong></h2>

   
    <form method="post">
        <label for="sherbimi">Zgjidhni shërbimin:</label>
        <select id="sherbimi" name="sherbimi">
            <?php
           
            foreach ($personel as $emri => $detajet) {
                foreach ($detajet['sherbime'] as $sherbimi) {
                    echo "<option value='$sherbimi'>$sherbimi</option>";
                }
            }
            ?>
        </select>

        <button type="submit">Përzgjedh</button>
    </form>


    <?php
    if (isset($result)) {
        echo "<div id='result'>$result</div>";
    }
    ?>
</div>
<style>
      h2 {
    text-align: center;
    color: #003366;
    margin-bottom: 20px;
  }

  form {
    background-color: #fff;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
  }

  label {
    font-weight: 600;
    margin-bottom: 8px;
    display: block;
    color: #333;
  }

  select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
    background-color: #fff;
    color: #333;
  }

  button {
    background-color: #003366;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #e6ac00;
  }

  #result {
    margin-top: 25px;
    background-color: #e9f7ef;
    padding: 15px 20px;
    border-left: 5px solid #28a745;
    border-radius: 8px;
    color: #155724;
    font-weight: 500;
  }
</style>

