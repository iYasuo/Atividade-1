<?php
    class Cadeira{

        public $cor;
        public $peso;
        public $material;
        public $durabilidade;
        public $custo;
        public $tamanho;
        public $encosto;
        public $regulagem_minima;
        public $regulagem_maxima;

        public function __construct ($cor,$peso,$material,$durabilidade,$custo,$encosto,$regulagem_minima,$regulagem_maxima){
            $this->cor = $cor;
            $this->peso = $peso;
            $this->material = $material;
            $this->durabilidade = $durabilidade;
            $this->custo = $custo;
            $this->tamanho = $regulagem_minima;
            $this->encosto = $encosto;
            $this->regulagem_minima = $regulagem_minima;
            $this->regulagem_maxima = $regulagem_maxima;
        }

        public function aumentar($medida) {
            $this->tamanho = $this ->tamanho + $medida;
            if ($this->tamanho>$this->regulagem_maxima) {
                $this->tamanho = $this->regulagem_maxima;
            }
        }

        public function diminuir($medida) {
            $this->tamanho = $this ->tamanho - $medida;
            if ($this->tamanho>$this->regulagem_minima) {
                $this->tamanho = $this->regulagem_minima;
            }
        }
    }
?>
