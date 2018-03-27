<?php
/**
 * Created by PhpStorm.
 * User: RamyElSheikh
 * Date: 3/26/2018
 * Time: 6:53 PM
 */

namespace TripSorter\Cards;

use TripSorter\Cards\Common\CardAbstract;

class AirportBusCard extends CardAbstract {

    /**
     * AirportBusCard Constructor
     *
     * @param string $departureLocation Departure Location for a trip.
     * @param string $arrivalLocation Arrival Location for a trip.
     * @param string $seatNumber Seat Number for a trip.
     */
    function __construct($departureLocation, $arrivalLocation, $seatNumber = NULL)
    {
        parent::__construct($departureLocation, $arrivalLocation, $seatNumber);

        /*
         * No extra fields
         */
    }

    /*
     * Converts Object To String
    */
    function __toString()
    {
        return 'Take the airport bus from ' . $this->getDepartureLocation() . ' to ' . $this->getArrivalLocation() . '. ' . ($this->getSeatNumber() ? 'Sit in seat ' . $this->getSeatNumber() . '.' : 'No seat assignment.');
    }

    /*
     * Converts Object To Json
    */
    function __toJson()
    {
        return json_encode(
            [
                'Transportation' => 'Airport Bus',
                'Departure Location' => $this->getDepartureLocation(),
                'Arrival Location' => $this->getArrivalLocation(),
                'Seat Number' => ($this->getSeatNumber()) ? $this->getSeatNumber() : 'No Seat',
            ]
        );
    }
}
