<?php
include "../assets/configs/conexaoSql.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <base href="http://localhost/GODOFWARR/app/">

    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/cms.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <title>God of War: Ragnarök</title>
  </head>

  <body style="width: 100%; height:100vh;">
    <header class="d-flex" style="width: 100%;">
      <div class="d-flex ms-auto">
        <div class="mt-3">Você já tem uma conta?</div>
        <a href="login/login.php"><button class="btn btn-primary ms-2 m-2">Entrar</button></a>
      </div> 
    </header>
    <main>  
      <div class="container d-flex flex-column justify-content-center" style="height: 90vh">
        <h1>Criar Conta</h1>

        <form action="" id="cadUsuario">
          <div class="row mb-3">
            <div class="col-12 col-sm-6">
              <label for="name">Nome de Usuario:</label>        
              <input type="text" name="name" id="name" class="form-control" style="margin-bottom: 8px; padding:3px" />
            </div>

            <div class="col-12 col-sm-6">
              <label for="email">E-mail:</label>
              <input type="text" name="email" id="email" class="form-control" style="margin-bottom: 8px; padding:3px" />
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-12 col-sm-6">
              <label for="senha">Senha:</label>
              <input type="text" name="senha" id="senha" class="form-control" style="margin-bottom: 8px; padding:3px" />
            </div>              

            <div class="col-12 col-sm-6">
              <label for="status">Status:</label>
              <select name="status" id="status" class="form-control" style="margin-bottom: 8px;"><option value="Aprovado">Aprovado</option><option value="Reprovado">Reprovado</option></select>
            </div>
          </div>

          <button type="button" class="btn btn-outline-success" id="cadastro">Enviar Cadastro</button> 
        </form>          
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/cadastro.js"></script>  
  </body>
</html>

<?php
  mysqli_close($conn);
?>