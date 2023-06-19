    <?php
    include 'includes/head.php'
    ?>

    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <?php
            include 'includes/navbar.php'
            ?>
            <!-- Header-->
            <header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                                    <div class="text-uppercase">Ensine &middot; Aprenda &middot; Descubra</div>
                                </div>
                                <div class="fs-3 fw-light text-muted">Aqui você detém o poder</div>
                                <h1 class="display-2 fw-bolder mb-5"><span class="text-gradient d-inline">Busque ou forneça o conhecimento</span></h1>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-4 py-4 me-sm-3 fs-6 fw-bolder" href="#">Saiba mais</a>
                                    <a id="btn-cad" class="btn btn-outline- btn-lg px-4 py-4 fs-6 fw-bolder text-white" href="#">Cadastrar</a>
                                    <a id="btn-logar" class="btn btn-outline-dark btn-lg px-4 py-4 fs-6 fw-bolder text-white" href="#">Logar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <!-- Header profile picture-->
                            <?php
                            include 'includes/dots.php'
                            ?>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Sobre nós</span></h2>
                                <p class="lead fw-light mb-4">Somos a TimeLearn</p>
                                <p class="text-muted">Com objetivo de permitir o aprendizado e busca de conhecimento seletivo no seu tempo de disponibilidade, surgiu a TimeLearn. Aqui você poderá agendar ou se disponibilizar para consultorias e treinamentos de acordo com o seu tempo, e receber por isso!</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <p class="lead fw-light mb-4">Criadores</p>
                                </div>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="https://twitter.com/GeekGk"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="https://www.linkedin.com/in/felipe-p-machado/"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="https://github.com/felpsgk"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php
        include 'includes/footer.php'
        ?>
    </body>

    </html>