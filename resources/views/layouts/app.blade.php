<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event.(ia) - Gerencie seus eventos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            background: rgb(0, 0, 0);
            background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(54, 54, 54, 1) 100%);
        }

        h1 {
            font-size: 35px;
            color: white;
        }

        .header {
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 80px;
            background-color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .logo {
            font-size: 26px;
            color: #D9E400;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar a {
            position: relative;
            font-size: 18px;
            color: #D9E400;
            font-weight: 500;
            text-decoration: none;
            margin-left: 40px;
        }

        .navbar a::before {
            content: '';
            position: absolute;
            top: 100%;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #fff;
            transition: .2s;
        }

        .navbar a:hover::before {
            width: 100%;
        }

        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem auto;
        }

        .container-form {
            position: relative;
            width: 100%;
            top: 0;
            margin-bottom: 2rem;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form {
            width: 100%;
            max-width: 820px;
            background-color: black;
            border-radius: 10px;
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow: hidden;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .circle.one {
            width: 130px;
            height: 130px;
            top: 130px;
            right: -40px;
        }

        .circle.two {
            width: 80px;
            height: 80px;
            top: 10px;
            right: 30px;
        }

        form {
            padding: 2.3rem 2.2rem;
            z-index: 10;
            overflow: hidden;
            position: relative;
        }

        .title {
            color: #fff;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
            margin-bottom: 0.7rem;
        }

        .input-container {
            position: relative;
            margin: 1rem 0;
        }

        .input {
            width: 100%;
            outline: none;
            border: 2px solid #fafafa;
            background: none;
            padding: 0.6rem 1.2rem;
            color: #fff;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            border-radius: 5px;
            transition: 0.3s;
        }

        textarea.input {
            padding: 0.8rem 1.2rem;
            min-height: 150px;
            border-radius: 5px;
            resize: none;
            overflow-y: auto;
        }

        .input-container label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            padding: 0 0.4rem;
            color: #fafafa;
            font-size: 0.9rem;
            font-weight: 400;
            pointer-events: none;
            z-index: 1000;
            transition: 0.5s;
        }

        .input-container.textarea label {
            top: 1rem;
            transform: translateY(0);
        }

        .btn {
            padding: 0.6rem 1.3rem;
            background-color: black;
            border: 2px solid #fafafa;
            font-size: 0.95rem;
            font-weight: bold;
            color: #D9E400;
            line-height: 1;
            border-radius: 5px;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
            margin: 0;
            width: 100%;
        }

        .btn:hover {
            background-color: transparent;
            color: #fff;
        }

        .input-container span {
            position: absolute;
            top: 0;
            left: 25px;
            transform: translateY(-50%);
            font-size: 0.8rem;
            padding: 0 0.4rem;
            color: transparent;
            pointer-events: none;
            z-index: 500;
        }

        .input-container span:before,
        .input-container span:after {
            content: "";
            position: absolute;
            width: 10%;
            opacity: 0;
            transition: 0.3s;
            height: 5px;
            top: 50%;
            transform: translateY(-50%);
        }

        .input-container span:before {
            left: 50%;
        }

        .input-container span:after {
            right: 50%;
        }

        .input-container.focus label {
            top: 0;
            transform: translateY(-50%);
            left: 25px;
            font-size: 0.8rem;
        }

        .input-container.focus span:before,
        .input-container.focus span:after {
            width: 50%;
            opacity: 1;
        }

        .contact-info {
            padding: 2.3rem 2.2rem;
            position: relative;
        }

        .contact-info .title {
            color: white;
        }

        .text {
            color: #333;
            margin: 1.5rem 0 2rem 0;
        }

        .information {
            display: flex;
            color: #555;
            margin: 0.7rem 0;
            align-items: center;
            font-size: 0.95rem;
        }

        .information i {
            color: white;
        }

        .icon {
            width: 28px;
            margin-right: 0.7rem;
        }

        .social-media {
            padding: 2rem 0 0 0;
        }

        .social-media p {
            color: #333;
        }


        .square {
            position: absolute;
            height: 400px;
            top: 50%;
            left: 50%;
            transform: translate(181%, 11%);
            opacity: 0.2;
        }

        @media (max-width: 850px) {
            .container-form {
                padding: 1rem;
            }

            .form {
                grid-template-columns: 1fr;
            }

            .contact-info:before {
                bottom: initial;
                top: -75px;
                right: 65px;
                transform: scale(0.95);
            }

            .square {
                transform: translate(140%, 43%);
                height: 350px;
            }

            .text {
                margin: 1rem 0 1.5rem 0;
            }

            .social-media {
                padding: 1.5rem 0 0 0;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1.5rem;
            }

            .contact-info:before {
                display: none;
            }

            .square {
                display: none;
            }

            form,
            .contact-info {
                padding: 1.7rem 1.6rem;
            }

            .text,
            .information,
            .social-media p {
                font-size: 0.8rem;
            }

            .title {
                font-size: 1.15rem;
            }

            .social-icons a {
                width: 30px;
                height: 30px;
                line-height: 30px;
            }

            .icon {
                width: 23px;
            }

            .input {
                padding: 0.45rem 1.2rem;
            }

            .btn {
                padding: 0.45rem 1.2rem;
            }
        }

        .container {
            max-width: 1170px;
            margin: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            background-color: black;
            width: 100%;
            padding: 70px 0;
        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #D9E400;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: white;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
        }

        @media(max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media(max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="/" class="logo">event.(ia)</a>

        <nav class="navbar">
            <a href="/">Home</a>
            <a href="/eventos">Eventos</a>
            <a href="/contato">Contato</a>
        </nav>
    </header>

    <section class="content">
        @yield('conteudo')
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Empresa</h4>
                    <ul>
                        <li><a href="/">Saiba mais</a></li>
                        <li><a href="/">Serviços</a></li>
                        <li><a href="/">Termos e condições</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Precisa de ajuda ?</h4>
                    <ul>
                        <li><a href="/contato">Atendimento</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Eventos Online</h4>
                    <ul>
                        <li><a href="/eventos">Veja mais</a></li>
                        <li><a href="/eventos">Crie eventos</a></li>
                        <li><a href="/eventos">Gerencie</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>