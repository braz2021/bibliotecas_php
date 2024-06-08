<?php

class Conexao {
    protected $conexao;

    public function conectar()
    {
        $this->conexao = new PDO('mysql:host=localhost;dbname=biblioteca;charset=utf8', 'root', '');
    }
    
    public function desconectar()
    {
        $this->conexao = null;
    }
    
    public function executar($sql, $parametros = [])
    {
        $this->conectar();
        
        $stmt = $this->conexao->prepare($sql);
        foreach ($parametros as $parametro => $valor) {
            $stmt->bindValue($parametro, $valor);
        }
        
        $stmt->execute();
        $lastId = $this->conexao->lastInsertId();
        
        $this->desconectar();
        
        return $lastId;
    }
    
    public function recuperarDados($sql, $parametros = [])
    {
        $this->conectar();
        
        $stmt = $this->conexao->prepare($sql);
        foreach ($parametros as $parametro => $valor) {
            $stmt->bindValue($parametro, $valor);
        }
        
        $stmt->execute();
        $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $this->desconectar();
        
        return $retorno;
    }
}
?>