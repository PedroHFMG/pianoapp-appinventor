<?php

require_once('conexao.php');

$sql=$conexao->query("insert into pianoapp (notas, tempo, titulo) values ('". $_POST['notas']."','". $_POST['tempo']."','" . $_POST['titulo']."')");

if(!$sql)
    die("Impossível conectar");


$sql->free();
$conexao->close();