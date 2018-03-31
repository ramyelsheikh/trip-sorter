<?php
/**
 * Created by PhpStorm.
 * User: RamyElSheikh
 * Date: 3/26/2018
 * Time: 7:37 PM
 */

namespace TripSorter\Cards;


use TripSorter\Cards\Common\CardAbstract;

class TrainCard extends CardAbstract {

    /**
     * @var string
     */
    private $trainNumber;

    /**
     * TrainCard Constructor
     *
     * @param string $departureLocation Departure Location for a trip.
     * @param string $arrivalLocation Arrival Location for a trip.
     * @param string $seatNumber Seat Number for a trip.
     * @param string $trainNumber This refers to train number
     */
    function __construct($departureLocation, $arrivalLocation, $seatNumber = NULL, $trainNumber)
    {
        parent::__construct($departureLocation, $arrivalLocation, $seatNumber);

        /*
         * Setting the extra fields
         */
        $this->setTrainNumber($trainNumber);
    }


    /**
     * Set Train Number
     * @param $value
     */
    function setTrainNumber($value)
    {
        $this->trainNumber = $value;
    }

    /**
     * Get Train Number
     * @return @var trainNumber
     */
    function getTrainNumber()
    {
        return $this->trainNumber;
    }

    /*
     * Converts Object To String
    */
    function __toString()
    {
        return 'Take train ' . $this->getTrainNumber() . ' from ' . $this->getDepartureLocation() . ' to ' . $this->getArrivalLocation() . '. Sit in seat ' . $this->getSeatNumber() . '.';
    }

    /*
     * Converts Object To Json
    */
    function __toJson()
    {
        return json_encode(
            [
                'Transportation' => 'Train',
                'Departure Location' => $this->getDepartureLocation(),
                'Arrival Location' => $this->getArrivalLocation(),
                'Seat Number' => ($this->getSeatNumber()) ? $this->getSeatNumber() : 'No Seat',
                'Train Number' => $this->getTrainNumber(),
            ]
        );
    }
}
