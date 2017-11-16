<?php
$pronoms_personnels = array('Je', 'Tu', 'Il/Elle', 'Nous', 'Vous', 'Elles/Ils');

foreach ($pronoms_personnels as $pronom) {
    switch ($pronom) {
        case "Je":
        case "Il/Elle":
            echo $pronom . " code <br>";
            break;
        case "Tu":
            echo $pronom . " codes <br>";
            break;
        case "Nous":
            echo $pronom . " codons <br>";
            break;
        case "Vous":
            echo $pronom . " codez <br>";
            break;
        case "Elles/Ils":
            echo $pronom . " codent <br>";
            break;
    }
}

echo "<br>";

/*--------------------------------*/
?>


<?php

/*$nb = 1;
while ($nb <= 120) {
    echo $nb . "<br>";
    $nb++;
}*/

/*for ($i = 1; $i <= 120; $i++) {
    echo $i . "<br>";
}*/

/*--------------------------------*/
?>

<?php
$persons = ['kevin', 'Laureen', 'Nicolas', 'Jimmy', 'Marvin', 'Marie-Ange', 'Ilias', 'Omar'];

foreach ($persons as $person) {
    echo $person . "<br>";
}

echo "<br>";
/*--------------------------------*/
?>

<?php

$countries = ["Algeria", "Argentina", "Belgium", "Bolivia", "Canada", "China", "Spain", "Italy", "Portugal", "Russia"];
$countryAssoc = [];
for ($i = 0; $i < count($countries); $i++) {
    $country = $countries[$i];
    $code = strtoupper(substr($country, 0, 2));
    $countryAssoc[$code] = $country;
}
/*--------------------------------*/

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="">
    <select name="countries" class="countryList">
        <?php
        foreach ($countryAssoc as $code => $country) {
            echo "<option value='{$country}'>{$code}</option>";
        }
        ?>
    </select>
</form>
</body>
</html>