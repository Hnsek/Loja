<?php
require('../conexao.php');

// Your code here!
    class Funcionario{
        function adicionar($nome, $usuario, $senha, $tipo){
            
            $conexao = new Banco()->getConexao();
            
            $sql = "INSERT INTO funcionario(nome, usuario, senha, tipo) VALUES(:nome, :usuario, :senha, :tipo)";
            
            $query = $conexao->prepare($sql);

            $query->bindParam(":nome", $nome, PDO::PARAM_STR);
            $query->bindParam(":usuario", $cpf, PDO::PARAM_STR);
            $query->bindParam(":senha", $senha, PDO::PARAM_STR);
            $query->bindParam(":tipo", $senha, PDO::PARAM_STR);

            $query.execute();
            
            $conexao = null;
            

        }
        function buscar(){
            $conexao = new Banco()->getConexao();
            
            $sql = "SELECT * FROM funcionario";
            
            $query = $conexao->prepare($sql);
            
            $query->execute();
            
            $conexao = null;
            
            return $query;
            
        }
        function atualizarNome($id, $nome)
        {
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE funcionario SET nome=:nome WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":nome", $nome, PDO::PARAM_STR);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
        function atualizarUsuario($id, $usuario)
        {
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE funcionario SET usuario=:cpf WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":cpf", $usuario, PDO::PARAM_STR);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
        function atualizarSenha($id, $senha)
        {
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE funcionario SET senha=:senha WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":senha", $senha, PDO::PARAM_STR);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
        function atualizarTipo($id, $tipo)
        {
            $conexao = new Banco()->getConexao();
            
            $sql = "UPDATE funcionario SET tipo=:tipo WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            
            $query->bindParam(":tipo", $senha, PDO::PARAM_STR);
            
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
        function deletar($id){
            $conexao = new Banco()->getConexao();
            
            $sql = "DELETE FROM funcionario WHERE id=:id";
            
            $query = $conexao->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            
            $query->execute();
            
            $conexao = null;
        }
    }
?>