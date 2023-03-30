<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Pizzaria resultado</h1>
    <?php
        $nome=array(
            "(nenhum)",
            "Mussarela",
            "Calabresa",
            "Catupiry",
            "Aliche",
            "Frango",
            "Milho",
            "Atum",
            "Tomate",
            "Presunto");
        $preco=array(
            0.00,
            9.00,
            5.50,
            6.50,
            8.00,
            6.00,
            4.50,
            7.00,
            5.00,
            8.00);
        $total = 0;
        $resposta = "A sua pizza de ";
        for ($i=1;$i<=5;$i++){
            $ingrediente =
            $_REQUEST["Ingrediente". $i];
            if ($ingrediente>0) {
                $total = $total +
                $preco[$ingrediente];
                $resposta .=
                $nome[$ingrediente].", ";
            }
        }
        $resposta .= "irá custar R$";
        echo $resposta. $total;
        ?>
        <p>
            <input type="button" value="voltar" onclick="javascript:history.back();">
    </p>
</body>
</html>