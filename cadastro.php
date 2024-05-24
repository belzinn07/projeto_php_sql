<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastre-se</h1>
                <form action="cad.php" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" name="nome"><!--name é o indentificador-->

                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">

                        <label for="senha" class="form-label">senha</label>
                        <input type="password" class="form-control" name="senha">

                        <input type="submit" class="btn btn-success">
                    </div>
                </form>

            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>