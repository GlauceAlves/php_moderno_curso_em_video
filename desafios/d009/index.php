<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP - Media ponderada em php</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php

    $valor1 = $_GET['v1'] ?? 0;
    $peso1 =  $_GET['p1'] ?? 1;
    $valor2 = $_GET['v2'] ?? 0;
    $peso2 =  $_GET['p2'] ?? 2;

    ?>
    <main>
        <H1>Médias aritiméticas </H1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1"> Nota 1 </label>
            <input type="number" name="v1" id="v1" required value="<?php echo  $valor1 ?>" step="0.01">
            <label for="v1"> Peso 1 </label>
            <input type="number" name="p1" id="p1" required value="<?php echo  $peso2 ?>" step="0.01">
            <label for="v2"> Nota 2 </label>
            <input type="number" name="v2" id="v2" required value="<?php echo  $valor2 ?>" step="0.01">
            <label for="p2"> Peso 2 </label>
            <input type="number" name="p2" id="p1" required value="<?php echo  $peso2 ?>" step="0.01">
            <input type="submit" value="Calcula">

        </form>
    </main>


    <section id="resultado">

        <?php
        //caculos
        $ma = ($valor1 + $valor2) / 2;
        $mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);

        ?>

        <H2>Cáculos das médias</H2>
        <p>Analisando as notas <?=$valor1?> e <?=$valor2?> com seus respectivos pesos <?=$peso1?> e <?=$peso2?></p>
            <ul>
                <li> A <strong>Média Aritimética simples</strong> entre os valores é igual a <?=$ma?>.</li>
                <li> A <strong>Média Aritimética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> os valores é igual a <?=$mp?>.</i>
            </ul>
    </section>


</body>

</html>