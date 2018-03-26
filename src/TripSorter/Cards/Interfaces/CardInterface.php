<?php
/**
 * Created by PhpStorm.
 * User: VIP
 * Date: 3/26/2018
 * Time: 5:53 PM
 */

namespace TripSorter\Cards\Interfaces;


interface CardInterface {
    /**
     * @param $name
     * @param $value
     */
    public function setDepartureLocation($value);
    /**
     * @param $name
     * @return mixed
     */
    public function getDepartureLocation();

    /**
     * @param $name
     * @param $value
     */
    public function setArrivalLocation($value);
    /**
     * @param $name
     * @return mixed
     */
    public function getArrivalLocation();

    /**
     * @param $name
     * @param $value
     */
    public function setSeatNumber($value);
    /**
     * @param $name
     * @return mixed
     */
    public function getSeatNumber();

    /*
     * Converts Object To string
    */
    public function __toString();

    /*
     * Converts Object To Json
    */
    public function __toJson();
}