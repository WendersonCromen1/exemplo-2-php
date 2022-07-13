<?php
class Loja{

    public $vendas;

    function Imprimir(){
        echo "Venda" . "</br>";
        for ($i=0; $i<$this->count; $i++){
            echo " -id:" . $this->vendas[$i]->id . "</br>" .
            " -Pagamento:" . $this->vendas[$i]->pagamento . "</br>" .
            " -Tipo de venda:" . $this->vendas[$i]->tipoVenda . "</br>";
        }
    }
    
}
?>
