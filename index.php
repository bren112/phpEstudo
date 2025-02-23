<?php
    require_once('config.php');

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prontuário Veterinário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <form id="area-busca" action="index.php" method="get">
            <input type="text" name="valorBusca" placeholder="Informe nome do Animal">
            <button>Buscar</button>
        </form>


    <br>
    <hr>
    <br>
    <section id="resultados">

        <?php 
            $AnimalView = new AnimalView();
            $AnimalView->ExibirTodosAnimais()
        ?>

    </section>

</body>
</html>