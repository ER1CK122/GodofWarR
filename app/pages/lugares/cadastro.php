<?php
include "../../templates/header.php";

include "../../assets/configs/conexaoSql.php";
?>
    <main style="width: 100%; height:100vh;" class="border-start">
      <?php
        include "../../templates/header-2.php"
      ?>

        <div class="container pt-4">
          <h1>Cadastrar Personagens</h1>

          <form action="">
            <div class="row mb-3">
              <div class="col-12 col-sm-6">
                <label for="name-person">Nome do Lugar:</label>     
                <input type="text" name="nomeLugar" id="nomeLugar" class="form-control" style="margin-bottom: 8px; padding:3px">
              </div>

              <div class="col-12 col-sm-6">
                <label for="mythology">Qual Mitologia:</label>
                <input type="text" name="mitologia" id="mitologia" class="form-control" style="margin-bottom: 8px; padding:3px">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-12 col-sm-6">
                <label for="name-mythology">Nome na Mitologia:</label>
                <input type="text" name="nomeMitologia" id="nomeMitologia" class="form-control" style="margin-bottom: 8px; padding:3px">
              </div>              

              <div class="col-12 col-sm-6">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control" style="margin-bottom: 8px;"><option value="">Vivo</option><option value="">Morto</option></select>
              </div>
            </div>

            <button type="button" class="btn btn-outline-success" id="cadastro">Enviar Cadastro</button> 
          </form>          
        </div>
    </main>
<?php
  include "../../templates/footer.php";
  
  mysqli_close($conn); 
?>