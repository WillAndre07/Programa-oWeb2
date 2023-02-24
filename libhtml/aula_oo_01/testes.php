<?php
include_once "classes/aluno.class.php";

$aluno1 = new Aluno("Leticia", "Maçaneiro", 14, "9 ano");
//$aluno1->setNome("Leticia"); //$aluno1->nome = "Leticia";
//$aluno1->setSobrenome('Maçaneiro');
//$aluno1->setIdade(14);
//$aluno1->setTurma("9 ano");

var_dump($aluno1);

//$aluno1->getNomeCompleto();
echo "O nome do aluno é: {$aluno1->getNomeCompleto()}";

echo($aluno1);