<?php $render('painel/header', ['title' => 'Cadastrar Cliente']); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Cadastro de Cliente</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="sair" style="color:red;"><b>Sair</b></a></li>
                </ol>
            </div><!-- /.col -->

            <div class="md-12">
                <br>
                <center>
                    <p style="color: #fc270f;"><b>Campos marcados com asterisco (*) são obrigatórios.</b></p>
                </center>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <form id="cad_usu" >
        <div class="md-11">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Informe os dados do cliente</h3>
                </div>

                    <div class="card-body">
                        <div class="form-group">
                            <p style="color: #fc270f;display:inline;"><b>*</b></p>
                            <label for="nome">&nbsp; Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira o Nome">
                        </div>
                        <div class="form-group">
                            <p style="color: #fc270f;display:inline;"><b>*</b></p>
                            <label for="login">&nbsp; E-mail</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Insira o E-mail">
                        </div>
                        <div class="form-group">
                            <p style="color: #fc270f;display:inline;"><b>*</b></p>
                            <label for="senha">&nbsp; Telefone</label>
                            <input type="password" class="form-control" name="telefone" id="telefone" placeholder="Insira o Telefone">
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
                            <label for="nome">&nbsp; Modelo</label>
                            <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Insira o Modelo">
                        </div>
                        <div class="form-group">
                            <p style="color: #fc270f;display:inline;"><b>*</b></p>
                            <label for="login">&nbsp; Marca</label>
                            <input type="text" class="form-control" name="marca" id="marca" placeholder="Insira a Marca">
                        </div>
                        <div class="form-group">
                            <p style="color: #fc270f;display:inline;"><b>*</b></p>
                            <label for="senha">&nbsp; Placa</label>
                            <input type="password" class="form-control" name="placa" id="placa" placeholder="Insira a Placa">
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" id="btn_enviar" class="btn btn-primary">Cadastrar</button>
                    </div>
            </div>
        </div>
    </form>
</section>

<?php $render('painel/footer'); ?>
