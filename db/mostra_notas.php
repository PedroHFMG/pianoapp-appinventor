<?php

require_once('conexao.php');

$sql=$conexao->query('select notas, titulo, tempo from pianoapp');

if(!$sql)
    die("Impossível conectar");

$row_count = $sql->num_rows;

if($row_count > 0)
{
    while($fila = $sql->fetch_array(MYSQLI_ASSOC))
    {
        echo $fila['notas'] . "," ;
        echo $fila['titulo'] . "," ;
        echo $fila['tempo'] . "," ;
    }
}

$sql->free();
$conexao->close();
?>