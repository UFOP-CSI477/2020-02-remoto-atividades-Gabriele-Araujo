<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORMULÁRIO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">


</head>
<body>
    <form action="validar.php" method="post">
        
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome completo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="cpf">CPF: </label>
            <input type="text" name="cpf" id="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="xxx.xxx.xxx-xx" class="form-control" required>
        </div>

        <div>
            <label class="form-check-label">Sexo: </label>
            
            <div class="form-group form-check">
                <input type="radio" name="sexo" id="masculino" value="M" class="form-check-input" required>
                <label for="masculino" class="form-check-label">Masculino</label>
            </div>
            <div class="form-group form-check">
                <input type="radio" name="sexo" id="feminino" value="F" class="form-check-input" required>
                <label for="feminino" class="form-check-label">Feminino</label>
            </div>
        </div>

        <div class="form-group">
            <label for="telefone">Data de nascimento: </label>
            <input type="date" name="datanasc" id="datanasc" required>
        </div>

        <div class="form-group">
            <label for="endereco">Endereço: </label>
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereço" class="form-control" required> 
        </div>

        <div class="form-group">
            <label for="telefone">Telefone: </label>
            <input type="tel" name="telefone" id="telefone" size="3" maxlength="3" placeholder="DDD" required> 
            <input type="tel" name="telefone" id="telefone" placeholder="Telefone" maxlength="9" required>
        </div>

        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@web.ufop.edu.br" placeholder="email@web.ufop.edu.br" class="form-control" required>
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-success">
        <input type="reset" value="Limpar" class="btn btn-danger">
        <!-- <button onclick= "window.location.href = 'introducao.html';">Voltar</button> -->

    </form>
</body>
</html>