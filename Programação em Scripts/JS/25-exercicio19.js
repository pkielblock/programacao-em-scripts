function checkData()
{
    let nome = document.getElementById("nome");
    let idade = parseInt(document.getElementById("idade").value);
    let sexo = document.getElementById("sexo").value;
    let dia = parseInt(document.getElementById("dia").value);
    let mes = parseInt(document.getElementById("mes").value);
    let ano = parseInt(document.getElementById("ano").value);
    let estadoCivil = document.getElementById("estadoCivil").value;
    let cpf = document.getElementById("cpf").value;
    let email = document.getElementById("email").value;

    if (nome.value.length > 150) {
        alert("Nome inválido");
        return false;
    } else if (idade <= 21) {
        alert("Idade inválida");
        return false;
    } else if (dia <= 0 || dia > 31) {
        alert("Dia inválido");
        return false;
    } else if (mes <= 0 || mes > 12) {
        alert("Mês inválido");
        return false;
    } else if (ano <= 1920 || ano > 2022) {
        alert("Ano inválido");
        return false;
    } else if (cpf.length != 11) {
        alert("CPF inválido");
        return false;
    } else if (email.search("@") == -1) {
        alert("Email inválido");
        return false;
    } else {
        alert(
            "Nome: " + nome.value + "\n" +
            "Idade: " + idade + "\n" +
            "Sexo: " + sexo + "\n" +
            "Data de nascimento: " + dia + "/" + mes + "/" + ano + "\n" +
            "Estado civil: " + estadoCivil + "\n" +
            "CPF: " + cpf + "\n" +
            "E-mail: " + email
        );
    }
}   