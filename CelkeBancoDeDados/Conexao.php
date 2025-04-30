<?php

/**
 * Classe responsável pela conexão com o banco de dados.
 * 
 * @author Cesar <cesar@celke.com.br>
 */
class Conexao
{

    public string $host = "localhost";
    public string $usuario = "root";
    public string $senha = "";
    public string $dbnome = "celke";
    public int $porta = 3306;
    public object|null $conexao = null;
     public function conectar()
     {
     try{

 $this->conexao = new PDO("mysql:host={$this->host};dbname=" . $this->dbnome, $this->usuario, $this->senha);
return $this->conexao;
}catch (Exception $e){
die("Conexão com banco de dados não realizada: " . $e->getMessage());
return false;
}
}
}