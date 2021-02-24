<?php
$testo = "questo è il mio testo";
$badword = $_GET["word"];
$rimpiazza = str_replace($badword , '***', $testo);
var_dump($testo)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1><?php echo $testo?></h1>
    <h2>Lunghezza : <?php echo strlen($testo);?></h2>
    <h3><?php echo ucfirst($rimpiazza); ?></h3>
    <?php var_dump($badword);?>
</body>
</html>