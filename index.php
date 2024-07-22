<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <div class="login">
        <div class="container">
            <div class="screen">
                <div class="screen__content">
                    <form class="login__form">
                        <div class="login__logo">
                                <img src="assets/logo.png" alt="Logo">
                            </div>
                            <div class="login__field">
                                <i class="login__icon fas fa-user"></i>
                                <input type="text" class="login__input" placeholder="Email" name="usuario">
                            </div>
                            <div class="login__field">
                                <i class="login__icon fas fa-lock"></i>
                                <input type="password" class="login__input" placeholder="Password" name="senha" id="password">
                                <i class="fa fa-eye toggle-password" id="togglePassword" style="cursor: pointer; position: absolute; right: 10px; top: 30px;"></i>
                            </div>
                            <button class="button login__submit">
                                <span class="button__text">Conecte-se agora</span>
                                <i class="button__icon fas fa-chevron-right"></i>
                            </button>				
                        </form>
                        <div class="social-login">
                            <h3>Faça login via</h3>
                            <div class="social-icons">
                                <a href="#" class="social-login__icon fab fa-instagram"></a>
                                <a href="#" class="social-login__icon fab fa-facebook"></a>
                                <a href="#" class="social-login__icon fab fa-twitter"></a>
                            </div>
                        </div>
                </div>
                <div class="screen__background">
                    <span class="screen__background__shape screen__background__shape4"></span>
                    <span class="screen__background__shape screen__background__shape3"></span>		
                    <span class="screen__background__shape screen__background__shape2"></span>
                    <span class="screen__background__shape screen__background__shape1"></span>
                </div>		
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function (e) {
                // Toggle the type attribute using getAttribute() method
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // Toggle the eye slash icon
                this.classList.toggle('fa-eye-slash');
            });
        });
    </script>
</body>
</html>