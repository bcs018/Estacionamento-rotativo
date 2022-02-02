<?php $render('painel/header'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Cadastro de Usuário</h1>
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

            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira seu Nome">
                    </div>
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" name="nome" id="login" placeholder="Insira seu Login">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="nome" id="senha" placeholder="Insira sua Senha">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Foto Perfil</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Clique para escolher</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php $render('painel/footer'); ?>