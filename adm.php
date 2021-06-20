<?php
    session_start();
    if (isset($_SESSION["autenticado"]) && $_SESSION["autenticado"] == "SIM") {
      if ($_SESSION["email"] == "adm@adm.com") {
      } else {
        header('Location: index.php?login=erro_adm');
      }
    } else {
      header('Location: index.php?login=erro_session');
    }

?>

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
              Login Help Desk
            </div>
            <div class="card-body">
              Administração do sistema.
            </div>
          </div>
        </div>
    </div>
  </body>
  <script src="scripts/index.js"></script>
</html>