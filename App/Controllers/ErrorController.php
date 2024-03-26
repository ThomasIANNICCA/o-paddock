<?php

class ErrorController extends CoreController{

    function error404Action(){
        $this->show('error404');
    }
}