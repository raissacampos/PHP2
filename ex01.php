<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
</head>
<body>
    <h1>Loop Options Pizzaria</h1>
    <h2>Monte sua pizza</h2>
    <form action="ex01resultado.php" method="post">

    <p>
        Ingredientes:
    </p>

    <?php
    for($i=1;$i<=5;$i++){
    ?>
    <p>
        <?php echo $i. ". "; ?>
        <select name="Ingrediente<?php echo $i;?>">
        <option value="0">(Nenhum)</option>
        <option value="1">(Mussarela)</option>
        <option value="2">(Calabresa)</option>
        <option value="3">(Catupiry)</option>
        <option value="4">(Aliche)</option>
        <option value="5">(Frango)</option>
        <option value="6">(Milho)</option>
        <option value="7">(Atum)</option>
        <option value="8">(Tomate)</option>
        <option value="9">(Presunto)</option>
    </select>
    </p>
    <?php
    }
    ?>
    <p><input type="submit" value="Calcular o preço"></p>
</form>
</body>
</html>