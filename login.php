<?php

include ('./misFunciones.php');

$mysqli = conectaBBDD();

$cajaNombre = $_POST['cajaNombre'];
$cajaPassword = $_POST['cajaPassword'];

//echo 'Has escrito el usuario caja nombre: '.$cajaNombre.' y la contraseña; '.$cajaPassword;

$resultadoQuery = $mysqli->query("SELECT * FROM preguntas");

$numPreguntas = $resultadoQuery -> num_rows;

for($i = 0; $i < $numPreguntas; $i++){
    $registro = $resultadoQuery -> fetch_array();
    echo $registro['enunciado'].'</br>';
    
}