<?php

/**
 * Esta função faz um redirecionamento
 * de acordo com os valores do array associativo
 * passados como parâmetro.
 *
 * **/
function url_redirect($values = []) {

    $buildQueryString = http_build_query($values); // A função "http_build_query" converte um array associativo em uma query string. https://www.php.net/manual/en/function.http-build-query.php

    header('Location: '.SITE_URL.'?'.$buildQueryString); // a função "header" modifica o cabeçalho de um pedido/resposta do servidor, neste caso, é responder com um redirecionamento. https://www.php.net/manual/en/function.header

    exit;  // Este "exit" diz para o PHP parar toda a execução do código, isto porque não queremos exibir nenhum conteúdo enquanto o redirecionamento é feito.
}