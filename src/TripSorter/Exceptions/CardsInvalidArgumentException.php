<?php
/**
 * Created by PhpStorm.
 * User: VIP
 * Date: 3/26/2018
 * Time: 8:07 PM
 */

namespace TripSorter\Exceptions;

/**
 * Class CardsInvalidArgumentException
 *
 * @package src\Exceptions
 */
class CardsInvalidArgumentException extends \RuntimeException
{
    /**
     * @var string
     */
    protected $invalidArgumentExceptionErrorMessage;

    /**
     * Constructor.
     *
     * @param string
     */
    public function __construct($invalidArgumentExceptionErrorMessage)
    {
        $this->setInvalidArgumentExceptionErrorMessage($invalidArgumentExceptionErrorMessage);

        parent::__construct($this->getInvalidArgumentExceptionErrorMessage());
    }

    /**
     * Get the Error Message.
     *
     * @return string
     */
    public function getInvalidArgumentExceptionErrorMessage()
    {
        return $this->invalidArgumentExceptionErrorMessage;
    }

    /**
     * Set the Error Message.
     *
     * @param string
     */
    public function setInvalidArgumentExceptionErrorMessage($value)
    {
        $this->invalidArgumentExceptionErrorMessage = $value;
    }

}