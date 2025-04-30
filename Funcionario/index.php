<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>

<body>

    <?php
    // Inclui o arquivo que contém a classe Funcionario
    require './Funcionario.php';

    // Inclui o arquivo que contém a classe Bonus, que estende Funcionario
    require './Bonus.php';

    // Cria uma instância da classe Funcionario
    $funcionario = new Funcionario();
    $funcionario->nome = "Cesar"; // Define o nome do funcionário
    $funcionario->salario = 7961.52; // Define o salário do funcionário
    echo $funcionario->verSalario(); // Exibe o salário formatado do funcionário

    // Atributo privado não pode ser acessado fora da classe
    // echo $funcionario->salarioConvertido;

    // Atributo protegido somente pode ser acessado pela classe e pela classe filha
    // echo $funcionario->bonus;

    // Método privado não pode ser acessado fora da classe
    // echo $funcionario->converterSalario(7961.77);

    // Método protegido somente pode ser acessado pela classe e pela classe filha
    // echo $funcionario->bonusCalculado();

    // Cria uma instância da classe Bonus, que herda de Funcionario
    $funcionarioBonus = new Bonus();
    echo $funcionarioBonus->verBonus(); // Exibe o bônus formatado do funcionário
    ?>

</body>

</html>
