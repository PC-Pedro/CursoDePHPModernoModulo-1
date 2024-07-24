<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de String</title>
</head>
<body>
    <h1>Tipos de String</h1>
    <?php
    $nome = "Pedro";
    $snome = "Serafim";
    const NOME = "Pedro";
    echo "Seu nome é $nome \u{1F418} <br>";
    echo 'Seu nome é $nome \u{1F418} <br>';
    echo "Seu nome é " .NOME ,"<br>";
    echo "Estamos no ano " . date('Y') ,"<br>";
    echo "$nome \"Dudu\" $snome";

    ?>
    
</body>
</html>