<?php
class Livro{
    private $titulo;
    private $autor;
    private $totPag;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPag, $pagAtual){
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPag($totPag);
        $this->setPagAtual($pagAtual);
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getTotPag(){
        return $this->totPag;
    }

    public function getPagAtual(){
        return $this->pagAtual;
    }

    public function getAberto(){
        return $this->aberto;
    }

    public function getLeitor(){
        return $this->leitor;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

    public function setTotPag($totPag){
        $this->totPag = $totPag;
    }

    public function setPagAtual($pagAtual){
        if($pagAtual > $this->getTotPag()){
            echo "<p>A pagina escolhida não condiz com o total de paginas que existem neste livro</p>";
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $pagAtual;
        }
    }

    public function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor){
        $this->leitor = $leitor;
    }
}