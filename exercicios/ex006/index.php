<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO RETRO ALIMENTADO</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    //FORMULARIO RETRO ALIMENTADO
    //CAPTURANDO OS DADOS DO FORMULARIO
    $valor1 = $_GET['v1'] ?? 18;
    $valor2 = $_GET['v2'] ?? 55;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1"> Valor 1 </label>
            <input type="number" name="v1" id="v1" value="<?php echo  $valor1 ?>">
            <label for="v2"> Senha</label>
            <input type="number" name="v2" id="v2" value="<?php echo $valor2 ?>">
            <input type="submit" value="Somar">

        </form>
    </main>

    <section id="resultado">
        <H2>Resultado da Soma</H2>
        <?php
        $soma = $valor1 + $valor2;
        print "<p> A soma entre $valor1 e $valor2 é igual a $soma. </p>";
        ?>

    </section>

</body>

</html>