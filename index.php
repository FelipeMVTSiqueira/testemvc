<?php
//primeira coisa o usuario digita algo na url ex um site.com.br/home ou site.com.br
// a primeira coisa que aparece e nossa pagina inicial
//primneiro tem que pegar o GET das solicitações, o que ele ta mandando pra mim
//rotas: acessar algum arquivo ou um recurso da nossa aplicação
//trabalho atual nesse ponto de entrada eh pegar o que u usuario digitou e indicar essa solicitacao a //algum controler fazer os processos que foram definidos
//rotas eh entender o que o usuario digitou e direcionalo pra onde for
//as infos sao pegas pelo metodo GET

$rota = key($_GET);
$controller = $rota."Controller";

include "controllers/".$controller.".php";

$obj = new $controller();

$obj->viewHome();

//var_dump($rota);