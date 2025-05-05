<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

    <?php

    require './Funcionario.php';

    require './Bonus.php';

    $funcionario = new Funcionario();
    $funcionario->nome = "Cesar";
    $funcionario->salario = 7961.52; 
    echo $funcionario->verSalario(); 

    $funcionarioBonus = new Bonus();
    echo $funcionarioBonus->verBonus();
    ?>

</body>

</html>
