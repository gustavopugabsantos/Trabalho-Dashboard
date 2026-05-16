function cadastrarCategorias() {
    let quantidade = Number(prompt("Quantas categorias você deseja cadastrar?"));

    for (let i = 1; i <= quantidade; i++) {
        let nomedacategoria = prompt("Digite o nome da categoria " + i + ":");

        if (nomedacategoria == "" || nomedacategoria == null) {
            console.log("Erro: O nome da categoria não pode ser vazio!");
        } else {
            console.log("Categoria [" + nomedacategoria + "] cadastrada com sucesso!");
        }
    }

    alert("Finalizado com Sucesso! Verifique o log de cadastros no F12.");
}
