$(function(){

    $('#btn_enviar').on('click', function(e){
        e.preventDefault();
        var form_data = new FormData();

        form_data.append('img', $('input[name=url_img]').prop('files')[0]);
        form_data.append('nome',$('#nome').val());
        form_data.append('login',$('#login').val());
        form_data.append('senha',$('#senha').val());

        toastr.error(BASE_DIR)
        // if(nome == '' || login == '' || senha == ''){
        //     toastr.error('Campo Nome, Login ou Senha não preenchidos')
        //     return;
        // }

        $.ajax({
            url: BASE_DIR+'/painel/cadastrar-action',
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
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