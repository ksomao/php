<?php
extract($_GET);
$messageNotes = "";
if (isset($note)) {
    switch ($note) {
        case 1:
        case 2:
        case 3:
            $messageNotes = "ce travail est nul";
            break;
        case 6:
        case 7:
        case 8:
        case 9:
            $messageNotes = "Ce travail n'est pas terrible.";
            break;
        case 10:
            $messageNotes = "Tout juste!";
            break;
        case 11:
        case 12:
        case 13:
        case 14:
            $messageNotes = "C'est pas mal";
            break;
        case 15:
        case 16:
        case 17:
        case 18:
            $messageNotes = "Bravo";
            break;
        case 19:
        case 20:
            $messageNotes = "Police! Arrêtez ce tricheur!";
            break;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <style>
        .note {
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
