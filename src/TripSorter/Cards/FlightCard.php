<?php
/**
 * Created by PhpStorm.
 * User: RamyElSheikh
 * Date: 3/26/2018
 * Time: 7:14 PM
 */

namespace TripSorter\Cards;


use TripSorter\Cards\Common\CardAbstract;

class FlightCard extends CardAbstract{

    /**
     * @var string
     */
    /**
     * @var string
     */
    /**
     * @var null|string
     */
    private $flightNumber, $gateNumber, $counter;

    /**
     * FlightCard Constructor
     *
     * @param string $departureLocation Departure Location for a trip.
     * @param string $arrivalLocation Arrival Location for a trip.
     * @param string $seatNumber Seat Number for a trip.
     * @param string $flightNumber Each flight has a flight number
     * @param string $gateNumber The gate number
     * @param string $counter which is used for luggage.
     */
    function __construct($departureLocation, $arrivalLocation, $seatNumber = NULL, $flightNumber, $gateNumber, $counter = NULL)
    {
        parent::__construct($departureLocation, $arrivalLocation, $seatNumber);

        /*
         * Setting the extra fields
         */
        $this->setFlightNumber($flightNumber);
        $this->setGateNumber($gateNumber);
        $this->setCounter($counter);
    }

    /**
     * Set Flight Number
     * @param $value
     */
    function setFlightNumber($value)
    {
        $this->flightNumber = $value;
    }

    /**
     * Set Gate Number
     * @param $value
     */
    function setGateNumber($value)
    {
        $this->gateNumber = $value;
    }

    /**
     * Set Gate Number
     * @param $value
     */
    function setCounter($value)
    {
        $this->counter = $value;
    }

    /**
     * Get Flight Number
     * @return @var flightNumber
     */
    function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Get Gate Number
     * @return @var gateNumber
     */
    function getGateNumber()
    {
        return $this->gateNumber;
    }

    /**
     * Get Counter
     * @return @var counter
     */
    function getCounter()
    {
        return $this->counter;
    }

    /*
     * Converts Object To String
    */
    function __toString()
    {
        return 'From ' . $this->getDepartureLocation() . ', take flight ' . $this->getFlightNumber() . ' to ' . $this->getArrivalLocation() . '. Gate ' . $this->getGateNumber() . ', seat ' . $this->getSeatNumber() . '. ' . ($this->getCounter() ? 'Baggage drop at ticket counter ' . $this->getCounter() . '.' : 'Baggage will be automatically transferred from your last leg.');
    }

    /*
     * Converts Object To Json
    */
    function __toJson()
    {
        return json_encode(
            [
                'Transportation' => 'Flight',
                'Departure Location' => $this->getDepartureLocation(),
                'Arrival Location' => $this->getArrivalLocation(),
                'Seat Number' => ($this->getSeatNumber()) ? $this->getSeatNumber() : 'No Seat',
                'Flight Number' => $this->getFlightNumber(),
                'Gate Number' => $this->getGateNumber(),
                'Counter' => ($this->getCounter()) ? $this->getCounter() : 'Baggage will be automatically transferred from your last leg.'
            ]
        );
    }

}
