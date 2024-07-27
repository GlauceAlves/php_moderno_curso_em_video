<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP - Raiz Quadrada e raiz cúbica </title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    $salario = $_GET['sal'] ?? 1380.60;

    ?>
    <main>
    <H1>Informe seu salário</H1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="sal"> Salário (R$) </label>
            <input type="number" name="sal" id="sal" min="1" value="<?php echo  $salario ?>" step="0.01">
            <p>Considerando o salário mínimo de <strong> R$<?=number_format($minimo,2,",",".")?></strong></p>
            <input type="submit" value="Calcula">

        </form>
    </main>

    
    <section id="resultado">
        <H2>Resultado final</H2>
        <?php
        //caculos
        $tot = intdiv($salario, $minimo);
        $dif = $salario % $minimo;

        echo "<p> Quem recebe um salário de R\$". number_format($salario,2,",","."). " ganha 
        <strong>$tot salários mínimos</strong> + R\$ ". number_format($dif,2 ,",",".")  ;
        
        ?>
    </section>

 
</body>

</html>

