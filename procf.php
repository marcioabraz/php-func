<?php


function findId($array, $int){
    foreach ($array as  $val) {
        if ($val['id'] == $int){
            echo "Nome: " .$val['nome'] . " Salario: " . number_format($val['salario'],2)."\n" ;
        }
    }
}

$dados = [["id"  => 1,   "nome" => "João",    "<br> Salario" => 3.000],[    "id"  => 2,    "nome" => "pedro",    "salario" => 1.000]];
$id = $_POST['idf'];


findId($dados,$id);

?>
