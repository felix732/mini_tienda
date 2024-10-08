<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        :root {
            --login-bg:#f8f3ff;
            --title-bg: #9089cc;
            --button-bg: #674baf;
            --light-pink: #e882e8;
            --image-bg:  #eadbff ;
        }

        body {
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);
            overflow: hidden;
        }
        nav {
          background-color: #2e2e2e;
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 20px;
          border-radius: 30px;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: inline-block;
            font-size: 24px;
            font-weight: bold;
            background: linear-gradient(to right, #000000, #6a0dad);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .links {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .link {
            margin-left: 20px;
            text-decoration: none;
            color: #6a0dad;
            background: linear-gradient(to right, #c21212, #0d18ad);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .link:hover {
            transform: scale(1.1);
        }

        .login-container {
            height: 70%;
            width: 60em;
            margin: 6em auto;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            transform: translate(0, -8%);
            overflow: hidden;
        }

        .login-info-container {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding-top: 0.5rem;
            background-color: var(--login-bg);
        }

        .image-container {
            padding: 2rem;
            width: 50%;
            background-color: var(--image-bg);
            box-sizing: border-box;
        }

        .title {
            text-transform: capitalize;
            font-size: 2.25rem;
            font-weight: 600;
            letter-spacing: 1px;
            color: var(--title-bg);
        }

        .social-login {
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            cursor: pointer;
        }

        .social-login-element {
            width: 12.5rem;
            height: 3.75rem;
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            border-radius: 5px;
            border: 1px solid var(--button-bg);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social-login-element img {
            width: 1.875rem;
            height: 1.875rem;
            position: relative;
            top: 0;
            left: -0.625rem;
        }

        .social-login-element:hover {
            background-color: #fff;
        }

        .login-info-container > p {
            font-size: 1.25em;
            margin-top: 1.5em;
        }

        .inputs-container {
            height: 55%;
            width: 85%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }

        .input, .btn {
            width: 90%;
            height: 3.125rem;
            font-size: 1em;
        }

        .input {
            padding-left: 20px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            letter-spacing: 1px;
            box-sizing: border-box;
        }

        .input:hover {
            border: 2px solid var(--button-bg);
        }

        .btn {
            width: 80%;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: white;
            border: none;
            border-radius: 5px;
            background-color: var(--button-bg);
            cursor: pointer;
        }

        .inputs-container p {
            margin: 0;
        }

        .span {
            color: var(--light-pink);
            font-weight: 600;
            cursor: pointer;
        }

        .logo img {
            width: 150px;
            height: 55px;
            display: block;
            margin: 0 auto;
        }

        @media screen and (max-width: 1000px) {
            .login-container {
                width: 70%;
                margin-top: 3rem;
            }
            .login-info-container {
                width: 100%;
                border-radius: 5px;
            }

            .image-container {
                display: none;
            }  
        }

        @media screen and (max-width: 650px) {
            .login-container {
                width: 90%;
            }
        }

        @media screen and (max-width: 500px) {
            .login-container {
                height: 80%;
            }

            .login-info-container > p {
                margin: 0;
            }
        }
    </style>
    <title>Iniciar Sesión</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="img/logo_1.png" alt="logo">
        </div>
        <div class="links">
          <a href="./index.php" class="link">Inicio</a>
        </div>
    </nav>

    <div class="login-container">
        <div class="login-info-container">
            <h1 class="title">Inicio Sesión</h1>
            <div class="social-login">
            </div>
            <form class="inputs-container" action="validar.php" method="POST">
                <input class="input" type="text" name="usuario" placeholder="Usuario" required>
                <input class="input" type="password" name="clave" placeholder="Clave" required>
                <button class="btn" type="submit">Iniciar Sesión</button>
            </form>
        </div>
        <img class="image-container" src="img/registro_login_foto.avif" alt="">
    </div>
</body>
</html>
