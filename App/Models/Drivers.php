<?php

class Drivers{
    private $id; 
    private $name;
    private $picture;
    private $age;
    private $country; 
    private $best_result;
    private $career;
    private $description;
    private $pilot_category;
    private $team_id;
    private $current_points;
    private $team_name;

    public function findAll($id){
        $pdo = Database::getPDO();
        $query = "SELECT * FROM drivers WHERE team_id = '$id'";

        $pdoStatement = $pdo->query($query);
        $drivers = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Drivers');

        // dump($drivers);
        return $drivers;
    }

    public function findAllDriversByPointsDESC(){
        $pdo = Database::getPDO();

        $query = "SELECT * 
        FROM drivers
        WHERE pilot_category != 3
        ORDER BY current_points DESC";

        $pdoStatement = $pdo->query($query);

        $drivers = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Drivers');
        return $drivers;
    }

    /**
     * Get the value of id
     */ 
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
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of best_result
     */ 
    public function getBest_result()
    {
        return $this->best_result;
    }

    /**
     * Set the value of best_result
     *
     * @return  self
     */ 
    public function setBest_result($best_result)
    {
        $this->best_result = $best_result;

        return $this;
    }

    /**
     * Get the value of career
     */ 
    public function getCareer()
    {
        return $this->career;
    }

    /**
     * Set the value of career
     *
     * @return  self
     */ 
    public function setCareer($career)
    {
        $this->career = $career;

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
     * Get the value of pilot_category
     */ 
    public function getPilot_category()
    {
        return $this->pilot_category;
    }

    /**
     * Set the value of pilot_category
     *
     * @return  self
     */ 
    public function setPilot_category($pilot_category)
    {
        $this->pilot_category = $pilot_category;

        return $this;
    }

    /**
     * Get the value of team_id
     */ 
    public function getTeam_id()
    {
        return $this->team_id;
    }

    /**
     * Set the value of team_id
     *
     * @return  self
     */ 
    public function setTeam_id($team_id)
    {
        $this->team_id = $team_id;

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

    /**
     * Get the value of team_name
     */ 
    public function getTeam_name()
    {
        return $this->team_name;
    }

    /**
     * Set the value of team_name
     *
     * @return  self
     */ 
    public function setTeam_name($team_name)
    {
        $this->team_name = $team_name;

        return $this;
    }
}