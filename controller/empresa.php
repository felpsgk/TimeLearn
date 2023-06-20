<?php
function readEmpresas()
{
    require 'conexao.php';
    $sql = "SELECT id, nome FROM empresa ORDER BY nome ASC;";
    //echo $sql;
    $result = mysqli_query($conn, $sql);
    echo $result;
    while ($row = mysqli_fetch_array($result)) :; ?>

        <option id="empresa" value="<?php echo $row['id'] ?>"><?php echo $row['empresa'] ?></option>

<?php endwhile;
}
?>