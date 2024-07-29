<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
</head>
<body>
    <header>
        <h1>Sorteador de números</h1>
    </header>
    <main>
        <?php 
        $min = 0;
        $max = 1000;
        $num = mt_rand($min, $max);

        echo "<p>Valor sorteado <strong> $num</strong></p>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Sortear outro</button>
    </main>
</body>
</html>