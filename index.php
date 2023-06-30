<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="stylesheet" href="css/stylee1p.css">
</head>
<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h2>Login User</h2>
                        </div>
                        <div class="card-body">

                            <form action="views/includes/validaLogin.php" method="post">
                                <!-- <input type="hidden" name="acao" value="loginuser"> -->

                                <div class="mb-3">
                                    <label>Nome</label>
                                    <input type="text" name="usuario" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>E-mail</label>
                                    <input type="email" name="email" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Senha</label>
                                    <input type="password" name="senha" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                    <!-- <a href="?view=principal" class="btn btn-primary" id="logEntrar">
                                        <i class="bx bxs-magic-wand"></i>
                                        <span>Entrar</span>
                                    </a> -->
                                    <!-- <a href="views/PDF.php" class="btn btn-primary" id="logEntrar">
                                        <i class="bx bxs-magic-wand"></i>
                                        <span>PDF</span>
                                    </a> -->
                                </div>
                            </form>
                           <!--  <div class="sign_up">
                                <a href="views/includes/dashboard.php" class="btn btn-primary" id="logEntrar">
                                    <span><h5>Sign-up</h5></span>
                                     <i class="bx bxs-magic-wand"></i> 
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>
</html>

