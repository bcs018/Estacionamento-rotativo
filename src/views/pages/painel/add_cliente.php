<?php $render('painel/header', ['title' => 'Cadastrar Cliente']); ?>

<section class="content">
    <form id="cad_cliente" >
        <div class="md-11">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Informe os dados do cliente</h3>
                </div>

                    <div class="card-body">
                        <div class="form-group">
                            <p style="color: #fc270f;display:inline;"><b>*</b></p>
                            <label for="nome">&nbsp; Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome_c" placeholder="Insira o Nome">
                        </div>
                        <div class="form-group">
                            <p style="color: #fc270f;display:inline;"><b>*</b></p>
                            <label for="email">&nbsp; E-mail</label>
                            <input type="email" class="form-control" name="email" id="email_c" placeholder="Insira o E-mail">
                        </div>
                        <div class="form-group">
                            <p style="color: #fc270f;display:inline;"><b>*</b></p>
                            <label for="telefone">&nbsp; Telefone</label>
                            <input type="text" class="form-control" name="telefone" id="telefone_c" placeholder="(99) 99999-9999">
                        </div>
                    </div>
            </div>
        </div>

        <div class="md-11">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Informe os dados do veiculo</h3>
                </div>

                    <div class="card-body">
                        <div class="form-group">
                            <p style="color: #fc270f;display:inline;"><b>*</b></p>
                            <label for="modelo">&nbsp; Modelo</label>
                            <input type="text" class="form-control" name="modelo" id="modelo_c" placeholder="Insira o Modelo">
                        </div>
                        <div class="form-group">
                            <label for="marca">&nbsp; Marca</label>
                            <input type="text" class="form-control" name="marca" id="marca_c" placeholder="Insira a Marca">
                        </div>
                        <div class="form-group">
                            <p style="color: #fc270f;display:inline;"><b>*</b></p>
                            <label for="placa">&nbsp; Placa</label>
                            <input type="text" class="form-control" name="placa" id="placa_c" placeholder="XXX-XXXX" style="text-transform: uppercase;">
                        </div>
                        <div class="form-group">
                            <p style="color: #fc270f;display:inline;"><b>*</b></p>
                            <label for="placa">&nbsp; Tipo do veículo</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tpVeiculo" id="tpveiculoCarro" value="1" checked>
                                <label class="form-check-label" for="tpveiculoCarro">
                                    Carro
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tpVeiculo" id="tpveiculoMoto" value="2">
                                <label class="form-check-label" for="tpveiculoMoto">
                                    Moto
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" id="btn_enviar_c" class="btn btn-primary">Cadastrar</button>
                    </div>
            </div>
        </div>
    </form>
</section>

<?php $render('painel/footer'); ?>

<script>
    $('#telefone_c').mask('(00) 00000-0000');
    $('#placa_c').mask('AAA-BCBB', {
        'translation': {
            'A': {pattern: /[A-Za-z]/},
            'B': {pattern: /[0-9]/},
            'C': {pattern: /[A-Za-z0-9]/}
        }
    });
</script>
