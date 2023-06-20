<?php
include 'includes/head.php'
?>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <?php
        include 'includes/navbar.php'
        ?>
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- cadastro form-->
                <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-person-circle"></i></div>
                        <h1 class="fw-bolder">Realize seu cadastro</h1>
                        <p class="lead fw-normal text-muted mb-0">Basta colocar suas informações abaixo e terá o acesso inicial!</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form id="cadastroForm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nomeInput" placeholder="Seu nome">
                                    <label for="nomeInput">Digite seu nome</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="userInput" placeholder="Seu usuario">
                                    <label for="userInput">Digite seu usuário</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="senhaInput" placeholder="">
                                    <label for="senhaInput">Digite uma senha</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                                    <label for="emailInput">Digite seu Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="empresaInput" aria-label="Floating label select example">
                                        <?php
                                        require 'controller/empresa.php';
                                        readEmpresas();
                                        ?>
                                    </select>
                                    <label for="empresaInput">Escolha sua empresa/função</label>
                                </div>
                                <!-- Submit Button-->
                                <div class="row"><button class="col btn btn-primary btn-lg" id="enviarBtn" type="submit">Enviar</button></div>
                            </form>
                            <script>
                                $(document).ready(function() {
                                    $('#cadastroForm').submit(function(event) {
                                        // Impedir o envio padrão do formulário
                                        event.preventDefault();
                                        // Obter os valores dos campos do formulário
                                        var nome = $('#nomeInput').val();
                                        var user = $('#userInput').val();
                                        var senha = $('#senhaInput').val();
                                        var email = $('#emailInput').val();
                                        var empresa = $('#empresaInput').val();
                                        // Definir a ação do CRUD
                                        var acao = 'create'; // Pode ser 'create', 'update' ou 'delete' dependendo da ação desejada
                                        // Criar um objeto de dados para enviar ao servidor
                                        var data = {
                                            nome: nome,
                                            user: user,
                                            senha: senha,
                                            email: email,
                                            empresa: empresa,
                                            acao: acao
                                        };
                                        // Enviar a solicitação AJAX
                                        $.ajax({
                                            url: 'controller/users.php',
                                            type: 'POST',
                                            data: data,
                                            success: function(response) {
                                                // Manipular a resposta do servidor aqui
                                                console.log(response);
                                                alert('Usuário salvo com sucesso!');
                                            },
                                            error: function(xhr, status, error) {
                                                // Lidar com erros de requisição aqui
                                                console.error(error);
                                                alert('Ocorreu um erro ao salvar o usuário. Por favor, tente novamente.');
                                            }
                                        });
                                    });
                                });
                            </script>
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