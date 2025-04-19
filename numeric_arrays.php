<div class="numeric-arrays">

<h2 >Kontrollo nëse ofrojmë shërbime në qytetin tënd</h2>
<form id="phpForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
     <label for="qyteti">Shkruaj qytetin:</label>
     <input type="text" name="qyteti" id="qyteti" required>
     <button type="submit">Kontrollo</button>
 </form>
 <?php
 
 $qytetet = ["Peja", "Prishtina", "Prizreni", "Gjakova", "Ferizaj", "Gjilani", "Podujeva","Mitrovica"];

 function kontrolloQytetin($qytet, $listaQyteteve) {
     if (in_array($qytet, $listaQyteteve)) {
         return " $qytet është në listën tonë të shërbimit.";
     } else {
         return " Na vjen keq, $qytet nuk është në listën tonë.";
     }
 }

 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $qytetiPerTeKontrolluar = trim($_POST["qyteti"]);
     echo "<p>" . kontrolloQytetin($qytetiPerTeKontrolluar, $qytetet) . "</p>";
 }
 ?> 

 </div>

 <style>
    .numeric-arrays {
    background-color: #fff;
    border: 2px solid #003366; 
    border-radius: 15px;
    padding: 30px;
    max-width: 500px;
    margin: auto;
    margin-bottom: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .numeric-arrays h2 {
    color: #003366; 
    text-align: center;
    margin-bottom: 25px;
  }

  .numeric-arrays label {
    font-weight: bold;
    color: #000;
    display: block;
    margin-bottom: 8px;
  }

  .numeric-arrays input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 16px;
  }

  .numeric-arrays button {
    background-color:#003366 ; 
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%;
  }

  .numeric-arrays button:hover {
    background-color: #e6ac00;
  }

  .numeric-arrays p {
    font-size: 18px;
    margin-top: 20px;
    text-align: center;
    color: black;
  }
 </style>