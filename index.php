<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="src/img/favicon/favicon.png" />
    <title>Aurora Ability IT - Tecnologia com Acessibilidade</title>

    <!-- LINKS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- BOXICON  -->
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>

    <!-- CSS GLOBAL -->
    <!-- <link rel="stylesheet" href="src/css-globais/navbar.css"> -->
    <link rel="stylesheet" href="src/css/css-globais/Footer.css">

    <!-- CSS DA PÁGINA -->
    <link rel="stylesheet" href="src/css/css-pages/index.css">
    <link rel="stylesheet" href="src/css/css-pages/bootstrap.min.css" />

    <!-- CSS RESPONSIVO -->
    <link rel="stylesheet" href="src/css/css-pages/responsivo.css">

    <!-- JS DE ACESSIBILIDADE -->
    <script src="src/js/acessibilidade.js" defer></script>


</head>

<body>

    <!-- ======== header start ======== -->
    <header class="header">
        <div class="navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="src/img/logo/logo.png" alt="Logo" />
                            </a>
                            <button
                                class="navbar-toggler"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div
                                class="collapse navbar-collapse sub-menu-bar"
                                id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#servicos">Serviços</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="src/pages/planos.php">Planos e Templates</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#redes">Redes</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="src/pages/faleconosco.php">Fale conosco</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#empresa">Sobre a empresa</a>
                                    </li>

                                    <li class="nav-item-login">
                                        <a href="login.php">Login</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->
    </header>
    <!-- ======== header end ======== -->

    <!-- ======== hero-section start ======== -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            Bem-vindo à Aurora Ability IT
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            Somos apaixonados por transformar ideias em experiências digitais acessíveis, funcionais e inovadoras.
                            Na Aurora Ability, tecnologia e inclusão caminham lado a lado para criar soluções únicas, feitas sob medida para cada pessoa.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            Comece agora sua jornada digital com propósito.
                        </p>
                        <a
                            href="src/pages/planos.php"
                            class="main-btn border-btn btn-hover wow fadeInUp"
                            data-wow-delay=".6s">Começar agora</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
                        <img src="src/img/hero-img.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== hero-section end ======== -->

    <!-- ======== feature-section start ======== -->
    <section id="servicos" class="py-5">
        <div class="container">
            <div class="row text-center justify-content-center">

                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="single-feature">
                        <div class="icon-circle">
                            <i class='bx bx-code'></i>
                        </div>
                        <h5>Sites Responsivos</h5>
                        <p>Sites que se adaptam a qualquer dispositivo, proporcionando a melhor experiência ao usuário.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="single-feature">
                        <div class="icon-circle">
                            <i class='bx bx-store-alt-2'></i>
                        </div>
                        <h5>Lojas Virtuais</h5>
                        <p>Comércio eletrônico moderno com design atrativo e ferramentas para aumentar suas vendas.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="single-feature">
                        <div class="icon-circle">
                            <i class='bx bx-pencil'></i>
                        </div>
                        <h5>Otimização SEO</h5>
                        <p>Melhoramos o posicionamento do seu site no Google e atraímos mais visitantes qualificados.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="single-feature">
                        <div class="icon-circle">
                            <i class='bx bx-mobile'></i>
                        </div>
                        <h5>Desenvolvimento Mobile</h5>
                        <p>Aplicativos com design moderno e foco em usabilidade, performance e integração com sistemas web.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ======== feature-section end ======== -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <small class="text-uppercase text-secondary fw-bold">Planos</small>
            <h2 class="fw-bold mt-2">Nossos <span class="text-primary">Planos</span></h2>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="tour-card position-relative">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400?text=Beach" alt="Beach" class="tour-image">
                        <span class="price-tag">$2,150</span>
                    </div>
                    <div class="p-3">
                        <h5 class="fw-bold">Serene Beach Retreat</h5>
                        <p class="small text-muted">Mauris ipsum neque, cursus ac ipsum at, iaculis facilisis ligula.
                            Suspendisse non sapien vel enim cursus semper.</p>
                        <div class="mb-2">
                            <span class="location-badge">Maldives</span>
                            <span class="location-badge">Seychelles</span>
                            <span class="location-badge">Bora Bora</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary btn-sm">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="tour-card position-relative">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400?text=Arctic" alt="Arctic" class="tour-image">
                        <span class="price-tag">$5,700</span>
                    </div>
                    <div class="p-3">
                        <h5 class="fw-bold">Arctic Wilderness Expedition</h5>
                        <p class="small text-muted">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae; Donec dictum non massa nec fermentum.</p>
                        <div class="mb-2">
                            <span class="location-badge">Greenland</span>
                            <span class="location-badge">Iceland</span>
                            <span class="location-badge">Norway</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary btn-sm">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="tour-card position-relative">
                    <div class="position-relative">
                        <img src="src/img/image.png" alt="Sahara" class="tour-image">
                        <span class="price-tag">$1,400</span>
                    </div>
                    <div class="p-3">
                        <h5 class="fw-bold">Sahara Desert Discovery</h5>
                        <p class="small text-muted">Pellentesque euismod tincidunt turpis ac tristique. Em lacus in enim
                            mollis facilisis vel quis ex.</p>
                        <div class="mb-2">
                            <span class="location-badge">Morocco</span>
                            <span class="location-badge">Egypt</span>
                            <span class="location-badge">Dubai</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="btn btn-primary btn-sm">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Call To Action Section -->
    <!-- <section class="section-cta cta">
        <div class="section-cta-text">
            <h2>Instale SiteHelper para ficar por dentro de seu projeto</h2>
            <p>Para maior segurança e acompanhamento no seu projeto, baixe nosso aplicativo para não perder nenhuma novidade nele</p>
            <button>Baixe Agora</button>
        </div>
    </section> -->

    <div id="empresa" class="header_hero">
        <ul id="redes" class="header_social d-none d-lg-block">
            <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
            <li><a href="#"><i class="bi bi-github"></i></a></li>
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
        </ul>
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="header_hero_content mt-45">
                        <div class="hero-texts">
                            <h5 class="header_sub_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Espera</h5>
                            <h2 class="header_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Você sabe quem é a Aurora Ability?</h2>
                            <span class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">A Aurora Ability nasceu de um grupo de jovens estudantes, cada um com sua perspectiva única e experiências diversas.</span>
                            <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">
                                Unidos por um propósito comum, eles decidiram transformar o mundo digital em um espaço mais acessível e acolhedor para todos. As ideias inovadoras de cada um, combinadas com a paixão por criar um ambiente digital inclusivo, deram origem à Aurorability, uma empresa que busca fazer a diferença na vida de todos os usuários.
                            </p>
                            <div class="buttons">
                                <a href="src/pages/empresa.php" rel="nofollow" class="main-btn-one wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s">Saiba Mais</a>
                                <a href="#servicos" rel="nofollow" class="main-btn-two wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s">Nossos Serviços</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COLUNA DO VÍDEO -->
                <div class="col-lg-6 col-md-6 col-sm-7">
                    <div class="header_hero_video mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="1.8s">
                        <video autoplay muted loop playsinline class="video-fluid">
                            <source src="src/video/hero.mp4" type="video/mp4">
                            Seu navegador não suporta vídeo em HTML5.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_hero_shape d-none d-lg-block"></div>
    </div>


    <section class="section">
        <h2>Nossos Projetos</h2>
        <p>Conheça outros projetos nossos</p>
        <div class="blogs d-flex flex-wrap justify-content-center gap-4">
            <!-- Card 1 -->
            <div class="blog-card" data-bs-toggle="modal" data-bs-target="#modalProjeto1" style="cursor: pointer;">
                <img src="src/img/projetos/projeto1.jpeg" alt="Blog 1">
                <div class="blog-tags"><span>Design</span><span>Engineering</span></div>
                <div class="blog-content">
                    <h3>Website Computação Quântica</h3>
                    <p>Website que é a base de uma introdução aos conhecimentos sobre a computação quântica</p>
                    <div class="blog-footer">
                        <span>👤 Alex Demo</span>
                        <span>📅 25 Mar, 2025</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="blog-card" data-bs-toggle="modal" data-bs-target="#modalProjeto2" style="cursor: pointer;">
                <img src="src/img/projetos/projeto2.jpeg" alt="Blog 2">
                <div class="blog-tags"><span>Development</span><span>Security</span></div>
                <div class="blog-content">
                    <h3>Website de jogos</h3>
                    <p>Website de desenvolvimento de jogos.</p>
                    <div class="blog-footer">
                        <span>👤 Hendary Jonson</span>
                        <span>📅 12 Feb, 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Projeto 1 -->
    <div class="modal fade" id="modalProjeto1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white">Website Computação Quântica</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body p-0">
                    <video id="videoProjeto1" controls autoplay muted loop style="width: 100%; border-radius: 0 0 8px 8px;">
                        <source src="src/video/quantica.mp4" type="video/mp4">
                        Seu navegador não suporta vídeo em HTML5.
                    </video>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Projeto 2 -->
    <div class="modal fade" id="modalProjeto2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white">Website de Jogos</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body p-0">
                    <video id="videoProjeto2" controls autoplay muted loop style="width: 100%; border-radius: 0 0 8px 8px;">
                        <source src="src/video/jogos.mp4" type="video/mp4">
                        Seu navegador não suporta vídeo em HTML5.
                    </video>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Aurora Ability IT. Todos os direitos reservados.</p>
        <p>Desenvolvido com foco em acessibilidade digital.</p>
    </footer>

    <!-- JSs -->
    <!-- Bootstrap JS (opcional, mas deixado caso queira usar dropdowns, etc) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/js/index.js"></script>
    <script src="src/js/mod.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>