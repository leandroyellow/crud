<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulário de cadastro</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <h1>Cadastrar Usuário</h1>
   <form action="cadastrar.php" method="post">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
      <label for="telefone">Telefone:</label>
      <input type="text" name="telefone" id="telefone">
      <div><button>Cadastrar</button></div>
   </form>
</body>
</html>