<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portifólio</title>

    <style>
        :root {
            font-size: 16px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /* background-image: url('imagens/logo.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            background-attachment: fixed; */

            border: 10px solid red;
            width: 100vw;
            height: 100vh;
            overflow-x: hidden;
        }

        p {
            /* border: 1px solid red; */
            border-width: 10px;
            border-style: solid;
            border-color: blue;
            font-size: 3rem;
        }

        h1 {
            background-color: violet;
            display: block;
        }

        h1:hover {
            background-color: red;
        }

        .logo {
            position: fixed;
            bottom: calc(100vh/2);
            right: 0;
        }

        #interface {

        }
    </style>
</head>
<body>

<div id="interface">

    <header class="cabecalho">

        <nav class="menu">

            <div class="logo">
                <img src="imagens/logo.png" alt="LOGO" width="150" />
            </div>

            <ul>
                <li>Home</li>
                <li>Serviços</li>
                <li>Produtos</li>
                <li>Portifólio</li>
                <li>Sobre</li>
                <li>Contato</li>
            </ul>

        </nav>

        <div class="titles">

            <h1 class="titulo">Entregando serviços de qualidade</h1>
            <h1 class="subtitulo">Soluções em TI</h1>

            <p class="paragrafo">Ave Maria, gratia plena, Dominus tecum: benedicta tu in mulieribus et benedictus fructus ventris tui Iesu. Sancta Maria, Mater Dei, ora pro nobis peccatoribus, nunc et in hora mortis nostrae.Amen.</p>

        </div>

        <div class="socialIcons">
            <a href="#">Twitter</a>
            <a href="#">Facebook</a>
            <a href="#">LinkedIn</a>
            <a href="#">Instagram</a>
        </div>

    </header>

</div>
    
</body>
</html>