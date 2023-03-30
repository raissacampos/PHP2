<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$A = 10; 
$B = 5; 
$C = 3; 

if ($A > $B and $A > $C) { 
    echo "A é o maior número". "<br>"; 
} elseif ($B > $A and $B > $C) {
    echo "B é o maior número". "<br>"; 
} else { 
    echo "C é o maior número". "<br>"; 
} if ($A > $B or $A > $C) {
     echo "A é maior que pelo menos um dos outros números". "<br>"; 
} else { 
    echo "A não é maior que nenhum dos outros números". "<br>"; }
    ?>
</body>
</html>