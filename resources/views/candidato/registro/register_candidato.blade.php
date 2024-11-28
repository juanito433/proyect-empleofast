<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <!-- ===== CSS ===== -->
    <title>Login & Registration Form</title>
</head>
<style>
    /* ===== Google Font Import - Poformsins ===== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #4070f4;
    }

    .container {
        position: relative;
        max-width: 430px;
        width: 100%;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin: 0 20px;
    }

    .container .forms {
        display: flex;
        align-items: center;
        height: 440px;
        width: 200%;
        transition: height 0.2s ease;
    }


    .container .form {
        width: 50%;
        padding: 30px;
        background-color: #fff;
        transition: margin-left 0.18s ease;
    }

    .container.active .login {
        margin-left: -50%;
        opacity: 0;
        transition: margin-left 0.18s ease, opacity 0.15s ease;
    }

    .container .signup {
        opacity: 0;
        transition: opacity 0.09s ease;
    }

    .container.active .signup {
        opacity: 1;
        transition: opacity 0.2s ease;
    }

    .container.active .forms {
        height: 580px;
    }

    .container .form .title {
        position: relative;
        font-size: 27px;
        font-weight: 600;
    }

    .form .title::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        background-color: #4070f4;
        border-radius: 25px;
    }

    .form .input-field {
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 30px;
    }

    .input-field input {
        position: absolute;
        height: 100%;
        width: 100%;
        padding: 0 35px;
        border: none;
        outline: none;
        font-size: 16px;
        border-bottom: 2px solid #ccc;
        border-top: 2px solid transparent;
        transition: all 0.2s ease;
    }

    .input-field input:is(:focus, :valid) {
        border-bottom-color: #4070f4;
    }

    .input-field i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 23px;
        transition: all 0.2s ease;
    }

    .input-field input:is(:focus, :valid)~i {
        color: #4070f4;
    }

    .input-field i.icon {
        left: 0;
    }

    .input-field i.showHidePw {
        right: 0;
        cursor: pointer;
        padding: 10px;
    }

    .form .checkbox-text {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
    }

    .checkbox-text .checkbox-content {
        display: flex;
        align-items: center;
    }

    .checkbox-content input {
        margin-right: 10px;
        accent-color: #4070f4;
    }

    .form .text {
        color: #333;
        font-size: 14px;
    }

    .form a.text {
        color: #4070f4;
        text-decoration: none;
    }

    .form a:hover {
        text-decoration: underline;
    }

    .form .button {
        margin-top: 35px;
    }

    .form .button input {
        border: none;
        color: #fff;
        font-size: 17px;
        font-weight: 500;
        letter-spacing: 1px;
        border-radius: 6px;
        background-color: #4070f4;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .button input:hover {
        background-color: #265df2;
    }

    .form .login-signup {
        margin-top: 30px;
        text-align: center;
    }
</style>

<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                @if ($errors->any())
                    <div class="alert alert-danger" style="color: red">

                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span>
                            @endforeach
                        
                    </div>
                @endif
                @csrf

                <form action="{{ route('sesion') }}" method="POST">
                    @csrf
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="password" placeholder="Password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login" />
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">¿No Tienes Cuenta?
                        <a href="#" class="text signup-link">Registrate Ahora!</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form method="POST" action="{{ route('candidatos.register') }}">
                    @csrf
                    <div class="input-field">
                        <input type="text" name="name" id="name" placeholder="Name" required />
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name="surname" id="surname" placeholder="Surname" required />
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" id="email" placeholder="Email" required />
                        <i class="uil uil-envelope icon"></i>
                    </div>

                    <div class="input-field">
                        <input type="password" class="password" name="password" id="password" placeholder="Password" required />

                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Signup" />
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">¿Ya Tienes Cuenta?
                        <a href="#" class="text login-link">Inicia Sesión Ahora!</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.querySelector(".container"),
            pwShowHide = document.querySelectorAll(".showHidePw"),
            pwFields = document.querySelectorAll(".password"),
            signUp = document.querySelector(".signup-link"),
            login = document.querySelector(".login-link");

        // js code to show/hide password and change icon
        pwShowHide.forEach((eyeIcon) => {
            eyeIcon.addEventListener("click", () => {
                pwFields.forEach((pwField) => {
                    if (pwField.type === "password") {
                        pwField.type = "text";

                        pwShowHide.forEach((icon) => {
                            icon.classList.replace("uil-eye-slash", "uil-eye");
                        });
                    } else {
                        pwField.type = "password";

                        pwShowHide.forEach((icon) => {
                            icon.classList.replace("uil-eye", "uil-eye-slash");
                        });
                    }
                });
            });
        });

        // js code to appear signup and login form
        signUp.addEventListener("click", (e) => {
            e.preventDefault();
            container.classList.add("active");
        });

        login.addEventListener("click", (e) => {
            e.preventDefault();
            container.classList.remove("active");
        });
    </script>
</body>

</html>
