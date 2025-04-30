<?php

/**
 * Classe para listar e criar usuários no banco de dados.
 * 
 * @author Cesar <cesar@celke.com.br>
 */
class Users extends Connection
{
/**
 * Conexão com o banco de dados. * @var object */
public object $conn;
 /**
 * Dados do formulário para criação de um novo usuário.
 * @var array
 */
    public array $formData;
/**
* Define os dados do formulário para criação de um novo usuário
* 
* @param array $formData Dados do formulário contendo informações do usuário.
 * @return void
 */
public function setFormData(array $formData): void
 {
 $this->formData = $formData;
}
/**
* Lista os usuários cadastrados no banco de dados.
* 
 * @return array Retorna um array contendo os dados dos usuários.
 */
 public function list(): array
 {
// Estabelece a conexão com o banco de dados.
$this->conn = $this->connect();
 // Consulta SQL para selecionar os dados dos usuários.
$sql = "SELECT id, name, email FROM users ORDER BY id DESC LIMIT 40";
 // Prepara a consulta SQL.
 $stmt = $this->conn->prepare($sql);
 // Executa a consulta no banco de dados.
 $stmt->execute();
 // Retorna os resultados da consulta como um array.
 return $stmt->fetchAll();
 }
 /**
 * Cria um novo usuário no banco de dados.
 * 
 * @return bool Retorna true se o usuário for criado com sucesso, false caso contrário.
 */
public function create(): bool {
// Estabelece a conexão com o banco de dados.
 $this->conn = $this->connect();
$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
$addUser = $this->conn->prepare($sql);
$addUser->bindParam(':name', $this->formData['name']);
$addUser->bindParam(':email', $this->formData['email']);
 $addUser->execute();
 if ($addUser->rowCount()) {
     return true;
} else {
 return false;
 }
 }
}
