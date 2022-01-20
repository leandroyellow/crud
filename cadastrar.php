<?php
require 'php/config.php';
require 'php/DAO/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'telefone');

if($nome && $email && $telefone){
   if($usuarioDao->findEmail($email) === false){
      $usuarioDao = new Usuario();
      $usuarioDao->setNome($nome);
      $usuarioDao->setEmail($email);
      $usuarioDao->setTelefone($telefone);

      $usuarioDao->add($novoUsusario);

      echo "<h1>Cadastro com Sucesso</h1>";
      echo "<a href='index.php'>Voltar</a>";
   }else{
      header("Location: index.php");
      exit;
   }
   
}else{
   header("Location: index.php");
   exit;
}
