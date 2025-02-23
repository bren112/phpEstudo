<?php

    class Animal {
        public $Codigo;
        public $Nome;
        public $Especie;
        function __construct($codigo = null , $nome = null , Especie $especie = null) 
        {

            $this->Codigo = $codigo;
            $this->Nome = $nome;    
            $this->Especie = $especie;
            if ($especie != null) 
                $this->Especie = $especie;
                else
                $this ->Especie = new Especie();
    }
}

?>