# Trip Sorter Algorithm

## Table of Contents

1. [Installation](#installation)
2. [Architecture](#architecture)
  1. [Cards](#cards)
  2. [Sorter](#sorter)
  3. [Testing](#testing)
3. [Todo](#Todo)


#### Installation

To install the TripSorter,
1. Clone the project in your document root.
2. run the composer install command from the root directory of the project (make sure you have [Composer](http://getcomposer.org) installed).
3. Test the project using your browser http://localhost/trip-sorter/index.php




### Architecture

#### Cards

The basic interface of Cards is the following:

```php
interface CardInterface {

    public function setDepartureLocation($value);


    public function getDepartureLocation();


    public function setArrivalLocation($value);


    public function getArrivalLocation();


    public function setSeatNumber($value);


    public function getSeatNumber();


    public function __toString();


    public function __toJson();
}
```

#### Boarding Cards

The basic interface of boarding cards is the following:

Each Transportation then has its own class & its additional variables and methods.

```php
interface BoardingCardInterface
{
    /**
     * @return \TripSorter\Destination\DestinationInterface
     */
    public function getFrom();

    /**
     * @return \TripSorter\Destination\DestinationInterface
     */
    public function getTo();
}
``` 

#### Sorter

The class that sorts an array of cards is `CardsSorter`:

```php
        /*
         *  This step takes O(n) time.
         *  List the departure and arrival locations.
        */
        $departureList = self::createDepartureList($items);
        $arrivalList = self::createArrivalList($items);
        
        
        /*
         * This next step also takes O(n) time.
        */
        $startingLocation = self::getStartingLocation($items, $arrivalList);
        
        
        /*
         *
         * This while Loop takes O(n) time.
        */
        
        while ($currentCard = (array_key_exists($currentLocation, $departureList)) ? $departureList[$currentLocation] : null) {
            /*
             *  Add the boarding pass to our sorted list.
             */
            array_push($sortedCards, $currentCard);
            /*
             *  Get our next location.
             */
             $currentLocation = $currentCard->getArrivalLocation();
        }
        
        
        
        /*
         * It took O(3n) operations
        */
        
        
        
```

#### Testing

Make sure you have phpunit installed. Install it using 

```bash
sudo apt-get install phpunit
```

run the following command from the terminal from your project document root

```bash
./vendor/bin/phpunit
```  


#### Todo

1) Make Restful API End Points to CRUD Trips and Transportations, Saving them in JSON file.
2) Adding more Tests for unit testing
3) Modifying Sort Algorithm to lower order of complexity (Big O Notation).
