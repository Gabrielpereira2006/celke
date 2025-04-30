<?php
session_start();
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
<a href="create.php">Cadastrar</a><br><br>
 <h2>Listar Usuários</h2>
<?ph
 if (isset($_SESSION['msg'])) {
echo $_SESSION['msg'];
unset($_SESSION['msg']);
}
require './Connection.php';
require './Users.php';
$listUsers = new Users();
$resultUsers = $listUsers->list();
foreach ($resultUsers as $rowUser) {
extract($rowUser);
echo "ID: $id <br>";
echo "Nome: $name <br>";
echo "E-mail: $email <br>";
echo "<a href='view.php?id=$id'>Visualizar</a><br>";
echo "<a href='edit.php?id=$id'>Editar</a><br>";   
echo "<a href='delete.php?id=$id'>apagar</a><br>";   
 echo "<hr>";
}
 ?>
</body>
</html>