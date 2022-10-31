<?php
include "../../templates/header.html";

include "../../assets/configs/conexaoSql.php";

$query = "SELECT*FROM personagens";

$resul_query = mysqli_query($conn, $query) or die(' Erro na query:'. $query . '' . mysqli_error($conn));

?>
  <main style="width: 100%; height:100vh;" class="border-start">
    <?php
      include "../../templates/header-2.html";
    ?>

    <div class="container">
      <div class="d-flex" style="margin-top: 10px;">
        <h1 class=""><strong>Lista de Personagens de God of War: Ragnarök</strong></h1>
        
        <a href="pages/personagens/cadastro.php"><button class="btn btn-outline-success ms-5" style="margin-top: 5px;">Cadastrar Personagens</button></a>
      </div>
      <div>Pesquisar</div>
      <input type="text" name="" id="filter" class="border rounded ps-1" style="margin-bottom: 10px;">

      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome dos Personagens</th>
            <th>Mitologia</th>
            <th>Nome na Mitologia</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody id="myTable">
       <?php 
          while($dados = mysqli_fetch_array($resul_query)){; 
        ?>
       
          <tr>
            <td><?php echo $dados["id"];?></td>
            <td><?php echo $dados["nomePersonagem"];?></td>
            <td><?php echo $dados["mitologia"];?></td>
            <td><?php echo $dados["nomeMitologia"];?></td>
            <td><?php echo $dados["status"];?></td>
          </tr>
        
        <?php } ?>
        </tbody>
      </table>
    </div>
    </main>
  </div>

  <script src="assets/js/filter.js"></script>

<?php
  include "../../templates/footer.html";
  
  mysqli_close($conn);
?>