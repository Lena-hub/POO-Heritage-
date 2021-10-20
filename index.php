<?php

 require_once 'Bicycle.php';
 require_once 'Cars.php';
 require_once 'Truck.php';

// JOINDRE BICYCLE

$bike = new Bicycle("blue");
var_dump($bike);

$bike->setCurrentSpeed(0);
var_dump($bike);

// mouvement du vélo

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


echo $bike->getColor();
echo $bike->getCurrentSpeed();




// JOINDRE CARS

$car = new Cars("pink" , 5 , "electric");
var_dump($car);


// Mouvement de la voiture 

echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

// nouvelle voiture 

$car2 = new Cars("Green" , 5 , "diesel");
var_dump($car2);

echo $car2->start();
echo $car2->forward();
echo $car2->brake();
echo $car2->getCurrentSpeed();


// JOINDRE TRUCK

$bicycle = new Bicycle("blue", 3, "fuel", 0);
var_dump($truck);

// mouvement du camion

echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getcurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();

// nouveau camion

$fireTruck = new Truck('red', 3, 'fuel', 10000);
var_dump($fireTruck);

// mouvement + chargement nouveau camion 

echo  $fireTruck->forward();
echo '<br> Vitesse du camion : ' . $fireTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $fireTruck->brake();
echo '<br> Vitesse du camion : ' . $fireTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $fireTruck->brake();
echo '<br> Chargement du camion: '. $fireTruck->getLoading(). ' litres' . '<br>';
echo $fireTruck->loading();

?>
