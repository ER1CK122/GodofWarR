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
          <h1 class=""><strong>Lista de Lugares de God of War: Ragnarök</strong></h1>

          
          <a href="pages/lugares/cadastro.php"><button class="btn btn-outline-success ms-5">Cadastrar Lugares</button></a>
        </div>
        <div>Pesquisar</div>
        <input type="text" name="" id="filter" class="border rounded" style="margin-bottom: 10px;">

        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome dos Lugares</th>
              <th>Mitologia</th>
              <th>Nome na Mitologia</th>
              <th>Status</th>
            </tr>
          </thead>
          
          <tbody id="myTable">
            <tr>
              <th>1-</th>
              <th>Midgard</th>
              <th>Nórdica</th>
              <th>O Reino dos Humanos</th>
              <th>Vivo</th>
            </tr>
            <tr>
              <th>2-</th>
              <th>Asgard</th>
              <th>Nórdica</th>
              <th>O Reino dos Aesir</th>
              <th>Vivo</th>
            </tr>
            <tr>
              <th>3-</th>
              <th>Vanaheim</th>
              <th>Nórdica</th>
              <th>O Reino dos Vanir</th>
              <th>Vivo</th>
            </tr>
            <tr>
              <th>4-</th>
              <th>Jotunheim</th>
              <th>Nórdica</th>
              <th>O Reino dos Gigantes</th>
              <th>Vivo</th>
            </tr>
            <tr>
              <th>5-</th>
              <th>Niflheim</th>
              <th>Nórdica</th>
              <th>O Reino do Gelo</th>
              <th>Vivo</th>
            </tr>
            <tr>
              <th>6-</th>
              <th>Muspelheim</th>
              <th>Nórdica</th>
              <th>O Reino do Fogo</th>
              <th>Vivo</th>
            </tr>
            <tr>
              <th>7-</th>
              <th>Alfheim</th>
              <th>Nórdica</th>
              <th>O Reino dos Elfos</th>
              <th>Vivo</th>
            </tr>
            <tr>
              <th>8-</th>
              <th>Svartalfheim</th>
              <th>Nórdica</th>
              <th>O Reino dos Anões</th>
              <th>Vivo</th>
            </tr>
            <tr>
              <th>9-</th>
              <th>Helheim</th>
              <th>Nórdica</th>
              <th>O Reino dos Mortos</th>
              <th>Vivo</th>
            </tr>
            <tr>
              <th>10-</th>
              <th>Reino do Céu</th>
              <th>Grega</th>
              <th>Lugar dos Deuses</th>
              <th>Vivo</th>
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

