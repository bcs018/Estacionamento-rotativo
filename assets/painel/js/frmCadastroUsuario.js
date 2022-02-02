$(function(){

    $('#cad_usu').on('submit', function(e){
        e.preventDefault();
        img = new FormData();
        img.append('file', $('#url_img'));

        nome    = $('#nome').val();
        login   = $('#login').val();
        senha   = $('#senha').val();

        if(nome == '' || login == '' || senha == ''){
            toastr.warning('Campo Nome, Login ou Senha não preenchidos')
        }
    });

});