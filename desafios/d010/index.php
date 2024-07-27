<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP - Máquina do tempo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    $atual = date("Y");
    $nasc = $_GET['nasc'] ?? 2000;
    $ano = $_GET['ano'] ?? $atual;

    ?>
    <main>
        <H1>Calculando sua idade </H1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc"> Em que ano voce nasceu? </label>
            <input type="number" name="nasc" id="nasc" required value="<?php echo  $nasc ?>" min= "1900">
            <label for="ano"> Quer saber sua idade em que ano? (atualmente estamos no ano <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="ano"  required value="<?php echo  $ano ?>" min="1900">

            <input type="submit" value="Qual será a minha idade">

        </form>
    </main>


    <section id="resultado">

        <?php
        //caculos
        $idade =  $ano - $nasc ;

        ?>

        <H2>Resultado</H2>
        <p>Quem nasceu em <?= $nasc ?> vai ter <?= $idade ?> <strong>anos</strong> em <?= $ano ?></p>
 
    </section>


</body>

</html>