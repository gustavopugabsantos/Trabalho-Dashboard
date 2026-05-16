<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }

        .container{
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h1{
            text-align: center;
        }

        .usuario{
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
        }

        button{
            margin-top: 10px;
            margin-right: 5px;
            padding: 8px;
            border: none;
            cursor: pointer;
            color: white;
        }

        .excluir{
            background: red;
        }

        .editar{
            background: orange;
        }

        a{
            display: block;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Usuários Cadastrados</h1>

        <div id="listaUsuarios"></div>

        <a href="cadastro.php">Voltar para cadastro</a>
    </div>

    <script>
        const listaUsuarios = document.getElementById("listaUsuarios");

        let lista = JSON.parse(localStorage.getItem("usuarios")) || [];

        function mostrarUsuarios(){
            listaUsuarios.innerHTML = "";

            lista.forEach((usuario, index) => {

                listaUsuarios.innerHTML += `
                    <div class="usuario">
                        <p><strong>Nome:</strong> ${usuario.nome}</p>
                        <p><strong>Email:</strong> ${usuario.email}</p>

                        <button class="editar" onclick="editar(${index})">
                            Editar
                        </button>

                        <button class="excluir" onclick="excluir(${index})">
                            Excluir
                        </button>
                    </div>
                `;
            });
        }

        function excluir(index){
            lista.splice(index, 1);

            localStorage.setItem("usuarios", JSON.stringify(lista));

            mostrarUsuarios();
        }

        function editar(index){

            let novoNome = prompt("Digite o novo nome:", lista[index].nome);

            let novoEmail = prompt("Digite o novo email:", lista[index].email);

            if(novoNome && novoEmail){

                lista[index].nome = novoNome;
                lista[index].email = novoEmail;

                localStorage.setItem("usuarios", JSON.stringify(lista));

                mostrarUsuarios();
            }
        }

        mostrarUsuarios();
    </script>

</body>
</html>