<?php
/**
 * Created by PhpStorm.
 * User: RamyElSheikh
 * Date: 3/26/2018
 * Time: 6:21 PM
 */

namespace TripSorter\Cards\Common;


use TripSorter\Cards\Interfaces\CardInterface;

abstract class CardAbstract implements CardInterface{

    /**
     * @var string
     */
    protected  $departureLocation;
    /**
     * @var string
     */
    protected  $arrivalLocation;
    /**
     * @var string
     */
    protected  $seatNumber;

    /**
     * Card Constructor
     * Takes the minimum parameters that are being used in all types of trip steps
     *
     * @param string $departureLocation Departure Location for a trip.
     * @param string $arrivalLocation Arrival Location for a trip.
     * @param string $seatNumber Seat Number for a trip.
     */
    function __construct($departureLocation, $arrivalLocation, $seatNumber = NULL)
    {
        $this->setDepartureLocation($departureLocation);
        $this->setArrivalLocation($arrivalLocation);
        $this->setSeatNumber($seatNumber);
    }

    /**
     * Set Departure Location
     * @param $value
     */
    function setDepartureLocation($value)
    {
        $this->departureLocation = $value;
    }

    /**
     * Set Arrival Location
     * @param $value
     */
    function setArrivalLocation($value)
    {
        $this->ArrivalLocation = $value;
    }

    /**
     * Set Seat Number
     * @param $value
     */
    function setSeatNumber($value)
    {
        $this->seatNumber = $value;
    }

    /**
     * Get Departure Location
     * @return @var departureLocation
     */
    function getDepartureLocation()
    {
        return $this->departureLocation;
    }

    /**
     * Get Arrival Location
     * @return @var arrivalLocation
     */
    function getArrivalLocation()
    {
        return $this->arrivalLocation;
    }

    /**
     * Get Seat Number
     * @return @var seatNumber
     */
    function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /*
     * Converts Object To string
    */
    abstract public function __toString();

    /*
     * Converts Object To Json
    */
    abstract public function __toJson();

}
