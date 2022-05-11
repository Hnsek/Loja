<?php 
require('../Model/Produto')

    $produto = new Produto();

    $produtos = $produto->buscar();

    $produtosBuscados = $produtos->fetchAll();

    foreach($produtosBuscados as $produtoBuscado){
        echo nl2br($produtoBuscado."\n");
    }


?>