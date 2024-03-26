<?php

    include __DIR__. '/../App/Utils/Database.php';
    include __DIR__. '/../App/Controllers/CoreController.php';
    include __DIR__. '/../App/Controllers/MainController.php';
    include __DIR__. '/../App/Controllers/ErrorController.php';

    include __DIR__. '/../App/Models/Teams.php';
    include __DIR__. '/../App/Models/Drivers.php';

    include __DIR__. '/../vendor/autoload.php';

    /*-------------CONFIG ALTO ROUTER -------------*/
    $altorouter = new AltoRouter();
    
    $baseUri = $_SERVER['BASE_URI'];

    $altorouter->setBasePath($baseUri);
    

    $altorouter->map(

        'GET',   // (GET, POST : pour le traitement d'un formulaire, GET|POST : acceptera les deux cas)
        '/',          // L'URL sur laquelle on souhaite référencer la route   
        [ 'controller' => 'MainController', 'method' => 'homePage' ], // Target => paramètre libre qui sera le résultat renvoyé par Altorouter si jamais la route a matchée avec l'URL
        'route_home' // le nom de la route (optionnel) 
    );
    
    $altorouter->map(
        'GET',   // (GET, POST : pour le traitement d'un formulaire, GET|POST : acceptera les deux cas)
        '/teams',          // L'URL sur laquelle on souhaite référencer la route   
        [ 'controller' => 'MainController', 'method' => 'TeamsMenuPage' ], // Target => paramètre libre qui sera le résultat renvoyé par Altorouter si jamais la route a matchée avec l'URL
        'route_teams-menu' // le nom de la route (optionnel) 
    );

    $altorouter->map(
        'GET',
        '/team/[i:id]', 
        [ 'controller' => 'MainController', 'method' => 'teamPage' ],
        'route_team'
    );

    $altorouter->map(
        'GET',
        '/ranking', 
        [ 'controller' => 'MainController', 'method' => 'rankingPage' ],
        'route_ranking'
    );

    
    // Altorouter me renvoi les infos dans le cas où la route a matchée avec l'URL tapée par le client
    $match = $altorouter->match();
        // Retour de match > false : dans le cas où la route n'existe pas,  un tableau des data : dans le cas où la route existe
    if($match !== false) { // si la route existe
            // $match contient un tableau ici
            //dump($match);
        $currentRoute = $match['target'];
        $nameController = $currentRoute['controller'];
        $nameMethod = $currentRoute['method'];
        $controller = new $nameController();
    
        // SI on a besoin d'un id 
        $param = $match['params'];
        $controller->$nameMethod($param);
        // dump($param);
    
    } else {
            // On est dans une erreur 404
        $errorController = new ErrorController();
        $errorController->error404Action();
    }