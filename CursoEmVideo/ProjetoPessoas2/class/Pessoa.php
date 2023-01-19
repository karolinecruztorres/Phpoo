<?php
abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $genero;

    public final function fazerAniversario() {
        $this->idade ++;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getGenero() {
        return $this->genero;
    }
    public function setGenero($genero) {
        $this->genero = $genero;
    }
}
?>