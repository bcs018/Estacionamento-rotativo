$(function(){
    $('#btn_enviar_c').on('click', function(e){
        e.preventDefault();
        var form_data = new FormData();
        
        nome       = $('#nome_c').val();
        email      = $('#email_c').val();
        telefone   = $('#telefone_c').val();
        modelo     = $('#modelo_c').val();
        marca      = $('#marca_c').val();
        placa      = $('#placa_c').val();
        tp_veiculo = $("input[name='tpVeiculo']:checked").val();

        if(tp_veiculo != '1' && tp_veiculo != '2'){
            toastr.error('Veículo inválido');

            return;
        }

        if(nome == '' || email == '' || telefone == '' || modelo == '' || placa == ''){
            toastr.error('Campo Nome, E-mail, Telefone, Modelo ou Placa não preenchidos');

            return;
        }

        form_data.append('nome', nome);
        form_data.append('email', email);
        form_data.append('telefone', telefone);
        form_data.append('modelo', modelo);
        form_data.append('marca', marca);
        form_data.append('placa', placa);
        form_data.append('tp_veiculo', tp_veiculo);

        $.ajax({
            url: BASE_DIR+'/painel/cadastrar-cliente-action',
            type: 'POST',
            dataType: 'JSON',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function(r){
                if(r.retorno == true){
                    toastr.success('Cliente cadastrado com sucesso');

                    $('#nome_c').val('');
                    $('#email_c').val('');
                    $('#telefone_c').val('');
                    $('#modelo_c').val('');
                    $('#marca_c').val('');
                    $('#placa_c').val('');
                }else{
                    toastr.error(r.cod_error +' - ' + r.msg_error);
                }
            }

        })

    });
})