<?php
include "../../templates/header.php";

include "../../assets/configs/configSql.php";
?>
    <main style="width: 100%; height:100vh;" class="border-start">
      <?php
        include "../../templates/header-2.php"
      ?>

        <div class="container pt-4">
          <h1>Cadastrar Usuario</h1>

          <form action="">
            <div class="row mb-3">
              <div class="col-12 col-sm-6">
                <label for="name-person">Nome de Usuario:</label>        
                <input type="text" name="name-person" id="name-person" class="form-control" style="margin-bottom: 8px; padding:3px">
              </div>

              <div class="col-12 col-sm-6">
                <label for="mythology">E-mail:</label>
                <input type="text" name="mythology" id="mythology" class="form-control" style="margin-bottom: 8px; padding:3px">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-12 col-sm-6">
                <label for="name-mythology">CPF:</label>
                <input type="text" name="name-mythology" id="name-mythology" class="form-control" style="margin-bottom: 8px; padding:3px">
              </div>              

              <div class="col-12 col-sm-6">
                <label for="">Status:</label>
                <select name="" id="status" class="form-control" style="margin-bottom: 8px;"><option value="">Vivo</option><option value="">Morto</option></select>
              </div>
            </div>

            <button type="button" class="btn btn-outline-success">Enviar Cadastro</button> 
          </form>          
        </div>
    </main>
<?php
  include "../../templates/footer.php"
?>