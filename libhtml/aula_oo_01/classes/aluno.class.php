<?php
class Aluno {
    private $nome;
    private $sobrenome;
    private $idade;
    private $turma;

    //function Aluno() {}

    function __construct($nomeExterno, $sobrenomeExterno, $idadeExterna, $turmaExterna)
    {
        $this->nome = $nomeExterno;
        $this->sobrenome = $sobrenomeExterno;
        $this->idade = $idadeExterna;
        $this->turma = $turmaExterna; 
    }

    function getNome() {
        return $this->nome;
    }

    function setNome($nomeExterno) {
        $this->nome = $nomeExterno;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function setSobrenome($sobrenomeExterno) {
        $this->nome = $sobrenomeExterno;
    }

    function getIdade() {
        return $this->idade;
    }

    function setIdade($idadeExterna) {
        $this->idade = $idadeExterna;
    }

    function getTurma() {
        return $this->turma;
    }

    function setTurma($turmaExterna) {
        $this->turma = $turmaExterna;
    }

    function getNomeCompleto() {
        //echo "O nome completo é: {$this->nome} {$this->sobrenome}";
        return "{$this->nome} {$this->sobrenome}";
    }

    function __toString()
    {
        return $this->nome . " " . $this->sobrenome;
    }
}