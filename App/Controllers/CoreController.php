<?php 

class CoreController{
    
    function show($viewName, $viewData=[]){
        
        global $altorouter;
        global $baseUri;
        
        include __DIR__.'/../Views/header.php';
        include __DIR__."/../Views/{$viewName}-tpl.php";
        include __DIR__.'/../Views/footer.php';
    }
}