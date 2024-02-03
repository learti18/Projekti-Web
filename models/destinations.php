<?php

class destinations{
    private $destination_id;
    private $city;
    private $country;
    private $category;
    private $start_date;
    private $end_date;
    private $description;
    private $price;
    private $images;


    function __construct($destination_id=null,$images=null,$city=null,$country=null,$category=null,$start_date=null,$end_date=null,$description=null,$price=null){
            $this->destination_id = $destination_id;
            $this->images = $images;
            $this->city = $city;
            $this->country = $country;
            $this->category = $category;
            $this->start_date = $start_date;
            $this->end_date = $end_date;
            $this->description = $description;
            $this->price = $price;
    }

    function getDestination_id(){
        return $this->destination_id;
    }
    function getCity(){
        return $this->city;
    }
    function getCountry(){
        return $this->country;
    }
    function getCategory(){
        return $this->category;
    }
    function getStart_date(){
        return $this->start_date;
    }
    function getEnd_date(){
        return $this->end_date;
    }
    function getDescription(){
        return $this->description;
    }
    function getPrice(){
        return $this->price;
    }
    function getImages() {
        return explode(',', $this->images);
    }
}

?>