<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .placaname {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }
</style>
<body>
    <div class="container mt-5 w-50 mx-auto">
<h1 class="placaname">Cadastro de Aluno</h1>
        <form action="recebe.php" method="POST">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome"><br>
            <label for="idade">Idade:</label><br>
            <input type="number" name="idade" class="form-control" placeholder="Digite sua idade"><br>
            <label for="sexo"> sexo: </label><br>
            <input type="radio" name="sexo" value="masculino" checked="checked">Masculino<br>
            <input type="radio" name="sexo" value="feminino">Feminino<br>
            <input type="radio" name="sexo" value="outro">Outro<br><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" class="form-control" placeholder="Digite seu email"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>