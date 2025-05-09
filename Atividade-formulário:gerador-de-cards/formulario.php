<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class=" m-auto  text-center content-center bg-gray-900 items-center">

    <div class="m-auto pt-4 full-box flex content-center items-center w-80 grid min-h-screen ">
        <div class="bg-gray-500 rounded-xl p-2">
            <h2 class="h2 bg-gray-700 rounded-xl items-center text-center text-white p-2">Insira os dados do seu pet </h2>

            <div class="p-4">
                <form class="pt-4" method="POST"
                    action="card.php">


                    <input class="input rounded-md bg-gray-200 placeholder-gray-500 ml-2 pl-2" type="text" name="nome" placeholder="Insira o nome do bichano" />
                    <br><br>

                    <input class="input rounded-md bg-gray-200 placeholder-gray-500 ml-2 pl-2" type="text" name="dono" placeholder="Insira o nome do Dono " />
                    <br><br>

                    <input class="input rounded-md bg-gray-200 placeholder-gray-500 ml-2 pl-2" type="text" name="ano" placeholder="Insira o ano de nascimento" />
                    <br><br>

                    <input class="input rounded-md bg-gray-200 placeholder-gray-500 ml-2 pl-2" type="text" name="link" placeholder="Insira o link da foto dele(a)" />
                    <br><br>

                    <input class="input rounded-md bg-gray-200 placeholder-gray-500 ml-2 pl-2" type="text" name="raca" placeholder="Insira a raça dele(a)" />
                    <br><br>
            </div>

            <button class="bg-green-900 rounded-md ml-2 p-2 text-white" type="submit">Enviar</button>
            </form>
        </div>
    </div>




</html>
