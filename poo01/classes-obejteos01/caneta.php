<?php
    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;
        function tampar(){
            $this->tampada = true;
        }

        function destampar(){
            $this->tampada = false;
        }

        function rabiscar(){
            if ($this->tampada){
                echo "<p>Destanpe a caneta!</p>";;
            }else{
                echo "<p>Estou rabiscando...</p>";
            }
           
        }

        
    }

?>