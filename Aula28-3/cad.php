<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Valor convertido em dólar</h1>
        <h2><strong>Cotação fixa em 5,66</strong></h2>
    </header>

    <main>
        <?php 
        $real = $_GET["valor"];
        $v = $_GET["valor"] / 5.66;

        $valor = number_format($v, 2, ".", ".");
        
        echo "Seu saldo em dólar é de US$ $valor";

        ?>
    </main>
    
</body>
</html>