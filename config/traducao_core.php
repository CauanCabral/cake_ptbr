<?php

// Definindo idioma da aplica��o
Configure::write('Config.language', 'pt-br');

// Adicionando o caminho do locale
App::build(array('locales' => dirname(dirname(__FILE__)) . DS . 'locale' . DS));

?>