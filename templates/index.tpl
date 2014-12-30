<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>Insira o email cadastrado</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Recuperar Senha" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">Corridas</p>
                <form method="POST" class="login" action="javascript:void(0)">
                    <input type="text" class="loginInfo" id="emailLogin" placeholder="Email ou login"/>
                    <input type="password" class="loginInfo" id="passwordLogin" placeholder="Senha" />
                    <small id="loginErrorMsg" class="help-block">Dados inválidos</small>
                    <button type="submit" data-loading-text="Entrar..." onclick="validateLogin();" id="btnLogin" class="btn btn-success col-xs-12">ENTRAR <img src="../images/loader/facebook.gif" id="loginLoader"></button>
                    <div class="remember-forgot">
                        <div class="row">
                            <div class="col-md-6 forgot-pass-content">
                                <a href="javascription:void(0)" class="forgot-pass">Esqueci a senha</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>