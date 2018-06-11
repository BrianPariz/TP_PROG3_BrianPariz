<?php
    class Helado
    {
        public $sabor;
        public $precio;
        public $tipo;
        public $kilos;
        public $foto;

        public function __toString()
        {
            return "$this->sabor-$this->precio-$this->tipo-$this->kilos-$this->foto".PHP_EOL;
        }
    }
?>