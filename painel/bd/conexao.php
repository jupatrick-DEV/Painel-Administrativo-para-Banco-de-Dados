<?php

class Conexao {

//    servidor
    private $db_server = 'localhost';
//         nome do banco de dados   
    private $db_name = 'paineladm';
    private $db_charset = 'utf8';
    private $db_username = 'root';
//            usuário root
    private $db_password = '';

    public function selecionardados($consulta, $parametros = null, $debug = true, $close_connection = true) {
        
        $result=null;
        
        $connection=new PDO(
                );
        
    }

}
