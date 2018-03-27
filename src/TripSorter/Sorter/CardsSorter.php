<?php
/**
 * Created by PhpStorm.
 * User: RamyElSheikh
 * Date: 3/26/2018
 * Time: 8:03 PM
 */

namespace TripSorter\Sorter;

/*
 *
 * Class CardsSorter
 *
 * contains Sorting Algorithm
 */
class CardsSorter {

    /**
     * Sorting Process for Cards
     *
     * @param array $items
     * @return array departureLocations
     */
    public static function sort(array $items)
    {
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
        $sortedCards = [];
        $currentLocation = $startingLocation;

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
        return $sortedCards;

    }

    /**
     * Create Array Contains Departures Locations
     *
     * @param array $cards
     * @return array departureLocations
     */
    static function createDepartureList($cards)
    {
        $departureLocations = [];
        foreach ($cards as $card) {
            $departureLocations[$card->getDepartureLocation()] = $card;
        }

        return $departureLocations;
    }
    /**
     * Create Array Contains Arrival Locations
     *
     * @param $cards
     * @return array arrivalLocations
     */
    static function createArrivalList($cards)
    {
        $arrivalLocations = [];

        foreach ($cards as $card) {
            $arrivalLocations[$card->getArrivalLocation()] = $card;
        }
        return $arrivalLocations;
    }


    /**
     *
     * Get Starting Location according to the location that the passenger will arrive at
     *
     * @param $baseBoardingCards
     * @param $arrivalList
     * @return mixed
     */
    private static function getStartingLocation($baseBoardingCards, $arrivalList)
    {
        foreach($baseBoardingCards as $baseBoardingCard){
            $departureLocation = $baseBoardingCard->getDepartureLocation();
            /*
             * The starting location is a place the passenger will not arrive at
             */
            if (!array_key_exists($departureLocation, $arrivalList)) {
                return $departureLocation;
            }
        }
        return null;
    }
}
