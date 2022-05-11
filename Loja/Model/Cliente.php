<?php
require('../conexao.php');

// Your code here!
    class Cliente{
        function adicionar($nome, $cpf, $senha){
            
            $conexao = new Banco()->getConexao();
            
            $sql = "INSERT INTO cliente(nome, cpf, senha) VALUES(:nome, :cpf, :senha)";
            
            $query = $conexao->prepare($sql);

            $query->bindParam(":nome", $nome, PDO::PARAM_STR);
            $query->bindParam(":cpf", $cpf, PDO::PARAM_STR);
            $query->bindParam(":senha", $senha, PDO::PARAM_STR);

            $query->execute();
            
            $conexao = null;
            

        }
        function buscar(){
            $conexao = new Banco()->getConexao();
            
            $sql = "SELECT * FROM cliente";
            
            $query = $conexao->prepare($sql);
            
            $query->execute();
            
            $conexao = null;
            
            return $query;
            
        }
        function atualizarNome($id, $nome)
        {
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE cliente SET nome=:nome WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":nome", $nome, PDO::PARAM_STR);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
        function atualizarCPF($id, $cpf)
        {
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE cliente SET cpf=:cpf WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":cpf", $cpf, PDO::PARAM_STR);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
        function atualizarSenha($id, $senha)
        {
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE cliente SET senha=:senha WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":senha", $senha, PDO::PARAM_STR);
            
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