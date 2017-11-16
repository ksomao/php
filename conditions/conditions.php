<?php

$temperature = 30;

if ($temperature >= 15) {
    $vetement_du_jour = "T-shirt <br>";

} else {
    $vetement_du_jour = "Pull-over <br>";
}
echo $vetement_du_jour;

echo "<br>";
/*-----------------------------------------------*/
?>


<?php
$chambreSale = true;

if ($chambreSale) {
    echo "Range ta chambre, on dirait la cage d'un bonobo! <br>";
} else {
    echo "Ta chambre est trop propre, vis un peu! <br>";
}

echo "<br>";
/*-----------------------------------------------*/
?>

<?php
$etatChambre = "propre";
if ($etatChambre == "sale") {
    echo "Range ta chambre, on dirait la cage d'un bonobo! <br>";
} else if ($etatChambre == "propre") {
    echo "Ta chambre est trop propre, vis un peu! <br>";
} else if ($etatChambre == "dégoutante") {
    echo "raaaaaaaaaaaaaaange meeeeeeeeeerdeeeeeeeeeeuh !!! <br>";
}

echo "<br>";
/*-----------------------------------------------*/
?>

<?php
$heure = 12;

if ($heure >= 5 && $heure <= 9) {
    echo "Bonjour <br>";
} elseif ($heure > 9 && $heure <= 12) {
    echo "Bonne journee <br>";
} elseif ($heure > 12 && $heure <= 16) {
    echo "Bon aprem <br>";
} elseif ($heure > 16 && $heure <= 21) {
    echo "Bonne soirée <br>";
} elseif ($heure > 21 && $heure < 5) {
    echo "Bonne nuit <br>";
}
echo "<br>"
/*----------------------------------------------*/
?>


<?php
extract($_GET);

$message = "";

if (isset($gender) && isset($gender) && isset($choice)) {
    if ($age <= 12) {
        if ($choice == "yes") {
            if ($gender == "h") {
                $message = "hello boy";
            } else {
                $message = "hello girl";
            }
        } else {
            if ($gender == "h") {
                $message = "salut petit";
            } else {
                $message = "salut petite";
            }
        }
    } elseif ($age > 12 && $age <= 18) {
        if ($choice == "yes") {
            if ($gender == "h") {
                $message = "Hello Teenage boy";
            } else {
                $message = "Hello Teenage girl!";
            }
        } else {
            if ($gender == "h") {
                $message = "Salut l'adolescent !";
            } else {
                $message = "Salut l'adolescente !";
            }
        }

    } elseif ($age > 18 && $age <= 115) {
        if ($choice == "yes") {
            if ($gender == "h") {
                $message = "Hello Sir!";
            } else {
                $message = "Hello Lady!";
            }
        } else {
            if ($gender == "h") {
                $message = "Salut l'adulte!";
            } else {
                $message = "Wow! Toujours vivant?";
            }
        }
    }
}
/*----------------------------------------------*/
?>

<?php
$messageNotes = "";
if (isset($note)) {
    if ($note >= 1 && $note <= 3) {
        $messageNotes = "ce travail est nul";
    } elseif ($note >= 6 && $note <= 9) {
        $messageNotes = "Ce travail n'est pas terrible.";
    } elseif ($note == 10) {
        $messageNotes = "Tout juste!";
    } elseif ($note >= 11 && $note <= 14) {
        $messageNotes = "C'est pas mal.";
    } elseif ($note >= 15 && $note <= 18) {
        $messageNotes = "Bravo!";
    } elseif ($note >= 19 && $note <= 20) {
        $messageNotes = "Police! Arrêtez ce tricheur!";
    }
}
/*----------------------------------------------*/
?>

<?php
$age = 22;
$sexe = "h";

if ($age >= 21 && $age <= 40 && $sexe =="f") {
    echo "Bonjour, bienvenue parmi nous!";
} else {
    echo "Désolé, vous ne remplissez pas les critères de sélection";
}
echo "<br><br>";

/*----------------------------------------------*/
?>

<?php
$age = 22;
$sexe = "f";
$msg = "Désolé, vous ne remplissez pas les critères de sélection";

if ($age >= 21 && $age <= 40 && $sexe =="f") {
    $msg = "Bonjour, bienvenue parmi nous!";
}
echo $msg;

echo "<br>";
/*----------------------------------------------*/
?>

<!doctype html>
<html lang="en">
<head>
    <style>
        .age, .note {
            border: 5px solid rgba(0, 255, 255, 0.2);
            font-family: sans-serif;
            border-radius: 10px;
            background: lightcyan;
            width: 250px;
            padding: 10px;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

<div class="age">
    <h2>How old are you ?</h2>
    <form>
        <div>
            <input type="number" name="age">
        </div>
        <br>
        <input type="radio" class="form-check-input" name="gender" value="h">
        <label>H</label>
        <input type="radio" class="form-check-input" name="gender" value="f">
        <label>F</label>
        <div>
            <h3>do you speak english ?</h3>
            <input type="radio" class="form-check-input" name="choice" value="yes">
            <label>yes</label>
        </div>
        <br>
        <div>
            <input type="submit">
        </div>
        <br>
        <h3><?= $message ?></h3>
    </form>
</div>
<br>
<div class="note">
    <h2>Student Notes</h2>
    <form>
        <div>
            <input type="number" name="note">
        </div>
        <br>
        <div>
            <input type="submit">
        </div>
        <br>
        <h3><?php echo $messageNotes ?></h3>
    </form>
</div>


</body>
</html>
