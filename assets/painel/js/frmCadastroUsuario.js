$(function(){

    $('#cad_usu').on('submit', function(e){
        e.preventDefault();
        img = new FormData();
        img.append('imagem','file', $('#url_img'));

        nome    = $('#nome').val();
        login   = $('#login').val();
        senha   = $('#senha').val();

        // if(nome == '' || login == '' || senha == ''){
        //     toastr.error('Campo Nome, Login ou Senha não preenchidos')
        //     return;
        // }

        $.ajax({
            url: '/cadastrar-action',
            type: 'POST',
            data: 
                img
                // nome:nome,
                // login:login,
                // senha:senha
            ,
            dataType: 'JSON',
            success:function(r){
                if(r.retorno){
                    toastr.sucess('Usuário cadastrado com sucesso');
                }else{
                    toastr.error(r.msg_error);
                }
            }
        })

    });

});