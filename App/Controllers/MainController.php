<?php

class MainController extends CoreController{

    public function HomePage(){

        $this->show('home');
    }

    public function TeamsMenuPage(){

        $teamModel = new Teams();
        $teams = $teamModel->findAll();

        $this->show('teams-menu', $viewData = ['teams' => $teams]);
    }

    public function teamPage($parameter){
        
        $teamId = $parameter['id'];

        $teamModel = new Teams();
        $teams = $teamModel->find($teamId);

        $driverModel = new Drivers();
        $drivers = $driverModel->findAll($teamId);
        
        $this->show('team', $viewData = ['teams' => $teams,
                                        'drivers' => $drivers]);
    }

    public function rankingPage(){
        
        $teamsModel = new Teams;
        $teams = $teamsModel->findAllTeamsByPointsDESC();

        $driversModel = new Drivers;
        $drivers = $driversModel->findAllDriversByPointsDESC();

        $this->show('ranking', ['teams' => $teams,
                                'drivers' => $drivers]);
    }

}