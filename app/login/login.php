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

  <body>
    <header class="d-flex" style="width: 100%;">
      <div class="d-flex ms-auto">
        <div class="mt-3">Você ainda não tem uma conta?</div>
        <a href="login/criarConta.php"><button class="btn btn-primary ms-2 m-2">Criar Conta</button></a>
      </div> 
    </header>

    <main class="d-flex align-items-center justify-content-center" style="width: 100%; height: 90vh;">
      <div style="max-width: 600px;">
        <h1 class="mb-3">Entrar no <strong>God of War: Ragnarök</strong></h1>

        <form action="">
          <div class="mb-2">     
            <label for="name-person">Email:</label>        
            <input type="text" name="name-person" id="name-person" class="form-control" style="margin-bottom: 8px; padding:3px">
          </div>
          
          <div class="mb-2">
            <label for="mythology">Senha:</label>
            <input type="text" name="mythology" id="mythology" class="form-control" style="margin-bottom: 8px; padding:3px">
          </div>

          <a href="pages/personagens/lista.php"><button type="button" class="btn btn-outline-success">Logar</button></a> 
        </form>          
      </div>
    </main>
  </body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/cadastro.js"></script>
</html>