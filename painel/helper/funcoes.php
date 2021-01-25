<?php

function verificaLogin() {
    //No futuro as informações são 
    //trazidas do banco de dados
    $usuario = 'Regi';
    $senha = '123';

    //Verificar as informções passadas
    //pelo usuário é igual a que estão no banco.

    if ($_POST) {
        if ($_POST['usuario'] == $usuario &&
                $_POST['senha'] == $senha) {
            
            //cria dados na ss
            $_SESSION['usuario'] = $usuario;
            return TRUE;
        } else {
            return FALSE;
        }
    } else {
        if(isset($_SESSION['usuario'])){            
            return  TRUE;            
        } else {
            return FALSE;
        }
    }
}
