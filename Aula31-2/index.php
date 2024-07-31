<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo com PHP</title>
</head>
<body>
    <h1> Salário Mínimo com PHP</h1>
    <?php 
    $salario = $_GET["salario"] ?? 0;

    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Informe seu salário R$</label>
            <input type="number" name="salario" id="salario" value="<?$salario?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
       <h1>Resultado</h1>
       <?php 
        $salarioMin = $salario / 1412;
        $salarioMinInt = intval($salarioMin);
        $resto = $salario % 1412;
        echo "<p>Seu salário equivale a <strong>$salarioMinInt</strong> salários minimos mais <strong>R$ $resto</strong></p>";

        ?>
    </section>
</body>
</html>