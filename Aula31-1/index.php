<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>A anatomia de uma divisão</h1>
    <?php 
    $dividendo = $_GET["dividendo"] ?? 0;
    $divisor = $_GET["divisor"] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    
    <section>
        <h1>Estrutura da divisão</h1>

        <?php 

        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;

        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
               <td><?=$resto?></td>
               <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>