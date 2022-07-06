<?php
include "../../templates/header.php";

include "../../assets/configs/configSql.php";

include "../../assets/configs/configSql.php";

$query = "SELECT*FROM lugares";

$resul_query = mysqli_query($conn, $query) or die(' Erro na query:'. $query . '' . mysqli_error($conn));

?>
      <main style="width: 100%; height:100vh;" class="border-start">
      <?php
        include "../../templates/header-2.php"
      ?>

      <div class="container">
        <div class="d-flex" style="margin-top: 10px;">
          <h1 class=""><strong>Lista de Lugares de God of War: Ragnarök</strong></h1>

          
          <a href="pages/lugares/cadastro.php"><button class="btn btn-outline-success ms-5" style="margin-top: 5px;">Cadastrar Lugares</button></a>
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
          <?php 
            while($dados = mysqli_fetch_assoc($resul_query)){; 
          ?>
            <tr>
              <td><?php echo $dados["id"];?></td>
              <td><?php echo $dados["nomeLugares"];?></td>
              <td><?php echo $dados["mitologia"];?></td>
              <td><?php echo $dados["nomeMitologia"];?></td>
              <td><?php echo $dados["status"];?></td>
            </tr>
          <?php 
            }         
          ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <script src="assets/js/filter.js"></script>

<?php
   mysqli_close($conn);
  include "../../templates/footer.php"
?>

