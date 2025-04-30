<?php

// Inicia a sessão para armazenar e acessar variáveis de sessão.
session_start();

/**
 * Ativa o buffer de saída para permitir redirecionamentos após o envio de cabeçalhos.
 */
ob_start();

/**
 * Obtém e sanitiza o ID do usuário da URL.
 * 
 * @var int|null $id ID do usuário ou null se não fornecido.
 */
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Importa a classe Connection que estabelece a conexão com o banco de dados.
require './Connection.php';

// Importa a classe Users que realiza a consulta ao usuário.
require './Users.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>
<body>
 <a href="index.php">Listar</a><br>
<a href="view.php?id=<?php echo $id ?? ''; ?>">Visualizar</a><br><br>
<h2>Cadastrar Usuário</h2>
<?php
$formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (!empty($formData['EditUser'])) {
     $updateUser = new Users();

        $updateUser->setFormData($formData);
        $value = $updateUser->edit();

        if ($value) {

         $_SESSION['msg'] = "<p style='color: #086;'>Usuário editado com sucesso!</p>";
         header("Location: view.php?id=$id");
  } else {
     echo "<p style='color: #f00;'>Usuário não editado!</p>";
}
}



    if (!empty($id)) {

        $viewUser = new Users();
        $viewUser->setId($id);

        $valueUser = $viewUser->view();

        if (isset($valueUser['id'])) {
            extract($valueUser);
 } else {
$_SESSION['msg'] = "<p style='color: #f00;'>Usuário não encontrado!</p>";
header("Location: index.php");
  return;
  }
}
?>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id ?? ''; ?>">
<label>Nome: </label>
<input type="text" name="name" placeholder="Nome completo" value="<?php echo $name ?? ''; ?>" required><br><br>
<label>E-mail: </label>
<input type="email" name="email" placeholder="Melhor e-mail" value="<?php echo $email ?? ''; ?>" required><br><br>
<input type="submit" name="EditUser" value="Editar">
</form>
</body>
</html>
