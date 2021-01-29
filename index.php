<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);

if ($pg) {
    //existe

    switch ($_GET['pg']) {

        case 'Inicio':
            include_once 'site/inicio.php';
            break;

        case 'dashboard':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos':

//            fazer uma consulta no banco e disponibilizar os resultados

            $resultDadosTabProdutos = new Conexao();
            $dados = $resultDadosTabProdutos->selecionaDados('SELECT * FROM produtos');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos-editar':

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                //FUNCAO PARA ATUALIZACAO DO USUARIO
            } else {

                //mostrar os dados do produto
                $idProdutoEditar = isset($_GET['id']);

                if ($idProdutoEditar) {

                    $resultDadosTabProdutos = new Conexao();
                    $dados = $resultDadosTabProdutos->selecionaDados('SELECT * FROM produtos WHERE id = ' . $idProdutoEditar);
                    include_once 'painel/paginas/produtos-editar.php';
                } else {
                    
                }
            }

            
            include_once 'painel/paginas/includes/footer.php';

            break;

        case 'produtos-item':


            $id = $_GET['id'];

            $resultDadosTabProdutos = new Conexao();
            $dados = $resultDadosTabProdutos->selecionaDados('SELECT * FROM produtos WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos-item.php';
            include_once 'painel/paginas/includes/footer.php';

            break;

        case 'servicos':

            //            fazer uma consulta no banco e disponibilizar os resultados

            $resultDadosTabServicos = new Conexao();
            $dados = $resultDadosTabServicos->selecionaDados('SELECT * FROM servicos');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servicos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'servicos-item':


            $id = $_GET['id'];

            $resultDadosTabServicos = new Conexao();
            $dados = $resultDadosTabServicos->selecionaDados('SELECT * FROM servicos WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos-item.php';
            include_once 'painel/paginas/includes/footer.php';

            break;

        case 'Contato':

            //            fazer uma consulta no banco e disponibilizar os resultados

            $resultDadosTabContato = new Conexao();
            $dados = $resultDadosTabContato->selecionaDados('SELECT * FROM contato');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/Contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'contato-visualizar':

            $id = $_GET['id'];

            $resultDadosTabContato = new Conexao();
            $dados = $resultDadosTabContato->selecionaDados('SELECT * FROM contato WHERE id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato-visualizar.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'login':
            include_once 'painel/paginas/acesso/login.php';
            break;

        case 'dashboard':
            //Página inicial do Painel Adm            
            if (verificaLogin()) {
                include_once 'painel/paginas/dashboard.php';
            } else {
                echo '';
            }
            break;

        default:
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once './painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
    }
} else {
    //não existe
    include_once 'painel/paginas/includes/header.php';
    include_once 'painel/paginas/includes/menus.php';
    include_once './painel/paginas/dashboard.php';
    include_once 'painel/paginas/includes/footer.php';
}

   