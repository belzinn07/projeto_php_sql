<?php
//pagina que vai inserir os dados no banco
include("conexao.php");//inclui as config. de conexao.php
$id=$_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha= password_hash($_POST['senha'],PASSWORD_DEFAULT);

$consulta= "UPDATE usuario se nome ='$nome' , email = '$email' , senha = '$senha'
WHERE id= $id";





if($conexao=mysqli_query($conexao,$consulta)){
    echo"Cadastro realizado com sucesso";
}
else{
    echo"Erro ao se cadastrar com o banco".mysqli_connect_error($conexao);
}


?>
