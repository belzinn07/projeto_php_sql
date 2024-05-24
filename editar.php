<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet"  href="css/bootstrap.min.css"  >
  </head>
  <body>

    <!-- faz a consulta para editar os dados do usuario -->
    <?php
    include("conexao.php");
    $id = $_GET["id"]??'';//a variavel id vai receber o  que pegar no id do banco, e  (??'')= é mesmo se não existir id (identificador único para cada usuario)
    //get puxa informações da coluna id no banco de dados

    $sql= "SELECT * FROM usuario  WHERE id=$id ";// a variavel sql vai receber o que foi selecionaedo na tabela usuario onde tem um id e vai armazenar na variavel id

    $dados=mysqli_query($conexao,$sql);// vai fazer uma consulta
    $linha=mysqli_fetch_assoc($dados);// a informação recebida vai ficar armazenada na variavel dados
    ?>


    <div class="contaimer">
        <div class="row">
            <div class="col">
            <h1>Alteração de dados</h1>
            <form  action="cad.php"  method="post">
                
  <div class="mb-3">
    <label for="nome" class="form-label">nome</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $linha ["nome"];?>">

    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" name="email" >

    <label for="senha" class="form-label">senha</label>
    <input type="password" class="form-control" name="senha">

    <input type="submit" class="btn btn-success" >
    
  </div>


  </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>