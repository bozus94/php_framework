<?php
$app->route->get('/', function(){
    echo 'Pagina de inicio';
});

$app->route->get('/about', function(){
    echo 'Pagina acerca de';
});