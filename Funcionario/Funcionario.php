<?php

/**
 * Classe Funcionario
 * 
 * Esta classe representa um funcionário com nome e salário. Ela possui métodos
 * para visualizar o salário formatado, converter o salário para um formato 
 * monetário padrão, e calcular o bônus. A classe também utiliza propriedades
 * públicas, privadas e protegidas para demonstrar diferentes níveis de 
 * encapsulamento.
 * 
 * @package App
 */
class Funcionario
{

    /**
     * Nome do funcionário.
     * @var string
     */
    public string $nome;

    /**
     * Salário do funcionário.
     * @var float
     */
    public float $salario;

    /**
     * Salário convertido para string formatada.
     * Este atributo é privado e só pode ser acessado dentro da classe.
     * @var string
     */
    private string $salarioConvertido;

    /**
     * Bônus padrão aplicado ao funcionário.
     * Este atributo é protegido e pode ser acessado em subclasses.
     * @var float
     */
    protected float $bonus = 2500;

    /**
     * Retorna o salário do funcionário formatado como string.
     * 
     * @return string Mensagem com o nome do funcionário e o salário formatado.
     */
    public function verSalario(): string
    {
        // Exibe o nome do funcionário e o salário formatado
        return "O funcionário {$this->nome} tem o salário R$ {$this->converterSalario($this->salario)}<br>";
    }

    /**
     * Converte o salário em um formato monetário padrão.
     * 
     * Este método é privado e só pode ser chamado dentro da classe.
     * 
     * @param float $salario Salário a ser convertido.
     * @return string Salário formatado em string.
     */
    private function converterSalario(float $salario): string
    {
        // Formata o salário para o formato brasileiro (decimal com vírgula e ponto)
        $this->salarioConvertido = number_format($salario, 2, ',', '.');

        return $this->salarioConvertido;
    }

    /**
     * Calcula e retorna o bônus formatado.
     * 
     * Este método é protegido e pode ser chamado por classes derivadas.
     * 
     * @return string Bônus formatado como string.
     */
    protected function bonusCalculado(): string
    {
        // Converte e retorna o valor do bônus formatado
        return $this->converterSalario($this->bonus);
    }
}
