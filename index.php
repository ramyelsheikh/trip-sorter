<?php

require_once __DIR__ . '/vendor/autoload.php';

use \TripSorter\Editor\Trip as Trip;
use \TripSorter\Cards\AirportBusCard as AirportBusCard;
use \TripSorter\Cards\FlightCard as FlightCard;
use \TripSorter\Cards\TrainCard as TrainCard;

$journey = new  Trip();
$journey->addCard(new FlightCard('Stockholm', 'New York JFK', '7B', 'SK22', '22'));
$journey->addCard(new FlightCard('Gerona Airport', 'Stockholm', '3A', 'SK455', '45B', '344'));
$journey->addCard(new TrainCard('Madrid', 'Barcelona', '45B', '78A'));
$journey->addCard(new AirportBusCard('Barcelona', 'Gerona Airport'));
$journey->sortCard();
echo ($journey->toHtml());