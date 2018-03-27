<?php
/**
 * Created by PhpStorm.
 * User: VIP
 * Date: 3/26/2018
 * Time: 9:00 PM
 */

namespace TripSorter\Editor;


use TripSorter\Sorter\CardsSorter;
use TripSorter\Cards\Common\CardAbstract;

class Trip {

    private $boardingCard;

    private $sortedBaseBoardingCard;

    /**
     * @return mixed
     */
    public function getBoardingCards()
    {
        return $this->boardingCard;
    }

    /**
     *
     */
    public function sortCard(){
        $this->sortedBaseBoardingCard = CardsSorter::sort($this->boardingCard);
    }

    /**
     * @param CardAbstract $boardingCard
     */
    public function addCard(CardAbstract $boardingCard)
    {
        $this->boardingCard[] = $boardingCard;
    }

    /*
     * Converting Every Trip to String according to its "__toString" method
     *
     * @return string  $str  Complete string for trip step
     */
    public function toHtml()
    {
        $str = '<ol>';
        foreach( $this->sortedBaseBoardingCard as $boarding){
            $str .= '<li>' . $boarding->__toString() . '</li>' ;
        }
        $str .= '<li>You have arrived at your final destination.</li>';
        $str .= '</ol>';
        return $str;
    }
}
