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

                    <input class="input rounded-md bg-gray-200 placeholder-gray-500 ml-2 pl-2" type="text" name="raca" placeholder="Insira raça" />
                    <br><br>

                    <input class="input rounded-md bg-gray-200 placeholder-gray-500 ml-2 pl-2" type="number" name="numero" placeholder="Número para contato" />
                    <br><br> 
                    <!-- para fazer o formato do numero para o contato precisamos usar o js, com o regex-->

                    <input class="input rounded-md bg-gray-200 placeholder-gray-500 ml-2 pl-2" type="text" name="link" placeholder="Insira o link da foto dele(a)" />
                    <br><br>


                    <div class="rounded-md bg-gray-2">
                        <!-- div do select para o sexo -->
                        <div style="margin-bottom: 10px;">
                            <label for="genero">Sexo: </label>
                            <select name="sexo" id="sexo">

                                <option value="">---Selecione---</option>
                                <!-- Com o selected, mesmo que recarregue a página o valor colocado vai sem manter -->
                                <option value="M" <?php if ($sexo == 'M') {
                                                        echo "selected";
                                                    } ?>>Fêmea</option>
                                <option value="F" <?php if ($sexo == 'F') {
                                                        echo "selected";
                                                    } ?>>Macho</option>

                            </select>
                        </div>

                        
                        <!-- div do select para especie -->
                        <div style="margin-bottom: 10px;">
                            <label for="genero">Espécie: </label>
                            <select name="especie" id="especie">

                                <option value="">---Selecione---</option>
                                <!-- Com o selected, mesmo que recarregue a página o valor colocado vai sem manter -->
                                <option value="D" <?php if ($especie == 'D') {
                                                        echo "selected";
                                                    } ?>>Cachorro</option>
                                <option value="F" <?php if ($especie == 'F') {
                                                        echo "selected";
                                                    } ?>>Gato</option>
                                <option value="R" <?php if ($especie == 'R') {
                                                        echo "selected";
                                                    } ?>>Periquito</option>
                                <option value="O" <?php if ($especie == 'O') {
                                                        echo "selected";
                                                    } ?>>Outro</option>
                            </select>
                        </div>

                        <!-- div do select para o serviço -->
                        <div style="margin-bottom: 10px;">
                            <label for="servico">Serviços: </label>
                            <select name="servico" id="servico">

                                <option value="">---Selecione---</option>
                                <!-- Com o selected, mesmo que recarregue a página o valor colocado vai sem manter -->
                                <option value="M" <?php if ($servico == 'M') {
                                                        echo "selected";
                                                    } ?>>Banho</option>
                                <option value="F" <?php if ($servico == 'F') {
                                                        echo "selected";
                                                    } ?>>Tosa</option>
                                <option value="F" <?php if ($servico == 'F') {
                                                        echo "selected";
                                                    } ?>>Banho e Tosa</option>

                            </select>
                        </div>




                    </div>
            </div>

            <button class="bg-green-900 rounded-md ml-2 p-2 text-white" type="submit">Enviar</button>
            </form>
        </div>
    </div>




</html>

<!-- 
[ ] Script SQL para criar a tabela foi desenvolvido
[ ] Tabela e formulário possuem no mínimo 5 campos, sendo 2 selects
[ ] Aplicação possui funcionalidade de listagem, inserção e exclusão
[ ] Aplicação valida todos os campos como obrigatórios
[ ] Aplicação possui mais duas validações além dos campos obrigatórios
[ ] Aplicação foi estilizada com CSS
[ ] Aplicação possui uma página com listagem em forma de cards (extra)
[ ] Aplicação utilizou orientação a objetos (extra) -->


<!--nome do animal
    nome do dono
    raca do animal
    sexo do animal
    espécie do animal
    telefone para contato
    tipo de tratamento sla

    -->

<!-- ideias: podemos manter a ideia de colcoar a foto do bichano por url
    -->