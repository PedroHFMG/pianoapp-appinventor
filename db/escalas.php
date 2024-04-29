<?php

require_once('conexao.php');

$sql=$conexao->query('select nome_escala, notas, timer from escala');

if(!$sql)
    die("Impossível conectar");

$row_count = $sql->num_rows;

if($row_count > 0)
{
    while($fila = $sql->fetch_array(MYSQLI_ASSOC))
    {
        echo $fila['nome_escala'] . "," ;
        echo $fila['notas'] . "," ;
        echo $fila['timer'] . "," ;
    }
}

$sql->free();
$conexao->close();
?>