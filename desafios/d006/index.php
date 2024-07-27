<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP - Aanatomia da divisao</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php

    $dividendo = $_GET['d1'] ?? 0;
    $divisor = $_GET['d2'] ?? 1;

    ?>
    <main>
        <H2>Anatomia da divisão</H2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="d1"> Dividendo </label>
            <input type="number" name="d1" id="d1" min="0" value="<?php echo  $dividendo ?>">
            <label for="d2"> Divisor </label>
            <input type="number" name="d2" id="d2" min="1" value="<?php echo $divisor ?>">
            <input type="submit" value="Calcular">

        </form>
    </main>

    <section id="resultado">
        <H2>Estrutura da divisão</H2>
        <?php
        //caculos
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;

        echo "<ul>";
        echo "<li>Dividendo: $dividendo </li>";
        echo "<li>Divisor: $divisor</li>";
        echo "<li>Quociente: $quociente </li>";
        echo "<li>Resto: $resto</li>";
        echo "<ul>";
        $divisao = $dividendo + $divisor;
        print "<p>  . </p>";
        ?>
    </section>

    <section id="resultado">
    <H2>Ou com outro estilo</H2>
    <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $quociente ?></td>
                <td><?= $resto ?></td>
            </tr>
        </table>

    </section>

</body>

</html>