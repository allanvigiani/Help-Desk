<html>
  <head>
    <meta charset="utf-8" />
    <title>Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }

      .link {
          margin-left: 40px;
      }

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Cadastro Help Desk
            </div>
            <div class="card-body">
              <form action="scripts/validar_cadastro.php" method="post"> <!-- action = destino de um submit do forumlário -->
                <!-- 
                  GET -> passa os parâmetro via url
                  POST -> anexa os dados (parâmetros) na própria requisição
                -->
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                </div>
                <!-- TODO 
                    1 - Verificar se o usuário já cadastrado
                    3 - Cadastrar com sucesso.
                 -->
                <?php
                  # Super global $_GET
                  # isset() -> verifica se um valor específico está setado dentro da super global GET
                  if(isset($_GET['cadastro']) && $_GET["cadastro"] == "success") {

                ?>

                  <div class="alert alert-success text-center mb-3">
                    Cadastrado com sucesso.
                  </div>

                <?php };?>

                <?php 

                  if (isset($_GET['cadastro']) && $_GET["cadastro"] == "empty") {

                ?>

                  <div class="alert alert-warning text-center mb-3">
                    Preencha todos os campos.
                  </div>

                <?php } ?>

                <?php 

                  if (isset($_GET['cadastro']) && $_GET['cadastro'] == "exist") {
                
                ?>
                
                  <div class="alert alert-danger text-center mb-3">
                    Email já cadastrado.
                  </div>

                <?php }; ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
                <a class="link" href="index.php"><button type="button" class="btn btn-link mt-4 text-center">Já é cadastrado? Faça Login</button></a>

              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
  <script src="scripts/index.js"></script>
</html>