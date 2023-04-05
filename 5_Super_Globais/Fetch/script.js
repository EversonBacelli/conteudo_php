function buscarDados() {
    var form = document.querySelector("form")
    var codigo = document.querySelector("#cod");
    var nome = document.querySelector("#nome");
    var preco = document.querySelector("#preco");
    var qtd = document.querySelector("#qtd");

    let dados = {
        codigo: codigo.value,
        nome: nome.value,
        preco: preco.value,
        qtd: qtd.value
    }

    form.reset()

    fetch("http://localhost:8081/meusProjetos/PW2/4_Super_Globais/Fetch/backEnd.php",{
        method: 'POST', 
        headers: {Accept: "Content-Type: application/json"},
        body: JSON.stringify(dados)
    })
    .then(function(response){
        //console.log(response.status);
        //location.reload();
        console.log(response)
    })
}

var btn = document.querySelector("#btn")

btn.addEventListener('click', buscarDados)

