<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>celke</title>
</head>
<body>
<?php
require './ICurso.php';
require './CursoGraduacao.php';
require './CursoPosGraduacao.php';
$cursoGraduacao = new CursoGraduacao();
echo $cursoGraduacao->disciplina("Desenvolvimento web");
echo $cursoGraduacao->professor("cesar");
   
$cursoPosGraduacao = new CursoPosGraduacao();
echo $cursoPosGraduacao->disciplina("redeee.");
echo $cursoPosGraduacao->professor("kelye");
    ?>
</body>
</html>