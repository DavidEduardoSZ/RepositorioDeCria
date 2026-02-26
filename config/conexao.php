<?php
 
class Conexao
{
 
  //variavel de conexao
  private $host = '10.91.45.43'; //IP DO BANCO DE DADOS
  private $db = 'imobiliaria'; // NOME DO BANCO DE DADOS
  private $user = 'admin'; // USUARIO
  private $pass = '123456'; // SENHA
 
  public function conexao()
  {
 
    try {
      //configura a conexao com as informacoes do banco de dados
 
      $pdo = new PDO("mysql:host={$this->host};dbname={$this->db};charset=utf8", $this->user, $this->pass);
      //configura o PDO para lancar os erros como excessoes  
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
      return $pdo;
    } catch (PDOException $err) {
      die("Erro na conexão" . $err->getMessage());
      return null;
    }
  }
}
 