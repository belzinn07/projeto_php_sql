<?php //faz a conexao com o banco de dados
$host="localhost";
$user="root";
$senha="";
$banco="provainfor";

if ($conexao = mysqli_connect($host,$user,$senha,$banco)){
   // echo"conexão realizada com sucesso";
}else{
  //echo"Erro na conexão";
}


?>