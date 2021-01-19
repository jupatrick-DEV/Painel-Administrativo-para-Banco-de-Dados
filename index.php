<?php

$pg = isset($_GET['pg']);

if ($pg) {
    //existe

    switch ($_GET['pg']) {

        case 'login':
            include_once 'painel/paginas/acesso/login.php';
            break;
            
        case 'login':
            include_once 'painel/paginas/acesso/login.php';
            break;
            
        default:
        case 'dashboard':
            include_once 'painel/paginas/acesso/dashboard';
            break;
           
    }
} else {
    //não existe
            include_once './painel/paginas/dashboard.php';
}

   