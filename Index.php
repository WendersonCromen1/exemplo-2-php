<?php
include("Produtos.php");
include("Vendas2.php");
include ("Loja.php");

        $p1 = new Produtos();
        $p1->id=1;
        $p1->nome="notebook";
        $p1->valor=1000;
        $p1->quantidade=3;
        $this->numProd++;
        $p1->Calcular();

        $p2 = new Produtos();
        $p2->id=2;
        $p2->nome="XBOX360";
        $p2->valor=2000;
        $p2->quantidade=3;
        $this->numProd++;
        $p2->Calcular();

        $p3 = new Produtos();
        $p3->id=3;
        $p3->nome="PS5";
        $p3->valor=3000;
        $p3->quantidade=3;
        $this->numProd++;
        $p3->Calcular();

        $p4 = new Produtos();
        $p4->id=4;
        $p4->nome="PS5";
        $p4->valor=3000;
        $p4->quantidade=3;
        $this->numProd++;
        $p4->Calcular();

        $venda1 =  new Vendas();
        $venda1->id=1;
        $venda1->pagamento="NÃO EVETUADO";
        $venda1->$tipoVenda="A PRAZO";
        $venda1->produtos[0]=$p1;
        $venda1->numProd++;

        $venda2 =  new Vendas();
        $venda2->id=1;
        $venda2->pagamento="NÃO EVETUADO";
        $venda2->$tipoVenda="A PRAZO";
        $venda2->produtos[1]=$p2;
        $venda2->numProd++;

        $venda3 =  new Vendas();
        $venda3->id=1;
        $venda3->pagamento="NÃO EVETUADO";
        $venda3->$tipoVenda="A VISTA";
        $venda3->produtos[2]=$p3;
        $venda3->numProd++;

        $venda4 =  new Vendas();
        $venda4->id=1;
        $venda4->pagamento="NÃO EVETUADO";
        $venda4->$tipoVenda="A PRAZO";
        $venda4->produtos[3]=$p4;
        $venda4->numProd++;

        $venda5 =  new Vendas();
        $venda5->id=1;
        $venda5->pagamento="NÃO EVETUADO";
        $venda5->$tipoVenda="A VISTA";
        $venda5->produtos[3]=$p4;
        $venda5->numProd++;
        $venda5->produtos[2]=$p3;
        $venda5->numProd++;

        $Loja = new Loja();
        $Loja->vendas[0] = $venda1;
        $Loja->vendas[1] = $venda2;
        $Loja->vendas[2] = $venda3;
        $Loja->vendas[3] = $venda4;
?>