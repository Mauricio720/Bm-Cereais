<?php
    $name=filter_input(INPUT_POST, 'name');
    $email=filter_input(INPUT_POST, 'email');
    $message=filter_input(INPUT_POST, 'message');

    if($name && $email && $message){
        $name=$name;
        $email=$email;
        $message=$message;
        $destinyEmail='contato@endoquiz.com.br';
        $subject="Dúvida de usuário";
        $body="Nome: ".$name."\r\n".
                "Email: ".$email."\r\n".
                "Mensagem: ".$message;
        $header="From:".$email."\r\n".
                    "Reply-To: ".$email."\r\n".
                    "X-Mailer: PHP/".phpversion();
        mail($destinyEmail, $subject,$body,$header);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BM Cereais</title>
    <link rel="icon" type="imagem/png" href="public/images/logo.jpeg"/>
    <meta name="keywords" content="soja, milho, trigo, sorgo , transporte, comercialização, transporte,transportadoras">
    <meta name="description" content="A BM CEREAIS é uma empresa familiar que nasceu em 2.011, com seu empreendedor/fundador Bruno Tomaz Ferreira. Desde então o seu trabalho árduo visa sempre o crescimento e aprimoramento dos serviços oferecidos, atuando com atividade econômica voltada para a agricultura, 
    nossa empresa tem como foco a comercialização de soja, milho, trigo e sorgo.">
    <meta name="author" content="VTTOR Tecnologia">
    <link rel="stylesheet" href="public/css/style.min.css">
</head>
<body>
    <header>
        <div class="header__container">
            <a href="#home" class="logo">
                <img src="public/images/logo.png" alt="Logo" width="100%">
            </a>

            <nav class="menu__container">
                <ul class="menu__container">
                    <a class="menu__selected" href="#home"><li>Inicio</li></a>
                    <a  href="#about"><li>Sobre Nós</li></a>
                    <a  href="#products"><li>Produtos e Serviços</li></a>
                    <a  href="#products"><li>Trabalhe Conosco</li></a>
                    <a  href="#products"><li>Localização</li></a>
                    <a  href="#products"><li>Unidades</li></a>
                    <a  href="#contact"><li>Contato</li></a>
                </ul>
            </nav>
        </div>

        <nav>
            <ul class="menu__container--mobile">
                <div class="btn_close">X</div>
                <a class="menu__selected" href="#home"><li>Inicio</li></a>
                <a  href="#about"><li>Sobre Nós</li></a>
                <a  href="#products"><li>Produtos e Serviços</li></a>
                <a  href="#products"><li>Trabalhe Conosco</li></a>
                <a  href="#products"><li>Localização</li></a>
                <a  href="#products"><li>Unidades</li></a>
                <a  href="#contact"><li>Contato</li></a>
            </ul>
        </nav>

        <div class="menuMobile__btn">
            <div class="menuMobile__btn--line"></div>
            <div class="menuMobile__btn--line"></div>
            <div class="menuMobile__btn--line"></div>
        </div>
    </header>

    <main>
        <section class="home" id="home">
            <div class="banner"></div>
            <div class="banner__content">
                <h1 class="banner__title">BM Cereais</h1>
                <h2 class="banner__decription">BM Cereais</h2>
                <a class="btnSeeMore" href="#about"> Veja Mais</a>
            </div>
        </section>

        <section class="about" id="about">
            <div class="container">
                <div class="container__slot">
                    <h1 class="title__container">Sobre Nós</h1>
                    <div class="about__description">
                        <p> 
                            A  BM CEREAIS  é uma empresa familiar que nasceu em 2.011, com  seu empreendedor/fundador Bruno Tomaz Ferreira.
                            Desde então o seu  trabalho árduo visa sempre o crescimento e aprimoramento dos serviços oferecidos, atuando com atividade econômica voltada para a agricultura, 
                            nossa empresa tem como foco a comercialização de soja, milho, trigo e sorgo.
                        </p>
                        <p>Para a melhor eficácia das realizações dos negócios contamos com uma frota própria de caminhões, facilitando a logística e trazendo maior confiança ao processo.</p>
                        <p>Contamos hoje com nossa matriz localizada na cidade de Itaberá SP e nossa filial localizada na cidade de Descalvado SP, além de um vasto numero de armazéns parceiros em todo estado de SP.</p>
                        <p>Honestidade, respeito e competência são marcas registradas de nossos colaboradores e parceiros, garantindo sempre o melhor negocio aos nossos clientes.</p>
                    </div>
                </div>
                <div class="container__slot about__image"></div>
            </div>
        </section>

        <section class="porpose">
            <div class="container__porpose">
                <div class="porpose__card">
                    <div class="porpose__title">Missão</div>
                    <div class="porpose__icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="react-icons" height="4rem" width="4rem" xmlns="http://www.w3.org/2000/svg" style="color: #916f3a;"><path d="M12,6c-3.309,0-6,2.691-6,6s2.691,6,6,6s6-2.691,6-6S15.309,6,12,6z M12,16c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4 S14.206,16,12,16z"></path><path d="M12,2C6.579,2,2,6.579,2,12s4.579,10,10,10s10-4.579,10-10S17.421,2,12,2z M12,20c-4.337,0-8-3.663-8-8s3.663-8,8-8 s8,3.663,8,8S16.337,20,12,20z"></path><path d="M12,10c-1.081,0-2,0.919-2,2s0.919,2,2,2s2-0.919,2-2S13.081,10,12,10z"></path></svg>
                    </div>
                    <div class="porpose__description">Nascemos para transformar o agronegócio! Estamos de mãos dadas com o produtor para garantir o futuro que nosso país representa para o mundo; visando sempre a satisfação dos nossos clientes e parceiros.</div>
                </div>

                <div class="porpose__card">
                    <div class="porpose__title">Visão</div>
                    <div class="porpose__icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="react-icons" height="4rem" width="4rem" xmlns="http://www.w3.org/2000/svg" style="color: #916f3a"><path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg>
                        
                    </div>
                    <div class="porpose__description">
                        Acreditamos que, comprometidos com um trabalho sério, 
                        continuaremos crescendo e atingindo novos mercados, 
                        conquistando cada vez mais a confiança dos clientes. 
                        Atendendo sempre a exigências das demandas para a máxima 
                        eficiência do processo.
                    </div>
                </div>

                <div class="porpose__card">
                    <div class="porpose__title">Valores</div>
                    <div class="porpose__icon">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="react-icons" height="4rem" width="4rem" xmlns="http://www.w3.org/2000/svg" style="color: #916f3a;"><path d="M512.5 190.4l-94.4 191.3-211.2 30.7 152.8 149-36.1 210.3 188.9-99.3 188.9 99.2-36.1-210.3 152.8-148.9-211.2-30.7z"></path><path d="M908.6 352.8l-253.9-36.9L541.2 85.8c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L370.3 315.9l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1L239 839.4a31.95 31.95 0 0 0 46.4 33.7l227.1-119.4 227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3zM665.3 561.3l36.1 210.3-188.9-99.2-188.9 99.3 36.1-210.3-152.8-149 211.2-30.7 94.4-191.3 94.4 191.3 211.2 30.7-152.8 148.9z"></path></svg>
                    </div>
                    <div class="porpose__description">Colocar sempre nossos clientes em primeiro lugar. Aprimorar sempre os nossos padrões de qualidade. Empenhar-se em oferecer os melhores preços. Crescer com respeito, ética, honestidade e transparência.</div>
                </div>
            </div>
        </section>

        <section class="products" id="products">
            <div class="container container__column">
                <h1 class="title__container title__white">Produtos e Serviços</h1>

                <div class="container__products">
                    <div class="product__item">
                        <div class="product__slot">
                            <div class="product__title">Comercialização de cereais</div>
                            <div class="product__description">
                                Compramos  e vendemos  cereais (grãos), sendo eles: soja, milho, trigo e sorgo. Sendo referencia no setor atacadista de cereais em todo território estadual, contamos com um grande número de clientes e parceiros garantindo sempre maior confiança nos nossos negócios.</h3>
                            </div>
                        </div>
                        <div class="product__slot">
                            <div class="product__image"></div>
                        </div>
                    </div>

                    <div class="product__item">
                        <div class="product__slot">
                            <div class="product__image"></div>
                        </div>
                        <div class="product__slot">
                            <div class="product__title">Armazenagem, secagem e prestações de serviços</div>
                            <div class="product__description">
                                Contamos com nossa matriz na cidade de Itaberá SP e nossa filial na cidade de Descalvado SP, possibilitando facilitar e adequar todo processo de secagem, limpeza e armazenagem dos produtos com a máxima qualidade.</h3>
                            </div>
                        </div>
                        
                    </div>

                    <div class="product__item">
                        <div class="product__slot">
                            <div class="product__title">Transportes de cereais</div>
                            <div class="product__description">
                                Realizamos todo o transporte dos produtos comercializados com frota própria, adequadamente renovada e devidamente monitorada, visando a máxima eficácia do transporte. Além de contar com o serviço de transportadoras parceiras especializadas no nosso negocio.</h3>
                            </div>
                        </div>
                        <div class="product__slot">
                            <div class="product__image"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="container container__column">
                <h1 class="title__container">Contato</h1>
                
                <div class="contact__container">
                    <div class="container__slot  contact__image"></div>
                    <div class="container__slot contact__slot__center">
                        <form class="contact__form" method="post">
                            <div class="form__group">
                                <label for="name">Nome</label>
                                <input type="text" name="name" placeholder="Digite Seu Nome">
                            </div>

                            <div class="form__group">
                                <label for="name">Email</label>
                                <input type="email" name="email" placeholder="Digite Seu Nome">
                            </div>

                            <div class="form__group">
                                <label for="name">Mensagem</label>
                                <textarea name="message" cols="30" rows="10"></textarea>
                            </div>

                            <input class="btnSubmit" type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>
    
    <a href="" target="_blank" class="whatsApp">
        <div class="whatsApp__icon">
            <img src="public/images/whatsApp.png" width="100%" height="100%">
        </div>
    </a>

    <script src="public/js/script.min.js"></script>

</body>
</html>