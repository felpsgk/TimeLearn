<?php
session_start();
if ($_SESSION['perfil'] <> 1) {
    echo '<style type="text/css">
            #master {
                display: none;
            }
            </style>';
}
include 'includes/head.php';
?>

<body class="d-flex flex-column h-100">
    <main id="master" class="flex-shrink-0">
        <?php
        include 'includes/navbar.php'
        ?>
        <?php
        include 'includes/logoutModal.php'
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
                            <form id="cadastroTopicoForm">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="nomeInput" id="nomeInput" placeholder="Seu nome">
                                    <label for="nomeInput">Digite o nome do tópico</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea maxLength="512" required="required" class="form-control" placeholder="Leave a comment here" name="descTopico" id="descTopico"></textarea>
                                    <label for="descTopico">Descrição do tópico</label>
                                    <p class="small text-end"><span class="caracteresDesc">512</span> Restantes</p>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="imgInput" aria-label="Floating label select example">
                                        <?php
                                        $diretorio = 'img/'; // diretório que deseja listar os arquivos
                                        $arquivos = scandir($diretorio); // obtém os nomes dos arquivos no diretório
                                        // Filtra os arquivos para remover os diretórios . e ..
                                        $arquivos = array_diff($arquivos, array('.', '..'));
                                        // Exibe os nomes dos arquivos
                                        foreach ($arquivos as $arquivo) {
                                            echo '<option id="id" value="img/' . $arquivo . '">img/' . $arquivo . '</option>';
                                        }
                                        ?>
                                    </select>
                                    <label for="imgInput">Escolha sua empresa/função</label>
                                </div>
                                <!-- Submit Button-->
                                <div class="row" id="alerta"><button class="col btn btn-primary btn-lg mb-3" id="enviarBtn" type="submit">Enviar</button></div>
                            </form>
                            <script>
                                $(document).ready(function() {
                                    $('#cadastroTopicoForm').submit(function(event) {
                                        // Impedir o envio padrão do formulário
                                        event.preventDefault();
                                        // Obter os valores dos campos do formulário
                                        var nome = $('#nomeInput').val();
                                        var descricao = $('#descTopico').val();
                                        var imgsrc = $('#imgInput').val();
                                        // Definir a ação do CRUD
                                        var acao = 'create'; // Pode ser 'create', 'update' ou 'delete' dependendo da ação desejada
                                        // Criar um objeto de dados para enviar ao servidor
                                        var data = {
                                            nome: nome,
                                            descricao: descricao,
                                            imgsrc: imgsrc,
                                            acao: acao
                                        };
                                        // Enviar a solicitação AJAX
                                        $.ajax({
                                            url: 'controller/topicos.php',
                                            type: 'POST',
                                            data: data,
                                            success: function(resultado) {
                                                // Manipular a resposta do servidor aqui
                                                $('#alerta').append(resultado);
                                            },
                                            error: function(xhr, status, error) {
                                                // Lidar com erros de requisição aqui
                                                console.error(error);
                                                alert('Ocorreu um erro ao salvar o topico. Por favor, tente novamente.');
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