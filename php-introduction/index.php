<?php $image = "http://wackymania.com/image/2010/11/coifs-dogs/coifs-dogs-09.jpg";
$_GET["nom"] = "Valerian"
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
<?php include "nav.php" ?>
<h1>Bonjour <?php echo $_GET["nom"]?> !</h1>
<img src="<?= $image ?>"></img>
</body>
</html>