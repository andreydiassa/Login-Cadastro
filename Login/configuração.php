<?php

  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = 'zoro';
  $dbName = 'zorologin';

  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
  
  if ($conexao->connect_errno) {
    echo "Deu erro"
  } 
  else {
    echo "Conexão efetuada com sucesso"
  }
  
?>