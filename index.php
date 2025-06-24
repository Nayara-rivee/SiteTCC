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

    <!-- BOXICON  -->
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>

    <!-- CSS GLOBAL -->
    <!-- <link rel="stylesheet" href="src/css-globais/navbar.css"> -->
    <link rel="stylesheet" href="src/css/css-globais/Footer.css">

    <!-- CSS DA PÁGINA -->
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="stylesheet" href="src/css/bootstrap.min.css" />

    <!-- CSS RESPONSIVO -->
    <link rel="stylesheet" href="src/css/responsivo.css">

    <!-- JS DE ACESSIBILIDADE -->
    <script src="src/js/acessibilidade.js" defer></script>


</head>

<body>
    <!-- <nav class="navbar">
        <div class="logo">Aurora Ability IT</div>
        <ul class="menu">
            <li><a href="index.php">Início</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="planos.php">Planos</a></li>
            <li><a href="acessibilidade.php">Acessibilidade</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav> -->

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
                                        <a class="page-scroll" href="#features">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#why">Why</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)">Clients</a>
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
                            Your using free lite version
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            Please, purchase full version to get all sections, features and
                            permission to remove footer credit.
                        </p>
                        <a
                            href="javascript:void(0)"
                            class="main-btn border-btn btn-hover wow fadeInUp"
                            data-wow-delay=".6s">Purchase Now</a>
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
    <section id="features" class="feature-section pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class='bxr  bx-code'></i>
                        </div>
                        <div class="content">
                            <h3>Sites Responsivos</h3>
                            <p>Sites que se adaptam a qualquer dispositivo, proporcionando a melhor experiência ao usuário.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class='bxr  bx-store-alt-2'></i>
                        </div>
                        <div class="content">
                            <h3>Lojas Virtuais</h3>
                            <p>Comércio eletrônico moderno com design atrativo e ferramentas para aumentar suas vendas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class='bxr  bx-pencil-draw'></i>
                        </div>
                        <div class="content">
                            <h3>Otimização SEO</h3>
                            <p>Melhoramos o posicionamento do seu site no Google e atraímos mais visitantes qualificados.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class='bxr  bx-mobile'></i>
                        </div>
                        <div class="content">
                            <h3>Desenvolvimento Mobile</h3>
                            <p>Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== feature-section end ======== -->

    <!-- Features Section -->
    <section class="features-section">
        <div class="features-left">
            <h2>Crafted for Startup, SaaS and Business Sites.</h2>
            <p>The main ‘thrust’ is to focus on educating attendees on how to best protect highly vulnerable business applications with interactive panel discussions and roundtables.</p>
            <ul class="checklist">
                <li>Premium quality</li>
                <li>Next.js</li>
                <li>Tailwind CSS</li>
                <li>Rich documentation</li>
                <li>Use for lifetime</li>
                <li>Developer friendly</li>
            </ul>
        </div>
        <div class="features-right">
            <div class="features-image"></div>
        </div>
    </section>

    <!-- Details Section -->
    <section class="details-section">
        <div class="details-img"></div>
        <div class="details-content">
            <h4>Bug free code</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

            <h4>Premier support</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

            <h4>Next.js</h4>
            <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt consectetur adipiscing elit setim.</p>
        </div>
    </section>

    <!-- Call To Action Section -->
    <section class="section-cta cta">
        <div class="section-cta-text">
            <h2>What are you waiting for?</h2>
            <p>Our AI writing tool is designed to empower you with exceptional writing capabilities, making the writing process more efficient, accurate, and enjoyable.</p>
            <button>Get Started for Free</button>
        </div>
    </section>

    <!-- Comunidade Form Section -->
    <section class="section">
        <h2>Contact With Us</h2>
        <p>Our AI writing tool is designed to empower you with exceptional writing capabilities, making the writing process more efficient, accurate, and enjoyable.</p>
        <form class="contact-form">
            <div class="form-row">
                <input type="text" placeholder="Enter your Name">
                <input type="email" placeholder="Enter your Email">
            </div>
            <textarea placeholder="Type your message"></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <div id="home" class="header_hero">
        <ul class="header_social d-none d-lg-block">
            <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
            <li><a href="#"><i class="bi bi-github"></i></a></li>
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
        </ul>
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="header_hero_content mt-45">
                        <h5 class="header_sub_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Hello</h5>
                        <h2 class="header_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">You are using free lite version of Freelancer</h2>
                        <span class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Please, purchase full version to get all elements, features, footer credit removal permission and commercial license</span>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                        <a href="https://rebrand.ly/freelancer-ud" rel="nofollow" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s">Purchase Now</a>
                    </div> <!-- header hero content -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-7">
                    <div class="header_hero_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="1.8s">
                        <img src="src/img/image.png" alt="hero">
                    </div> <!-- header hero image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="header_hero_shape d-none d-lg-block"></div> <!-- header hero shape -->
    </div> <!-- header hero -->

    <!-- Blog Section -->
    <section class="section">
        <h2>Latest Blogs & News</h2>
        <p>Our AI writing tool is designed to empower you with exceptional writing capabilities, making the writing process more efficient, accurate, and enjoyable.</p>
        <div class="blogs">
            <div class="blog-card">
                <img src="https://placehold.co/600x300/8e44ad/fff?text=Blog+1" alt="Blog 1">
                <div class="blog-tags"><span>Design</span><span>Engineering</span></div>
                <div class="blog-content">
                    <h3>Revolution in Content Creation and Communication</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt...</p>
                    <div class="blog-footer">
                        <span>👤 Alex Demo</span>
                        <span>📅 25 Mar, 2025</span>
                    </div>
                </div>
            </div>
            <div class="blog-card">
                <img src="https://placehold.co/600x300/6c5ce7/fff?text=Blog+2" alt="Blog 2">
                <div class="blog-tags"><span>Development</span><span>Security</span></div>
                <div class="blog-content">
                    <h3>How AI Writing Tools Empower Writers to Speed up their Writing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt...</p>
                    <div class="blog-footer">
                        <span>👤 Hendary Jonson</span>
                        <span>📅 12 Feb, 2025</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- <section class="planos">
        <h2>Nossos Planos</h2>
        <div class="cards">
            <div class="card">
                <h3>Plano Essencial</h3>
                <p>Ideal para quem está começando. Acessibilidade básica incluída.</p>
            </div>
            <div class="card destaque">
                <h3>Plano Profissional</h3>
                <p>Design avançado + recursos para diversos tipos de deficiência.</p>
            </div>
            <div class="card">
                <h3>Plano Premium</h3>
                <p>Projeto completo, consultoria inclusiva e manutenção contínua.</p>
            </div>
        </div>
    </section> -->

    <footer class="footer">
        <p>&copy; 2025 Aurora Ability IT. Todos os direitos reservados.</p>
        <p>Desenvolvido com foco em acessibilidade digital.</p>
    </footer>

    <!-- JSs -->

    <script src="src/js/mod.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>