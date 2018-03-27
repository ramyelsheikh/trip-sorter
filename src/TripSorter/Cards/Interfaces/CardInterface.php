<?php
/**
 * Created by PhpStorm.
 * User: RamyElSheikh
 * Date: 3/26/2018
 * Time: 5:53 PM
 */

namespace TripSorter\Cards\Interfaces;


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
