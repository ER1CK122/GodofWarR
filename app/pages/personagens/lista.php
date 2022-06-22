<?php
include "/xampp/htdocs/GodofWarR/app/templates/header.php"

?>
  <div class="d-flex">
    <nav class="">
      <div class="logo-wrapper border-bottom">
        <a href="lista.php">
          <img src="/app/assets/images/GODR1 1.png" alt="" class="">
        </a>
      </div>
      
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><img src="../assets/images/personas.png" alt="" style="margin-right: 5px;"> - Personagens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><img src="./images/maps-icon.png" alt="" style="margin-right: 5px;"> - Lugares</a>
        </li>
      </ul>
    </nav>

    <main style="width: 100%; height:100vh;" class="border-start">
      <div style="height:90px" class="border-bottom"></div>

      <div class="container">
        <div class="" style="margin-top: 10px;">
          <h1 class=""><strong>Lista de Personagens de God of War: Ragnarök</strong></h1>
        </div>
        <div>Pesquisar</div>
        <input type="text" name="" id="filter" class="border rounded" style="margin-bottom: 10px;">

        <table class="table table-dark table-striped" id="myTable">
          <thead>
            <tr>
              <th>Codigo</th>
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
<?php
include "/xampp/htdocs/GodofWarR/app/templates/header.php"

?>