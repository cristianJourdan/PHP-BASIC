<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $prodcten = 28;
    if($producten < 10) {
        $prijs = 1.50;
    } elseif($producten < 20) {
        $prijs = 1.25;
    } else {
        $prijs = 1.00;
    }
    echo $prijs;
     ?>
</body>
</html>