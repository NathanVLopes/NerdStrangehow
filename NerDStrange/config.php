<?php

   $dbHost = 'Localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'cadastro';


   $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   //if($conexao->connect_errno)
  // {
   //   echo "erro:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
   //}
   //else
  // {
  //    echo "Sucesso";
  // }
?>