<?php
$famille = ["kev", "mach", "will"];
print_r($famille);
$plats = ["nouilles", "tacos", "pizza"];
print_r($plats);
$filmSeries = ["TWLKD", "Vikings", "House of Cards", "The Game"];
echo $filmSeries[3];
?>

<?php
$moi = [
    "naissance" => 1990,
    "prenom" => "kevin",
    "nom" => "Somao",
    "hobbies" => ["play", "eat", "sleep"]
];

$papa = [
    "naissance" => 1958,
    "prenom" => "jp",
    "nom" => "Somao",
    "hobbies" => ["music", "sing", "bricolage"]
];

/*-------------------------------*/
$moi["papa"] = $papa;

echo "<br>";
echo '<pre>';
print_r($moi);
echo '</pre>';

/*-------------------------------*/

$a = count($moi["hobbies"]);
$b = count($papa["hobbies"]);

echo $nbHobbies = $a + $b;
/*-------------------------------*/

$moi["hobbies"][] = "taxidermie";

/*-------------------------------*/

$moi["nom"] = "dieudonné";

/*-------------------------------*/

$toi = [
    "prenom" => "Farah",
    "hobbies" => ["go out", "eat", "read"]
];

$enfantHobbies = array_intersect($moi["hobbies"], $toi["hobbies"]);
$enfantHobbiesBis = array_merge($moi["hobbies"], $toi["hobbies"]);

echo "<br>";
echo '<pre>';
print_r(array_unique($enfantHobbiesBis));
echo '</pre>';
?>

<?php
$web_development = [];
$web_development["frontend"] = [];
$web_development["backend"] = [];
$web_development["frontend"][] = "xhtml";
$web_development["frontend"][] = "css";
$web_development["frontend"][] = "flash";
$web_development["frontend"][] = "javascript";
$web_development["backend"][] = "Ruby on Rails";

echo "<br>";
echo '<pre>';
print_r($web_development);
echo '</pre>';

$web_development["frontend"][0] = "html";
unset($web_development["frontend"][2]);

echo "<br>";
echo '<pre>';
print_r($web_development);
echo '</pre>';

?>





