<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas do PHP</title>
</head>
<body>
    <h1>Funções Aritméticas do PHP</h1>
    <h2>Valor usado como base para os calculos foi de 100 a 500</h2>
    <?php

     echo "Função abs<br>";
     $abs = abs(-500);
     echo "A resposta é $abs<br>";

     echo "Função base_convert<br>";
     $base = base_convert(500, 10, 8);
     echo "A resposta é $base<br>";

     //echo "Funções ceil - floor - round";
     //echo "Função hypot";

     echo "Função intdev<br>";
     $div = intdiv(500, 2);
     echo "A resposta é $div<br>";

     echo "Funções min - max<br>";
     $minimo = min(200, 500, 300, 100, 400);
     $maximo = max(200, 500, 300, 100, 400);
     echo "O valor minimo é $minimo e o valor máximo é $maximo<br>";

     echo "Função pi<br>";
     $pi = pi();
     echo "O valor de pi é $pi<br>";
    ?>
</body>
</html>