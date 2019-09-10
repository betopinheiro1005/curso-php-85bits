<?php

session_start();

if(isset($_SESSION['usuario'])){
  echo "Seja bem vindo {$_SESSION['usuario']}!<br>";
  echo "Senha: {$_SESSION['senha']}";
}else{
  echo "Usuário não definido!";
}
