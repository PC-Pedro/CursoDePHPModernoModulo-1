<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
        $n = $_GET["numero"];
        $a = $_GET["numero"] - 1;
        $p = $_GET["numero"] + 1;

        echo "Número escolhido $n <br>Seu antecessor $a <br>Seu sucessor $p";
        ?>
        <p><a href="javascript:history.go(-1)">&#x2B05Voltar para a página anterior</a></p>
    </main>
    
</body>
</html>