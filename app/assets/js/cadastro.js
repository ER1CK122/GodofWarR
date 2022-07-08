$(document).ready(function () {
  $('#cadastro').click(function () {

    let dados = $("form").serialize();

    // var name = $('#name').val();
    // var email = $('#email').val();
    // var senha = $('#senha').val();
    // var status = $('#status').val();

    $.ajax({
      type: 'POST',
      URL: '../configs/cadastroMysql.php',
      dataType: 'json',
      async: true,
      data: dados,
      success: function(response) {
        location.reload();
      }
    });

    return false;

  });

});