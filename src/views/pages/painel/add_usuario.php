<?php $render('painel/header'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Cadastro de Usuário</h1>
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
    <div class="md-11">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Informe os dados</h3>
            </div>

            <form id="cad_usu" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <p style="color: #fc270f;display:inline;"><b>*</b></p>
                        <label for="nome">&nbsp; Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira o Nome">
                    </div>
                    <div class="form-group">
                        <p style="color: #fc270f;display:inline;"><b>*</b></p>
                        <label for="login">&nbsp; Login</label>
                        <input type="text" class="form-control" name="login" id="login" placeholder="Insira o Login">
                    </div>
                    <div class="form-group">
                        <p style="color: #fc270f;display:inline;"><b>*</b></p>
                        <label for="senha">&nbsp; Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha"
                            placeholder="Insira a Senha">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto Perfil</label>
                        <input class="form-control" type="file" id="url_img" name="url_img">
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