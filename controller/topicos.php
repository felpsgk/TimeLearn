<?php
function readTopicos()
{
    require 'conexao.php';
    $sql = "SELECT id, nome, descricao, imgsrc FROM topicos ORDER BY nome ASC;";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    //echo $result;
    while ($row = mysqli_fetch_array($result)) :; ?>
        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
            <div class="card-body p-0">
                <div class="d-flex align-items-center">
                    <div class="p-5">
                        <h2 class="fw-bolder"><?php echo $row['nome'] ?></h2>
                        <p class="text-break"><?php echo $row['descricao'] ?></p>
                        <button type="button" 
                        style="background: linear-gradient(to right, #1e30f3, #6f42c1);  color: #fff;  width: 100%;  padding: 10px 20px;  border: none;  border-radius: 5px;  cursor: pointer;" 
                        onmouseover="this.style.background ='linear-gradient(to right, #6f42c1, #1e30f3)';"  
                        onmouseout="this.style.background ='linear-gradient(to right, #1e30f3, #6f42c1)';" 
                        class="button"
                        href="agendas.php">Buscar agenda</button>
                    </div>
                    <img class="img-fluid" style="width: 300px; height: 400px;" src="<?php echo $row['imgsrc'] ?>" alt="..." />
                </div>
            </div>
        </div>

<?php endwhile;
}
?>