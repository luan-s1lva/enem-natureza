$(document).ready(function(){
    $('#showPassword').on('click', function(){
      
      var passwordField = $('#txt_password');
      var passwordFieldType = passwordField.attr('type');
      var mostrarSenha = $('#senhaImg');
      if(passwordFieldType == 'password')
      {
          passwordField.attr('type', 'text');
          $(this).val('Esconder Senha');
          mostrarSenha.attr('src','/img/mostrarSenha.png')
      } else {
          passwordField.attr('type', 'password');
          $(this).val('Mostrar Senha');
          mostrarSenha.attr('src','/img/esconderSenha.png')
      }
    });
  });