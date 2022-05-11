<?php
require('../conexao.php');

// Your code here!
    class Carrinho{
        function adicionar($produto_id, $categoria_id){
            
            $conexao = new Banco()->getConexao();
            
            $sql = "INSERT INTO carrinho(produto_id, categoria_id) VALUES(:produto_id, :categoria_id)";
            
            $query = $conexao->prepare($sql);

            $query->bindParam(":produto_id", $produto_id, PDO::PARAM_INT);
            $query->bindParam(":categoria_id", $categoria_id, PDO::PARAM_INT);

            $query.execute();
            
            $conexao = null;
            

        }
        function buscar(){
            $conexao = new Banco()->getConexao();
            
            $sql = "SELECT * FROM carrinho";
            
            $query = $conexao->prepare($sql);
            
            $query->execute();
            
            $conexao = null;
            
            return $query;
            
        }
        function atualizarProdutoId($id, $produto_id)
        {
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE carrinho SET produto_id=:produto_id WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":produto_id", $produto_id, PDO::PARAM_INT);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
        function atualizarCategoriaId($id, $categoria_id)
        {
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE carrinho SET categoria_id=:categoria_id WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":categoria_id", $produto_id, PDO::PARAM_INT);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
        function deletar($id){
            $conexao = new Banco()->getConexao();
            
            $sql = "DELETE FROM carrinho WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
    }
?>