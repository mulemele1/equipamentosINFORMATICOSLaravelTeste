<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Sistema de Gerenciamento de Equipamentos - Delegação Cispoc">
    <meta name="keywords" content="login, equipamentos, cispoc, gerenciamento, sistema">
    <meta name="author" content="Sua Empresa">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - Equipamentos Delegação Cispoc</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logoicon.png') }}">

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="account-page">

    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <div class="login-logo">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Delegação Cispoc">
                        </div>

                        <!-- Formulário de Login -->
                        <form action="{{ url('/home') }}" method="POST">
    @csrf
    <div class="login-userheading">
        <h3>Fazer Login</h3>
        <h4>Precisa de entrar na sua conta</h4>
    </div>

    <div class="form-login">
        <label for="email">E-mail</label>
        <div class="form-addons">
            <input type="email" name="usuario" id="email" placeholder="Digite seu endereço de e-mail" required>
            <img src="assets/img/icons/mail.svg" alt="ícone de e-mail">
        </div>
    </div>

    <div class="form-login">
        <label for="password">Senha</label>
        <div class="pass-group">
            <input type="password" name="senha" id="password" placeholder="Digite sua senha" required>
            <span class="fas toggle-password fa-eye-slash" aria-label="Mostrar senha"></span>
        </div>
    </div>

    <div class="form-login">
        <div class="alreadyuser">
            <h4><a href="esquecerpassword.html" class="hover-a">Esqueci minha senha?</a></h4>
        </div>
    </div>

    <div class="form-login">
        <button type="submit" class="btn btn-login">Entrar</button>
    </div>
</form>

                            <!-- Cadastro -->
                            <div class="signinform text-center">
                                <h4>Não tem uma conta? <a href="{{ url('cadastrarse') }}" class="hover-a">Cadastre-se</a></h4>
                            </div>

                            <!-- Login com Redes Sociais -->
                            <div class="form-setlogin">
                                <h4>Ou faça login com</h4>
                            </div>
                            <div class="form-sociallink">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="{{ asset('assets/img/icons/google.png') }}" class="me-2" alt="Google">
                                            Entrar com Google
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="{{ asset('assets/img/icons/facebook.png') }}" class="me-2" alt="Facebook">
                                            Entrar com Facebook
                                        </a>
                                    </li>
                                </ul>
                            </div>
             
                    </div>
                </div>

                <!-- Imagem de fundo lateral -->
                <div class="login-img">
                    <img src="{{ asset('assets/img/login.jpg') }}" alt="Imagem de login">
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
