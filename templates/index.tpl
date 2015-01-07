<link href="{$templateRoot}css/index.css" rel="stylesheet">
<script src="{$templateRoot}js/index.js"></script>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap">
                    <p class="form-title">Corridas</p>
                    <form method="POST" class="login" action= "javascript:void(0)">
                        <input type="text" class="loginInfo" id="emailLogin" placeholder="Email ou login"/>
                        <input type="password" class="loginInfo" id="passwordLogin" placeholder="Senha" />
                        <small id="loginErrorMsg" class="help-block">Dados inválidos</small>
                        <button type="submit" data-loading-text="Entrar..." onclick="validateLogin();" id="btnLogin" class="btn btn-success col-xs-12">ENTRAR <img src="../images/loader/loginLoader.gif" id="loginLoader"></button>
                        <div class="remember-forgot">
                            <div class="row">
                                <div class="btn-group col-xs-12" role="group">
                                    <a class="btn btn-default col-xs-6" id="forgortPass">Esqueci a Senha</a>
                                    <a class="btn btn-default col-xs-6" href="../pages/subscribe">Cadastrar-se</a>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="pr-wrap">
                    <div class="pass-reset">
                        <label>Insira o email cadastrado</label>
                        <input type="email" placeholder="Email" />
                        <input type="submit" value="Recuperar Senha" class="pass-reset-submit btn btn-success btn-sm btn-block" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>