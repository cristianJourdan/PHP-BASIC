<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $var1 = 6;
    $var1 = 12;
if($var1 < 10 && $var1 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
}if else($var1 < 10 ! $var1 > 5){
    echo "de vergelijking klopt niet"
}if else($var1 < 10 xor $var1 > 5){
    echo ("een van deze vergelijkingen klopt")
}if else($var1 < 10 || $var1 > 5){
    echo ("1 of 2 waardes kloppen")
}
else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
}
 
     ?>
</body>
</html>