<?php
require_once "Pessoa.php";
class Livro{
    private $titulo;
    private $autor;
    private $totPag;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes(){
        return "<p>O livro {$this->getTitulo()} do autor {$this->getAutor()}, possui {$this->getTotPag()} paginas ao todo, e o leitor {$this->getLeitor()->getNome()} está atualmente na pagina {$this->getPagAtual()}</p>";
    }

    public function abrir(){
        $this->setAberto(true);
        echo "<p>Livro Aberto</p>";
    }

    public function fechar(){
        $this->setAberto(false);
        echo "<p>Livro Fechado</p>";
    }

    public function folhear(){
        if($this->getAberto()){
            echo "<p>Folheando o livro...</p>";
            $pag = rand(1, $this->getTotPag());
            $this->setPagAtual($pag);
            echo "<p>Parou na pagina {$this->getPagAtual()} para começar a ler</p>";
        }else{
            echo "<p>Abra o livro para poder folhea-lo</p>";
        }
    }

    public function avançarPag(){
        if($this->getAberto()){
            $pag = $this->getPagAtual() + 1;
            if($pag < $this->getTotPag()){
                $this->setPagAtual($pag);
                echo "<p>Avançando para a pagina {$this->getPagAtual()}</p>";
            }else{
                echo "<p>As paginas do livro chegaram ao fim</p>";
            }
        }else{
            echo "<p>Abra o livro para poder mudar de pagina</p>";
        }
        
    }

    public function voltarPag(){
        if($this->getAberto()){
            $pag = $this->getPagAtual() - 1;
            if($pag >= 0){
               $this->setPagAtual($pag);
               echo "<p>Voltando para a pagina {$this->getPagAtual()}</p>"; 
            }else{
                echo "<p>Está na primeira pagina, agora so pode avançar de pagina</p>";
            }
            
        }else{
            echo "<p>Abra o livro para pader mudar de pagina </p>";
        }
       
    }

    public function __construct($titulo, $autor, $totPag, $pagAtual, $leitor){
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPag($totPag);
        $this->setPagAtual($pagAtual);
        $this->setLeitor($leitor);
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