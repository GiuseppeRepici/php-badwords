<?php
$testo = $_GET['testo'];
$testodaoscurare = $_GET['paroladaoscurare'];
$prova_replace = str_replace($testodaoscurare, '***', $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $testo . " " . strlen($testo); ?></h1>
    <h1> <?php echo $prova_replace . " " . strlen($testo); ?> </h1>
    
</body>
</html>