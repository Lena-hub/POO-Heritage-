<?php

// Creation class Cars

class Cars{

    public int $nbWheels = 4;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;
     
    public int $energyLevel = 2;
  


    // constructeur 


    public function __construct(string $color, int $nbSeats, string $energy)
    {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;

    }

    // mouvement de la voiture

    public function start(): string {
    $this->currentSpeed = 1;
    return "start up !";
    }

    public function forward(): string {
    $this->currentSpeed = 60;
    return "moving...";
    }

    public function brake(): string
    {
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Bake!";
   }
       $sentence .= "I'm stopped !";
       return $sentence;
   }

   public function getColor(): string
   {
   return $this->color;
   }
   public function setColor(string $color): void
   {
   $this->color = $color;
   }



   public function getCurrentSpeed(): int
   {
   return $this->currentSpeed;
   }
   public function setCurrentSpeed(string $currentSpeed): void
   {
   $this->currentSpeed = $currentSpeed;
   }






}    






?>