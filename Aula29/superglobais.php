<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
               echo "<h1>Superglobal Get</h1>";
               var_dump($_GET);

               echo "<h1>Superglobal Post</h1>";
               var_dump($_POST);

               echo "<h1>Superglobal Request</h1>";
               var_dump($_REQUEST);

               echo "<h1>Superglobal Globals</h1>";
               var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>