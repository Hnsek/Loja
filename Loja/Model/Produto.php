<?php
require('../conexao.php');

// Your code here!
    class Produto{
        function adicionar($nome, $descricao, $preco, $caminho_imagem, $categoria_id, $quantidade, $ncm){
            $conexao = new Banco()->getConexao();
            
            $sql = "INSERT INTO produtos(nome, descricao, preco, caminho_imagem, categoria_id, quantidade, ncm) VALUES(:nome, :descricao, :preco, :caminho_imagem, :categoria_id, :quantidade, :ncm)";
            
            $query = $conexao->prepare($sql);

            $query->bindParam(":nome", $nome, PDO::PARAM_STR);
            $query->bindParam(":descricao", $nome, PDO::PARAM_STR);
            $query->bindParam(":preco", $preco, PDO::PARAM_STR);
            $query->bindParam(":caminho_imagem", $caminho_imagem, PDO::PARAM_STR);
            $query->bindParam(":categoria_id", $categoria_id, PDO::PARAM_INT);
            $query->bindParam(":quantidade", $quantidade, PDO::PARAM_INT);
            $query->bindParam(":ncm", $ncm, PDO::PARAM_STR);

            $query.execute();
            
            $conexao = null;
            

        }
        function buscar(){
            $conexao = new Banco()->getConexao();
            
            $sql = "SELECT * FROM produtos";
            
            $query = $conexao->prepare($sql);
            
            $query->execute();
            
            $conexao = null;
            
            return $query;
            
        }
        function atualizarNome($id, $nome){
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE produtos SET nome=:nome WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":nome", $nome, PDO::PARAM_STR);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
        function atualizarDescricao($id, $descricao){
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE produtos SET descricao=:descricao WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":descricao", $descricao, PDO::PARAM_STR);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
        function atualizarPreco($id, $preco){
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE produtos SET preco=:preco WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":preco", $preco, PDO::PARAM_STR);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
        function atualizarCaminhoImagem($id, $caminho_imagem){
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE produtos SET caminho_imagem=:caminho_imagem WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":caminho_imagem", $caminho_imagem, PDO::PARAM_STR);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            $conexao = null;
        }
        
        function atualizarCategoriaId($id, $categoria_id){
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE produtos SET categoria_id=:categoria_id WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":categoria_id", $categoria_id, PDO::PARAM_INT);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
        function atualizarQuantidade($id, $quantidade){
                $conexao = new Banco()->getConexao();
                
                $sql = "UPDATE produtos SET quantidade=:quantidade WHERE id=:id";
                
                $query = $conexao->prepare($sql);
                
                $query->bindParam(":quantidade", $quantidade, PDO::PARAM_INT);
                
                $query->bindParam(":id", $id, PDO::PARAM_INT);
                
                $query->execute();
                
                $conexao = null;
            }
        function atualizarNCM($id, $ncm){
                $conexao = new Banco()->getConexao();
                
                $sql = "UPDATE produtos SET ncm=:ncm WHERE id=:id";
                
                $query = $conexao->prepare($sql);
                
                $query->bindParam(":ncm", $ncm, PDO::PARAM_STR);
                    
                $query->bindParam(":id", $id, PDO::PARAM_INT);
                
                $query->execute();
                
                $conexao = null;
            }
        
        
        
        function deletar($id){
            $conexao = new Banco()->getConexao();
            
            $sql = "DELETE FROM produtos WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
    }
?>