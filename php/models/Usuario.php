<?php
class Usuario {
   private $id;
   private $nome;
   private $email;
   private $telefone;

   public function getId() {
      return $this->id;
   }
   public function setId($i) {
      $this->id = trim($i);
   }

   public function getNome() {
      return $this->nome;
   }
   public function setNome($n) {
      $this->nome = trim($n);
   }

   public function getEmail() {
      return $this->email;
   }
   public function setEmail($e) {
      $this->email = trim($e);
   }

   public function getTelefone() {
      return $this->telefone;
   }
   public function setTelefone($t) {
      $this->telefone = trim($t);
   }
}

interface UsuarioDAO {
   public function add(Usuario $u);
   public function findAll();
   public function findId($id);
   public function findEmail($email);
   public function update(Usuario $u);
   public function delete($id);
}





