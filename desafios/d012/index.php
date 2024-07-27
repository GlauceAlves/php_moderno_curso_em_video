<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP - Calculador de tempo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php

    $total = $_GET['tot'] ?? 0;

    ?>
    <main>
        <H1> Calculadora de tempo</H1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="tot"> Total </label>
            <input type="number" name="tot" id="tot" value="<?php echo  $total ?>" min="0.10" step="0.01">
            <input type="submit" value="Calcula">

        </form>
    </main>


    <section id="resultado">

        <?php
        //caculos
        $sobra = $total;
        //Total semanas
        $semana = (int)($sobra / 604_800);
        $sobra = (int)($sobra % 604_800);
        // Total de dias
        $dia = (int)($sobra / 86_400);
        $sobra = (int)($sobra % 86_400);
        // Total de horas
        $hora = (int)($sobra / 3_600);
        $sobra = (int)($sobra % 3_600);
        // Total de minutos
        $minuto = (int)($sobra / 60);
        $sobra = (int)($sobra % 60);        
        // Total de segundos
        $segundo = $sobra;
        

        ?>

        <H2>Totalizando</H2>
        <p>Analisando o valor que voce digitou <strong><?= $total ?></strong></p>
        <ul>
            <li> Total de semanas <strong><?= $semana ?></strong>.</li>
            <li> Total de dias <strong><?= $hora ?></strong>.</li>
            <li> Total de horas <strong><?= $dia ?></strong>.</li>
            <li> Total de minutos <strong><?= $minuto ?></strong>.</li>
            <li> Total de segundos <strong><?= $segundo ?></strong>.</li>

        </ul>
    </section>


</body>

</html>