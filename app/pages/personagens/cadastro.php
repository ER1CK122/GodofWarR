<?php
include "../../templates/header.php"
?>
      <main style="width: 100%; height:100vh;" class="border-start">
      <div style="height:90px" class="border-bottom"></div>

        <div class="container pt-4">
          <h1>Cadastrar Personagens</h1>

          <form action="">
            <div class="row mb-3">
              <div class="col-12 col-sm-6">
                <label for="name-person">Nome do Personagem:</label>        
                <input type="text" name="name-person" id="name-person" class="form-control" style="margin-bottom: 8px; padding:3px">
              </div>

              <div class="col-12 col-sm-6">
                <label for="mythology">Qual Mitologia:</label>
                <input type="text" name="mythology" id="mythology" class="form-control" style="margin-bottom: 8px; padding:3px">
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-12 col-sm-6">
                <label for="name-mythology">Nome na Mitologia:</label>
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