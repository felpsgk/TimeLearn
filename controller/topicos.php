<?php
function readTopicos()
{
    require 'conexao.php';
    $sql = "SELECT id, nome, descricao, imgsrc FROM topicos ORDER BY nome ASC;";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    //echo $result;
    while ($row = mysqli_fetch_array($result)) :; ?>

        <div class="col-md-6">
            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                <div class="card-body p-0">
                    <div class="d-flex align-items-center">
                        <div class="row">
                            <div class="col-md-6 p-5">
                                <h2 class="fw-bolder"><?php echo $row['nome'] ?></h2>
                                <p class="text-break"><?php echo $row['descricao'] ?></p>
                                <a style="background: linear-gradient(to right, #1e30f3, #6f42c1);  color: #fff;  width: 100%;  padding: 10px 20px;  border: none;  border-radius: 5px;  cursor: pointer;" onmouseover="this.style.background ='linear-gradient(to right, #6f42c1, #1e30f3)';" onmouseout="this.style.background ='linear-gradient(to right, #1e30f3, #6f42c1)';" class="btn" role="button" href="agendas.php">Buscar agenda</a>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" style="width: 300px; height: 400px;" src="<?php echo $row['imgsrc'] ?>" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php endwhile;
    // Fecha a conexão com o banco de dados
    $conn->close();
}
if ($_POST['acao'] == "create") {
    require 'conexao.php';
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $imgsrc = $_POST['imgsrc'];

    // Realiza a inserção no banco de dados 
    $sql = "INSERT INTO topicos (nome, descricao, imgsrc) 
    VALUES ('$nome', '$descricao','$imgsrc')";
    //echo $sql;
    if ($conn->query($sql) === true) {
        $resultado = '<div class="alert alert-success alert-dismissible fade show" role="alert">Tópico ' . $nome . ' cadastrado com sucesso! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    } else {
        $resultado = '<div class="alert alert-secondary" role="alert">Erro ao cadastrar ->' . $conn->error . '</div>';;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();

    // Retorna a resposta para o Ajax
    echo $resultado;
}
if ($_POST['acao'] == "update") {
}

?>