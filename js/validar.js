function enviardados() {

    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var end = document.getElementById("end").value;
    var cep = document.getElementById("cep").value;


    if (nome == "") {
        alert("preencha o campo nome");
        return false;

    }
}

document.getElementById('enviar').onc