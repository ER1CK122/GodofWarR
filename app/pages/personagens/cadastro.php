<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <title>Cadastro de Personagens</title>
</head>

<body>
    <div class="text-center d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <h1 class=""><a href="../index.php"><img src="../assets/images/GODR1 1.png"></a></h1>

        <h1><strong>Cadastrar Personagens</strong></h1>

        <ul>
            <li>Nome do Personagem: <input type="text" name="" id="name-person" class="rounded" style="margin-bottom: 8px; padding:3px"></li>

            <li>Qual Mitologia: <input type="text" name="" id="mythology" class="rounded" style="margin-bottom: 8px; padding:3px"></li>
                
            <li>Nome na Mitologia: <input type="text" name="" id="name-mythology" class="rounded" style="margin-bottom: 8px; padding:3px"></li>
                
            <li>Status: <select name="" id="status" class="rounded" style="margin-bottom: 8px;"><option value="">Vivo</option><option value="">Morto</option></select></li>

            <li><button type="button" class="btn btn-outline-success">Enviar Cadastro</button></li>
        </ul>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</html>