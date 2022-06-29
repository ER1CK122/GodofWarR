<?php
include "../../templates/header.php"
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

      <table class="table table-dark table-striped" id="myTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome dos Personagens</th>
            <th>Mitologia</th>
            <th>Nome na Mitologia</th>
            <th>Status</th>
          </tr>
        </thead>
        
        <tbody>
          <tr>
            <th>1-</th>
            <th>Kratos</th>
            <th>Grega, Nórdica</th>
            <th>Deus da Guerra</th>
            <th>Vivo</th>
          </tr>
          <tr>
            <th>2-</th>
            <th>Atreus</th>
            <th>Nórdica</th>
            <th>Futuro Deus da Mentira</th>
            <th>Vivo</th>
          </tr>
          <tr>
            <th>3-</th>
            <th>Mimir</th>
            <th>Nórdica</th>
            <th>O Sábio</th>
            <th>Vivo</th>
          </tr>
          <tr>
            <th>4-</th>
            <th>Freya</th>
            <th>Nórdica</th>
            <th>Deusa do Amor</th>
            <th>Vivo</th>
          </tr>
          <tr>
            <th>5-</th>
            <th>Brok</th>
            <th>Nórdica</th>
            <th>Os Irmãos Ferreiros</th>
            <th>Vivo</th>
          </tr>
          <tr>
            <th>6-</th>
            <th>Sindri</th>
            <th>Nórdica</th>
            <th>Os Irmãos Ferreiros</th>
            <th>Vivo</th>
          </tr>
          <tr>
            <th>7-</th>
            <th>Durlin</th>
            <th>Nórdica</th>
            <th>Mercador dos Deuses</th>
            <th>Vivo</th>
          </tr>
          <tr>
            <th>8-</th>
            <th>Týr</th>
            <th>Nórdica</th>
            <th>Deus do céu</th>
            <th>Vivo</th>
          </tr>
          <tr>
            <th>9-</th>
            <th>Thor</th>
            <th>Nórdicaa</th>
            <th>Deus dos Trovões</th>
            <th>Vivo</th>
          </tr>
          <tr>
            <th>10-</th>
            <th>Angrboda</th>
            <th>Nórdica</th>
            <th>Jotun</th>
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

