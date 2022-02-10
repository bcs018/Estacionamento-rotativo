$(function(){

    $('#btn_enviar').on('click', function(e){
        e.preventDefault();
        var form_data = new FormData();

        form_data.append('img', $('input[name=url_img]').prop('files')[0]);
        form_data.append('nome',$('#nome').val());
        form_data.append('login',$('#login').val());
        form_data.append('senha',$('#senha').val());

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
                if(r.retorno == true){
                    toastr.success('Usuário cadastrado com sucesso');

                    $('#nome').val('');
                    $('#login').val('');
                    $('#senha').val('');
                    $('input[name=url_img]').val('');
                }else{
                    toastr.error(r.cod_error +' - ' + r.msg_error);
                }
            }
        })

    });

});