<?php
function readTopicos()
{
    require 'conexao.php';
    $sql = "SELECT id, nome, descricao, imgsrc FROM topicos ORDER BY nome ASC;";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    echo $result;
    while ($row = mysqli_fetch_array($result)) :; ?>
        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
            <div class="card-body p-0">
                <div class="d-flex align-items-center">
                    <div class="p-5">
                        <h2 class="fw-bolder"><?php echo $row['nome'] ?></h2>
                        <p><?php echo $row['descricao'] ?></p>
                    </div>
                    <img class="img-fluid" src="<?php echo $row['imgsrc'] ?>" alt="..." />
                </div>
            </div>
        </div>

<?php endwhile;
}
?>