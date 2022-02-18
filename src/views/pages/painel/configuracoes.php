<?php $render('painel/header', ['title' => 'Configurações']); ?>

<section class="content">
    <div class="md-11">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Valores</h3>
            </div>

            <form id="cad_usu" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <p style="color: #fc270f;display:inline;"><b>*</b></p>
                        <label for="valor">&nbsp; Valor</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">R$</span>
                            <input type="text" class="form-control" name="valor" id="valor" placeholder="Insira o Valor" aria-label="Insira o Valor" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="form-group">
                        <p style="color: #fc270f;display:inline;"><b>*</b></p>
                        <label for="tpValor">&nbsp; Tipo de Valor</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tpValor" id="tpValor1">
                            <label class="form-check-label" for="tpValor1">
                                Mensalidade
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tpValor" id="tpValor2" checked>
                            <label class="form-check-label" for="tpValor2">
                                Avulso
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <p style="color: #fc270f;display:inline;"><b>*</b></p>
                        <label for="senha">&nbsp; Tipo Veiculo</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tpVei" id="tpVei1">
                            <label class="form-check-label" for="tpVei1">
                               Moto
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tpVei" id="tpVei2" checked>
                            <label class="form-check-label" for="tpVei2">
                                Carro
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" id="btn_enviar" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php $render('painel/footer'); ?>

<script> 
    $('#valor').mask("#.##0,00", {reverse: true});
</script>