<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP - Reajuste de preços</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    $preco = $_REQUEST['preco'] ?? '0';
    $reaj = $_REQUEST['reaj'] ?? '10';

    ?>
    <main>
        <H1>Reajustador de preços </H1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco"> Preço do produto (R$) </label>
            <input type="number" name="preco" id="preco" value="<?php echo  $preco ?>" min= "0.10" step=0.01 >

            <label for="reaj"> Qual será o percentual de reajuste ? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?php echo $reaj ?>">

            <input type="submit" value="Reajustar">

        </form>
    </main>

    <section id="resultado">

        <?php
        //caculos
        $aumento = $preco * $reaj / 100;
        $novo = $aumento + $preco;
        ?>

        <H2>Resultado do reajuste</H2>
        <p> O produto que custava R$ <?= number_format($preco,2)?>, com <strong> <?=$reaj ?>% de aumento </strong>
         vai passar a custar <strong>R$ <?= number_format($novo,2) ?></strong> a partir de agora.</p>
 
    </section>
    <script>
        //declarações automaticas 
        mudaValor()

        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>