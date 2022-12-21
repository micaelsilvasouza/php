<?php
require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes(){
        return "<hr><p>
            O livro {$this->titulo} escrito por {$this->autor}
            <br>
            Paginas: {$this->totPaginas} atual {$this->pagAtual}
            <br>
            Sendo lido por {$this->leitor->getNome()}
        </p>";
    }

    public function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getTotPaginas(){
        return $this->totPaginas;
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

    public function setTotPaginas($totPagina){
        $this->totPaginas = $totPaginas;
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

    public function abrir(){
        $this->aberto = true;
    }

    public function fechar(){
        $this->aberto = false;
    }

    public function avancarPag(){
        if (($this->pagAtual + 1 ) > $this->totPaginas){
            $this->pagAtual = $this->totPaginas;
        }else{
            $this->pagAtual ++;
        }
       
    }

    public function voltarPag(){
        if(($this->pagAtual - 1) < 0){
            $this->pagAtual = 0;
        }else{
            $this->pagAtuall --;
        }
        
    }

    public function folhear($p){
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }
}