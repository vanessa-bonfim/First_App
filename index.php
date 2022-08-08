<?php

/*
* Trabalhar com o conceito de sessões permite que um conjunto de dados possam ser utilizados
* por um usuário durante todo o tempo em que acessa e navega dentro de uma aplicação Web,
* sendo persistidos.
* Só dar um session_start() no começo do arquivo PHP e usar o variável global $_SESSION que a informação trafega
* de página em página dentro da minha aplicação, ela estarão lá a qualquer hora ou lugar,
* só sairá quando se fechar o navegador ou depois de um tempo sem mexer com o sistema.
*
*/
session_start(); //A função session_start() permite iniciar uma nova sessão ou resumir (continuar) uma sessão já existente.

require_once('config.php'); //importa as informações do ficheiro config.php

require_once('functions/url.php'); //importa as funções do ficheiro url.php
require_once('functions/message.php'); //importa as funções do ficheiro message.php


/*
* Lembrando que a super global GET pega as informações da URL. 
* query string : ?nome=Maria (1 chave, 1 valor) ou ?nome=Maria&idade=46 (quando se há mais de 1 valor)
* 
*/
if(empty($_GET['route'])){ // Se a super global estiver vazia.
    $page = 'login';
} else { //se não estiver vazia.
    $page = $_GET["route"];
}


/*
* A condição SWITCH é parecida com a IF.
* Essa condição vai servir de controlador, medidas serão tomadas caso detectem 
* se tentar aceder uma página na qual não tenha acesso, seja por não está autenticado ou não ter preenchido 
*
*/
switch ($page) { // Muda ou troca a variavel page caso:

    case 'dashboard': //$page = 'dashboard'
        require_once('controllers/dashboard.php');
        break;
    
    case 'authenticate': //$page = 'authenticate'
        require_once('controllers/authenticate.php');
        break;

    case 'logout': //$page = 'logout'
        require_once('controllers/logout.php');
        break;

    default:        
        break;
}