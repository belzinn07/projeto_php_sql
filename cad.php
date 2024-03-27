<?php
//pagina que vai inserir os dados no banco
include("conexao.php");//inclui as config. de conexao.php

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha= password_hash($_POST['senha'],PASSWORD_DEFAULT);

$consulta="INSERT INTO usuario(nome,email,senha)
VALUES ('$nome','$email','$senha')";//insere na tabela usuario  os valores que estão armazenado nas variaveis
if($conexao=mysqli_query($conexao,$consulta)){
    echo"Cadastro realizado com sucesso";
}
else{
    echo"Erro ao se cadastrar com o banco".mysqli_connect_error($conexao);
}


?>
