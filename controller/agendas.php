<?php
function readAgendas()
{
    require 'conexao.php';
    $sql = "SELECT c.id, DATE_FORMAT(c.data, '%d/%m/%Y') dataagenda, c.hora, c.duracao, t.nome AS topico, t.descricao AS resumotopico, t.imgsrc, u.nome AS consultor
    FROM consultorias c
    INNER JOIN topicos t ON c.idtopico = t.id
    INNER JOIN users u ON c.idconsultor = u.id
    LEFT JOIN agendas a ON c.id = a.idconsultoria
    WHERE a.id IS NULL;";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    //echo $result;
    while ($row = mysqli_fetch_array($result)) :; ?>
        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
            <div class="card-body p-0">
                <div class="d-flex align-items-center">
                    <div class="p-5">
                        <h2 class="fw-bolder"><?php echo $row['topico'] ?></h2>
                        <p class="text-break"><?php echo $row['resumotopico'] ?></p>
                        <div class="row">
                            <p class="col text-start m-2" id="horaCurso"><?php echo $row['duração'] ?> minutos</p>
                            <p class="col text-end m-2" id="dataCurso">Dia <?php echo $row['dataagenda'] ?></p>
                        </div>
                        <a style="background: linear-gradient(to right, #1e30f3, #6f42c1);  color: #fff;  width: 100%;  padding: 10px 20px;  border: none;  border-radius: 5px;  cursor: pointer;" onmouseover="this.style.background ='linear-gradient(to right, #6f42c1, #1e30f3)';" onmouseout="this.style.background ='linear-gradient(to right, #1e30f3, #6f42c1)';" class="btn" role="button" href="#">Agendar</a>
                    </div>
                    <img class="img-fluid" style="width: 300px; height: 400px;" src="<?php echo $row['imgsrc'] ?>" alt="..." />
                </div>
            </div>
        </div>

<?php endwhile;
}
?>