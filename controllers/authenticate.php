<?php
/* 
* Esta condição verifica se as super globais estão vazias,
* caso estejam, manda a mensagem que foi passada no parametro da função set_flash_message()
*/

if (empty($_POST['username']) || empty($_POST['password'])) { // função empty para verificar se está vazio.

    //A função set_flash_message() (função criada em message.php) dispara uma mensagem com a indicação abaixo por 1 sec. (Some ao fazer refresh a página)
    set_flash_message('Todos os campos são de preenchimento obrigatório!');

    //A função url_redirect() (função criada em url.php) redireciona para a página de login.
    url_redirect(['route' => 'login']);

}

/* 
* Guadaremos os valores recebidos nos metodos post dentro das variáveis.
*
*/

$login = $_POST['username']; 
$password = $_POST['password'];

/* 
*
* Essa condição verifica se os valores guardados nas variáveis
* são iguais ('==') aos que estão definidas nas contantes de login e password.
* Na chamada das funções só é preciso colocar as informações que deseja, 
* pois ao criarmos as funções deixamos o parametro a receber vazio por padrão.
*/

if ($login == USER_LOGIN && $password == USER_PASSWORD) { // condição é se as variáveis são iguais as constantes(config.php)

    $_SESSION['is_authenticated'] = true; // ??

    set_flash_message('Utilizador autenticado com sucesso!'); //Mostra essa mensagem por 1 sec. (função criada em message.php)

    url_redirect(['route' => 'dashboard']); // Redireciona para página dashboard. (função criada em url.php)

} else {
    
    set_flash_message('Utilizador ou senha incorreta, tente novamente!');// Mostra essa mensagem por 1 sec. (função criada em message.php)

    url_redirect(['route' => 'login']); //Redireciona para página login. (função criada em url.php)
}


