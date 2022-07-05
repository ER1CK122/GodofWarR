<?php
include "../../templates/header.php";

include "../../assets/configs/configSql.php";
?>
  <main style="width: 100%; height:100vh;" class="border-start">
    <?php
      include "../../templates/header-2.php"
    ?>

    <div class="container">
      <div class="d-flex" style="margin-top: 10px;">
        <h1 class=""><strong>Lista de Personagens de God of War: Ragnarök</strong></h1>

        
        <a href="pages/personagens/cadastro.php"><button class="btn btn-outline-success ms-5">Cadastrar Personagens</button></a>
      </div>
      <div>Pesquisar</div>
      <input type="text" name="" id="filter" class="border rounded" style="margin-bottom: 10px;">

      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome de Usuario</th>
            <th>E-mail</th>
            <th>CPF</th>
            <th>Status</th>
          </tr>
        </thead>
        
        <tbody id="myTable">
          <tr>
            <th>1-</th>
            <th>ErickN</th>
            <th>ercknunes53@gmail.com</th>
            <th>100-442-459.04</th>
            <th>Aprovado</th>
          </tr>
        </tbody>
      </table>
    </div>
    </main>
  </div>

  <script src="assets/js/filter.js"></script>

<?php
  include "/xampp/htdocs/GodofWarR/app/templates/footer.php"
?>

