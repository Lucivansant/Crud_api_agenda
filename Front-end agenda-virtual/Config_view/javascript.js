function Atualizar(id, num) {
    // criando o form 
    let form = document.createElement("form");
    form.method = "POST";
    form.action = "index.php";

    // criando input
    let input = document.createElement("input");
    input.type = "text";
    input.className = "form-control";
    input.name = "input_atualizar";
    input.value = num

    // input hidden
    let input_hidden = document.createElement("input");
    input_hidden.type = "hidden";
    input_hidden.name = "input_hidden";
    input_hidden.value = id;

    // criando botão
    let button = document.createElement("button");
    button.type = "submit";
    button.className = "btn btn-info";
    button.innerHTML = "Atualizar";
    button.id = "btn-form-atualizar";

    form.appendChild(input_hidden);
    form.appendChild(input);
    form.appendChild(button);

    console.log(form);


    let numero = document.getElementById("num_" + id);
    numero.innerHTML = "";


    numero.insertBefore(form, numero[0]);



}

function Deletar(id) {

    location.href = 'index.php?id=' + id;

}