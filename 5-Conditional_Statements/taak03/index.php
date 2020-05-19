<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $test1_ = 3;
    $test2_ = 6;
    if ($test1 == $test2) {
        echo "gelijk"
    }else{
        echo "de vergelijking is niet gelijk";
    }
    if ($test1 != $test2) {
        echo "ongelijk"
    }else{
        echo "de vergelijking is gelijk";
    }
    if ($test1 === $test2) {
        echo "identiek"
    }else{
        echo "de vergelijking is niet identiek";
    }
    if ($test1 > $test2) {
        echo "groter dan"
    }else{
        echo "de vergelijking is kleiner dan";
    }
    if ($test1 < $test2) {
        echo "kleiner dan"
    }else{
        echo "de vergelijking is groter dan";
    }
    if ($test1 >= $test2) {
        echo "groter of gelijk aan"
    }else{
        echo "de vergelijking is kleiner of gelijk aan";
    }
    if ($test1 <= $test2) {
        echo "kleiner of gelijk aan"
    }else{
        echo "de vergelijking is groter of gelijk aan";
    }
     ?>
</body>
</html>