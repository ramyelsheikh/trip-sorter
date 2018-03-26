<?php
/**
 * Created by PhpStorm.
 * User: VIP
 * Date: 3/26/2018
 * Time: 8:02 PM
 */

namespace TripSorter\Sorter;
use TripSorter\Cards\AirportBusCard;


/**
 * Interface SorterInterface
 *
 * Interface for sorting algorithms
 */
interface SorterInterface {

    /**
     * Sort method should implement.
     * @param array $items
     */
    public static function sort(array $items);
}