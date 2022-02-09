$('#cad_cliente').on('submit', function(e){
    e.preventDefault();
    var form_data = FormData();

    nome     = $('#nome').val();
    email    = $('#email').val();
    telefone = $('#telefone').val();
    modelo   = $('#modelo').val();
    marca    = $('#marca').val();
    placa    = $('#placa').val();

    if($nome == '' || $email == '' || $telefone == '' || $modelo == '' || $placa == ''){
        toastr.error('Campo Nome, E-mail, Telefone, Modelo ou Placa não preenchidos');

        return;
    }

    form_data.append('nome', nome);
    form_data.append('email', email);
    form_data.append('telefone', telefone);
    form_data.append('modelo', modelo);
    form_data.append('marca', marca);
    form_data.append('placa', placa);

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

                $('#nome').val('');
                $('#email').val('');
                $('#telefone').val('');
                $('#modelo').val('');
                $('#marca').val('');
                $('#placa').val('');
            }else{
                toastr.error(r.cod_error +' - ' + r.msg_error);
            }
        }

    })

});