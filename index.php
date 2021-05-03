<?php 
    $par = "Una bellissima giornata, se non fosse per questa pioggia di merda";
    $badword = $_GET["badword"];
    $parCens = str_replace($badword, '***', $par);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP badwords</title>
    </head>
    <body>
        <h1>Frase censurata: <?php echo $parCens?></h1>
        <p>Lunghezza frase: <?php echo strlen($parCens) ?></p>
    </body>
</html>