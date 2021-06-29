function vazio (campo){
    let n = campo.value;
    if (n.lenght == 0){
        window.alert("Campos vazios. Favor informar algum dado!");
        campo.value = "";
        campo.focus();
        return false;
    }
    return true;
}

function validar() {
    let n1 = document.dados.nome;
    let n2 = document.dados.cpf;
    let n3 = document.dados.datanasc;
    let n4 = document.dados.email;

    if (validar(n1) && validar(n2) && validar(n3) && validar(n4))
    {
        document.dados.cadastrar;
    }
}