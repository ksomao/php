<?php
function firstLetterToUC($mot)
{
    return ucfirst($mot);
}

echo firstLetterToUC("emilie");

echo "<br>";
/*----------------------------------------*/

function returnYear()
{
    return date("Y");
}

echo returnYear();
echo "<br>";
/*----------------------------------------*/

function returnDate()
{
    return date("h:m:s");
}

echo returnDate();
echo "<br>";
/*----------------------------------------*/

/*----------------------------------------*/

function somme($a, $b)
{

    if (!is_int($a) || !is_int($b)) {
        return "Erreur, argument non numérique";
    }
    return $a + $b;
}

echo somme(4, 7);
echo "<br>";
/*----------------------------------------*/


function returnInitiales($phrase)
{
    $wordArr = explode(" ", $phrase);
    $newWord = "";
    foreach ($wordArr as $word) {
        $newWord .= ucfirst(substr($word, 0, 1));
    }

    return $newWord;
}

echo returnInitiales("In code we trust");
echo "<br>";
/*----------------------------------------*/

function replaceChar($word)
{
    $letters = str_split($word);
    $toDelete = 0;
    for ($i = 0; $i < count($letters); $i++) {
        if ($letters[$i] == "a") {
            if ($letters[$i + 1] == "e") {
                $letters[$i] = "æ";
                $toDelete = $i + 1;
            }
        }
    }
    unset($letters[$toDelete]);
    return implode("", $letters) . "<br>";
}

echo replaceChar("caecotrophie");

/*----------------------------------------*/

function replaceChar2($word)
{
    $word = str_replace("æ", "ae", $word);
    return $word;
}

echo replaceChar2("cæcotrophie");

/*----------------------------------------*/


function feedback($msg, $class = "info")
{
    return "<div class='$class'>$msg</div>";
}

echo feedback("adresse email incorrecte", "warning");

/*----------------------------------------*/

function generateurMot($a, $b)
{
    $randomNumberSize = rand($a, $b);
    $mot = "";
    for ($i = 0; $i < $randomNumberSize; $i++) {
        $mot .= chr(rand(97, 122));
    }
    return $mot;
}

/*----------------------------------------*/

function toLowerCase($msg)
{
    return strtolower($msg);
}

echo toLowerCase("ARRETE DE CRIER JE N'ENTENDS PLUS RIEN!!!");
echo "<br>";
/*----------------------------------------*/

function volume($r,$h){
    $volume = $r * $r * 3.14 * $h * (1/3);

    return $volume;
}

echo volume(3, 4);
echo "<br>";
/*----------------------------------------*/

function reverseString($txt)
{
    return strrev($txt);
}

echo reverseString("je suis renverse");
echo "<br>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form{
            margin-top:20px;
            background: lightgray;
            width: 200px;
            padding:20px;
            border-radius: 5px;
            font-family:sans-serif;
        }
    </style>
</head>
<body>
<div></div>

<form action="">
    <div>
        <input type="submit" value="generer 2 mots">
    </div>
    <br>
    <?= "mot 1:".generateurMot(1, 5) . "<br>" . "mot 2:".generateurMot(7, 15); ?>
</form>
</body>
</html>