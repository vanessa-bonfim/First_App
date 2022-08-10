<?php
/* 
* Esta condição verifica se as super globais estão vazias,
* caso estejam, manda a mensagem que foi passada no parametro da função set_flash_message()
*/

if (empty($_POST['username']) || empty($_POST['password'])) { // função empty para verificar se está vazio.

    //A função set_flash_message() dispara uma mensagem com a indicação abaixo por 1 sec. (Some ao fazer refresh a página)
    set_flash_message('Todos os campos são de preenchimento obrigatório!');

    //A função url_redirect() redireciona para a página de login.
    url_redirect($values = ['route' => 'login']);

}

/* 
* Guadaremos os valores recebidos nos metodos post dentro das variáveis.
*
*/

$login = $_POST['username']; 
$password = $_POST['password'];

