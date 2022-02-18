<?php $render('painel/header', ['title' => 'Configurações Usuário']); ?>

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
                        <label for="nome_u">&nbsp; Nome</label>
                        <input type="text" class="form-control" name="nome_u" id="nome_u" placeholder="Insira o Nome">
                    </div>
                    <div class="form-group">
                        <p style="color: #fc270f;display:inline;"><b>*</b></p>
                        <label for="login_u">&nbsp; Login</label>
                        <input type="text" class="form-control" name="login_u" id="login_u" placeholder="Insira o Login">
                    </div>
                    <div class="form-group">
                        <p style="color: #fc270f;display:inline;"><b>*</b></p>
                        <label for="novaSenha_u">&nbsp; Nova Senha</label>
                        <input type="password" class="form-control" name="novaSenha_u" id="novaSenha_u"
                            placeholder="Insira a nova Senha">
                    </div>

                    <div class="form-group">
                        <p style="color: #fc270f;display:inline;"><b>*</b></p>
                        <label for="repSenha">&nbsp; Repita a Senha</label>
                        <input type="password" class="form-control" name="repSenha" id="repSenha"
                            placeholder="Repita a Senha">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto Perfil</label>
                        <input class="form-control" type="file" id="url_img_u" name="url_img_u">
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