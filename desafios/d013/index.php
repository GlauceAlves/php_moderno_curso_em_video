<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP - Caixa eletronico</title>
    <link rel="stylesheet" href="../css/style.css">

<style>
    .img.nota{
        height: 50px;
        margin: 5px;
    }
</style>

</head>

<body>
    <?php

    $saque = $_GET['saque'] ?? 0;


    ?>
    <main>
        <H1> Calculadora de tempo</H1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque"> Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="saque" id="saque" required value="<?php echo  $saque ?>" min="5" step="5">
            <p style="font-size: 0.6rem;"><sup>*</sup>Notas disponíveis : R$ 100, R$ 50 , R$ 10, R$ 5</p> 
            <input type="submit" value="Sacar">

        </form>
    </main>


    <section id="resultado">

        <?php
        //caculos
        $resto = $saque;

        //saque de R$100
        $tot100 = floor($resto / 100);
        $resto %= 100;

        //saque de R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;

        //saque de R$10
        $tot10 = floor($resto / 10);
        $resto %= 10;        

        //saques de  R$ 5
        $tot5 = floor($resto / 5);
        $resto %= 5;
        ?>

        <H2>Saque de R$ <?= number_format($saque,2) ?> realizado</H2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        <ul>
            <li> <img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x <strong><?= $tot100 ?></strong>.</li>
            <li> <img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x <strong><?= $tot50 ?></strong>.</li>
            <li> <img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x <strong><?= $tot10 ?></strong>.</li>
            <li> <img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota">x <strong><?= $tot5 ?></strong>.</li>

        </ul>
    </section>


</body>

</html>