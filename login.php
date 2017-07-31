<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--CHAMANDO CSS-->
        <link rel="stylesheet" href="stylesheets/locastyle.css">
        <link rel="stylesheet" href="stylesheets/estilo.css">
        <!--TITULO-->
        <title>Login - Sistema Promaxi</title>
    </head>
    <body class="ls-theme-gray  ls-browser-firefox ls-window-lg ls-screen-lg">
        <div class="ls-login-parent">
            <div class="ls-login-inner">
                <div class="ls-login-container">
                    <div class="ls-login-box">
                        <h1 class="ls-login-logo">
                            <img src="images/logo.png" alt="">
                        </h1>
                        <form role="form" class="ls-form ls-login-form" action="#">
                            <fieldset>
                                <label class="ls-label">
                                    <b class="ls-label-text ls-hidden-accessible">Usuário</b>
                                    <input class="ls-login-bg-user ls-field-lg" placeholder="Usuário" required="" autofocus="" type="text">
                                </label>
                                <label class="ls-label">
                                    <b class="ls-label-text ls-hidden-accessible">Senha</b>
                                    <div class="ls-prefix-group ls-field-lg">
                                        <input id="password_field" class="ls-login-bg-password" placeholder="Senha" required="" type="password">
                                        <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
                                    </div>
                                </label>
                                <p><a class="ls-login-forgot" href="forgot-password">Esqueci minha senha</a></p>
                                <input value="Entrar" class="ls-btn-primary ls-btn-block ls-btn-lg" type="submit">
                                <p class="ls-txt-center ls-login-signup">Não possui um usuário com a Promaxi? <a href="#">Cadastre-se agora</a></p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <!--RODAPE NEO SOUL-->
        </footer>
        <!--CARREGANDO JS-->
        <script type="text/javascript" src="javascripts/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="javascripts/locastyle.js"></script>
    </body>
</html>