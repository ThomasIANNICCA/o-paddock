<?php

class Teams{
    private $id;
    private $name_menu;
    private $logo;
    private $class_css;
    private $picture;
    private $name;
    private $description;
    private $points;
    private $current_points;
    private $result;
    private $victories;

    public function find($id){

        $pdo = Database::getPDO();

        $query = "SELECT * FROM teams WHERE id='$id'";

        $pdoStatement = $pdo->query($query);

        $team = $pdoStatement->fetchObject('Teams');

        // dump($team);

        return $team;
    }

    public function findAll(){

        $pdo = Database::getPDO();

        $query = "SELECT * FROM teams";

        $pdoStatement = $pdo->query($query);

        $team = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Teams');

        // dump($team);

        return $team;
    }

    public function findAllTeamsByPointsDESC(){

        $pdo = Database::getPDO();

        $query = "SELECT * 
                FROM teams
                ORDER BY points DESC";

        $pdoStatement = $pdo->query($query);

        $team = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Teams');

        return $team;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name_menu
     */ 
    public function getName_menu()
    {
        return $this->name_menu;
    }

    /**
     * Set the value of name_menu
     *
     * @return  self
     */ 
    public function setName_menu($name_menu)
    {
        $this->name_menu = $name_menu;

        return $this;
    }


    /**
     * Get the value of logo
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @return  self
     */ 
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of class_css
     */ 
    public function getClass_css()
    {
        return $this->class_css;
    }

    /**
     * Set the value of class_css
     *
     * @return  self
     */ 
    public function setClass_css($class_css)
    {
        $this->class_css = $class_css;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of points
     */ 
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set the value of points
     *
     * @return  self
     */ 
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get the value of result
     */ 
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set the value of result
     *
     * @return  self
     */ 
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get the value of victories
     */ 
    public function getVictories()
    {
        return $this->victories;
    }

    /**
     * Set the value of victories
     *
     * @return  self
     */ 
    public function setVictories($victories)
    {
        $this->victories = $victories;

        return $this;
    }

    /**
     * Get the value of current_points
     */ 
    public function getCurrent_points()
    {
        return $this->current_points;
    }

    /**
     * Set the value of current_points
     *
     * @return  self
     */ 
    public function setCurrent_points($current_points)
    {
        $this->current_points = $current_points;

        return $this;
    }
}