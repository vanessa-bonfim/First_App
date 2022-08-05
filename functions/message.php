<?php

/**
 * 
 * Esta função exibe uma mensagem temporária, ou seja, se eu pedir 
 * para exibir uma mensagem temporária e página for refrescada logo em seguida,
 * então esta mensagem vai desaparecer.
 * 
 **/

function set_flash_message($message = '') {

    $_SESSION['flash_message'] = $message; //"truque" é Gravar a nossa mensagem dentro de uma chave na super global $_SESSION

    $timestampNowPlus1Sec = strtotime('now + 1 sec'); //A função "strtotime" retorna um conjunto de números que chamamos de "TIMESTAMP", a mensagem só ficará presente por 1 segundos.

    $_SESSION['flash_message_timestamp'] = $timestampNowPlus1Sec; //Gravar o nosso tempo dentro de uma chave na super global $_SESSION

}