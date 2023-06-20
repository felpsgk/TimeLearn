<?php
include 'includes/head.php'
?>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <?php
        include 'includes/navbar.php'
        ?>
        <?php
        include 'includes/logoutModal.php'
        ?>
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- Contact form-->
                <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Entre em contato</h1>
                        <p class="lead fw-normal text-muted mb-0">Responderemos assim que possível!</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form id="contactForm" onsubmit="return enviarFormulario();">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nomeInput" placeholder="Seu nome">
                                    <label for="nomeInput">Digite seu nome</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                                    <label for="emailInput">Digite seu Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Qual sua mensagem" id="msgInput"></textarea>
                                    <label for="msgInput">Qual sua mensagem?</label>
                                </div>
                                <!-- Submit Button-->
                                <div class="row"><button class="col btn btn-primary btn-lg" id="enviarBtn" type="submit">Enviar</button></div>
                            </form>
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