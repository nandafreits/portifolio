<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portifólio</title>

    <link rel="stylesheet" href="tools/fontawesome/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div id="interface">

        <header class="cabecalho">

            <nav class="menu">

                <div class="logo">
                    <img src="imagens/logo.png" alt="LOGO" />
                </div>

                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Portifólio</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Restrito</a></li>
                </ul>

            </nav>

            <div class="titles">
                <div class="container-titles">
                    <h1 class="titulo">Entregando Serviços de Qualidade</h1>
                    <h1 class="subtitulo">Soluções de TI</h1>
                    <p class="paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus culpa, quis nisi blanditiis maiores aspernatur.</p>
                </div>

                <div class="socialIcons">
                    <a href="#" title="Visite nosso Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="Visite nosso Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" title="Visite nosso Linkedin"><i class="fab fa-linkedin"></i></a>
                    <a href="#" title="Visite nosso Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

        </header>

        <main id="corpo">
            <section class="servicos">

                <article class="servico">
                    <img src="imagens/service-design.svg" alt="Desenvolvimento WEB">
                    <h3 class="title-servico">Desenvolvimento WEB</h3>
                    <p class="text-servico">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis deleniti doloribus deserunt nam quisquam voluptatibus.</p>
                </article>
                <article class="servico">
                    <img src="imagens/service-hosting.svg" alt="WEB Hosting">
                    <h3 class="title-servico">Web Hosting</h3>
                    <p class="text-servico">Explicabo, soluta ad laudantium nihil tempore officiis doloribus. Quas culpa eaque assumenda maxime dolorum adipisci.</p>
                </article>
                <article class="servico">
                    <img src="imagens/service-social.svg" alt="Midias Sociais">
                    <h3 class="title-servico">Design</h3>
                    <p class="text-servico">Odit nostrum aperiam, vitae veniam architecto ab quas dignissimos, provident saepe rerum omnis, molestiae corporis!</p>
                </article>
                <article class="servico">
                    <img src="imagens/service-seo.svg" alt="Aplicações SEO">
                    <h3 class="title-servico">Aplicações SEO</h3>
                    <p class="text-servico">Labore, alias. Necessitatibus ea officiis quidem, laboriosam delectus, corrupti quia consectetur modi, molestias amet doloremque.</p>
                </article>
                <article class="servico">
                    <img src="imagens/service-cloud.svg" alt="Computação em Nuvem">
                    <h3 class="title-servico">Computação em Nuvem</h3>
                    <p class="text-servico">Nostrum tenetur corporis nobis laudantium laborum quo eius ullam excepturi labore nulla! Modi, itaque numquam?</p>
                </article>
                <article class="servico">
                    <img src="imagens/service-secure.svg" alt="Segurança de Dados">
                    <h3 class="title-servico">Segurança de Dados</h3>
                    <p class="text-servico">Fugiat sequi ducimus consequuntur, necessitatibus voluptatum voluptate excepturi doloribus ullam harum non aperiam recusandae consequatur.</p>
                </article>

            </section>

            <section class="portifolio">

                <h3 class="title-portifolio">Nosso Portifólio</h3>
                <p class="sub-title">Lorem ipsum dolor sit amet.</p>

                <div class="container-imagens">
                    <a href="#" class="img" style="background-image: url('imagens/product-1.jpg');">

                    </a>
                    <a href="#" class="img" style="background-image: url('imagens/product-2.jpg');">

                    </a>
                    <a href="#" class="img" style="background-image: url('imagens/product-3.jpg');">

                    </a>
                    <a href="#" class="img" style="background-image: url('imagens/product-4.jpg');">

                    </a>
                    <a href="#" class="img" style="background-image: url('imagens/product-5.jpg');">

                    </a>
                    <a href="#" class="img" style="background-image: url('imagens/product-6.jpg');">

                    </a>
                </div>

            </section>

            <section class="banner">

                <hgroup class="container-texto" >
                    <h4 class="title-banner">Saiba mais sobre nosso projeto</h4>

                    <p class="txt-banner">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore veritatis, cupiditate fuga ipsam, qui aspernatur quo adipisci officiis repudiandae ullam laboriosam sint corrupti et obcaecati?</p>

                    <a href="#">Saiba mais</a>
                </hgroup>

                
            <section class="sobre">
                

                

            </section>

            <section class="contato" > 

            <h3 class="title-contato">fale conosco</h3>
            <p class="sub-title">Lorem ipsum dolor sit amet.</p>

            <div class="container-contato"></div>

           <anside class="dados-contato">
             <h4 class="title-aside">Endereço </h4>
             <p class="txt-aside">Rua das Margaridas, S/Nº - Centro - Manhuaçu MG</p>

             <h4 class="title-aside">Telefone </h4>
             <p class="txt-aside">33 3351-3333</p>
             <p class="text-anside"> 33 9 8400-9999</p>

             <h4 class="title-aside">E-Mail </h4>
             <p class="txt-aside">contato@meusite.com.br</p>
             <p class="text-anside">faleconosco@meusite.com.br</p>

          </anside>
             
          <form action="" method = "POST">

            <input type="text" name="nome" id="nome" placeholder= "Nome*" required />
            <input type="email" name="email" id="email" placeholder= "E-Mail*" required />
            <input type="text" name="assunto" id="assunto" placeholder= "Assunto*" required />
            <textarea name="mensagem" id="mensagem" placeholder="Mensagem" required></textarea>

            <input type="submit" value="Envia mensagem" />

          </form>




            </section>
        </main>

    </div>
    
</body>
</html>