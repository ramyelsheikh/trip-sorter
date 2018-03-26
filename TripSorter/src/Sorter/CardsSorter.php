<?php
/**
 * Created by PhpStorm.
 * User: VIP
 * Date: 3/26/2018
 * Time: 8:03 PM
 */

namespace TripSorter\Cards;


use TripSorter\Sorter\SorterInterface;

/*
 *
 * Class CardsSorter
 *
 * contains Sorting Algorithm
 */
class CardsSorter implements SorterInterface {

    public static function sort(array $items)
    {
       /*
        *  This step takes O(n) time.
        *  Index the departure and arrival locations.
        */
        $departureIndex = self::createDepartureIndex($items);
        $arrivalIndex = self::createArrivalIndex($items);

        /*
         * This next step also takes O(n) time.
         */
        $startingLocation = self::getStartingLocation($items, $arrivalIndex);

        /*
         *
         * This while Loop takes O(n) time.
         */
        $sortedCards = [];
        $currentLocation = $startingLocation;

        while ($currentCard = (array_key_exists($currentLocation, $departureIndex)) ? $departureIndex[$currentLocation] : null) {
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
    static function createDepartureIndex($cards)
    {
        $departureLocations = [];
        foreach ($cards as $card) {
            $departureIndex[$card->getDepartureLocation()] = $card;
        }
        return $departureLocations;
    }
    /**
     * Create Array Contains Arrival Locations
     *
     * @param $cards
     * @return array arrivalLocations
     */
    static function createArrivalIndex($cards)
    {
        $arrivalLocations = [];
        foreach ($cards as $card) {
            $arrivalLocations[$card->getarrivalLocation()] = $card;
        }
        return $arrivalLocations;
    }


    /**
     * @param $baseBoardingCards
     * @param $arrivalIndex
     * @return mixed
     */
    private static function getStartingLocation($baseBoardingCards, $arrivalIndex)
    {
        foreach($baseBoardingCards as $baseBoardingCard){
            $departureLocation = $baseBoardingCard->getDepartureLocation();
            /*
             * The starting location is a place the passenger will not arrive at
             */
            if (!array_key_exists($departureLocation, $arrivalIndex)) {
                return $departureLocation;
            }
        }
        return null;
    }
}