<?php
class Vendas{
    public $id;
    public $pagamento;
    public $tipoVenda;
    public $valor;
    public $produtos;
    public $numProd=0;

    function CalcularVendas(){
        $this->valor=0;
        for ($i=0; $i<$this->numProd; $i++){
            echo $this->valor+=$this->produtos[$i]->valorTotal . "</br>";
        }
    }

    function Imprimir(){
        $this->CalcularVendas();
        echo "Valor da venda: " . $this->valor . "</br>";
        for ($i=0; $i<$this->numProd; $i++){
            echo " -Produto" . $this->produtos[$i]->nome . 
            " -Valor da unidade" . $this->produtos[$i]->valor.
            " -Quantidade" . $this->produtos[$i]->quantidade .
            " -Valor Total" . $this->produtos[$i]->valorTotal . "</br>";
        }
    }
}
?>