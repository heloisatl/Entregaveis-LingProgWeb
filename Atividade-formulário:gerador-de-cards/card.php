<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 flex items-center justify-center min-h-screen">

    <?php
    $nome = $_POST["nome"];
    $dono = $_POST["dono"];
    $ano = $_POST["ano"];
    $link = $_POST["link"];
    $raca = $_POST["raca"];
    ?>
<div class="bg-white shadow-lg rounded-lg w-80 p-4">
    <h2 class="font-bold text-center">Dados do Pet:</h2>
    <img src="<?php echo $link; ?>" alt="Imagem do bichano" class="w-full h-auto rounded" />
    <h2 class="text-xl font-bold text-center mt-4 text-gray-800"> <?php echo $nome; ?></h2>
    <p class="text-gray-600 mt-2">Dono: <?php echo $dono; ?></p>
    <p class="text-gray-600">Ano de nascimento: <?php echo $ano; ?></p>
    <p class="text-gray-600">Espécie: <?php echo $raca; ?></p>


    <a href="formulario.php" class="block mt-4 text-center bg-blue-900 hover:bg-blue-900/95 hover:text-gray-300 text-white font-bold py-2 px-4 rounded">
        Voltar
    </a>
</div>


</body>

</html>
