<?php

/**
 * Classe Bonus
 * 
 * Esta classe estende a classe Funcionario e adiciona funcionalidade para 
 * visualizar o bônus de um funcionário. Ela demonstra o uso de herança em PHP 
 * e acesso a métodos protegidos da classe pai.
 * 
 * @package App
 */
class Bonus extends Funcionario
{
    /**
     * Exibe o valor do bônus do funcionário formatado como string.
     * 
     * Este método utiliza o método protegido bonusCalculado() da classe pai
     * para obter o valor formatado do bônus.
     * 
     * @return string Mensagem indicando o valor do bônus do funcionário.
     */
    public function verBonus(): string
    {
        // Chama o método protegido da classe Funcionario para obter o valor do bônus
        return "O funcionário tem o bônus de R$ " . $this->bonusCalculado() . "<br>";
    }
}
