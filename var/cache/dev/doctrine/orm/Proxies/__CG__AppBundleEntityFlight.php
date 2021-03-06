<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Flight extends \AppBundle\Entity\Flight implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'arrival', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'departure', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'plane', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'pilot', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'flights', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'nbFreeSeats', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'seatPrice', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'takeOffTime', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'publicationDate', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'wasDone'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'arrival', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'departure', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'plane', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'pilot', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'flights', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'nbFreeSeats', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'seatPrice', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'takeOffTime', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'publicationDate', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Flight' . "\0" . 'wasDone'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Flight $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbFreeSeats($nbFreeSeats)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbFreeSeats', [$nbFreeSeats]);

        return parent::setNbFreeSeats($nbFreeSeats);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbFreeSeats()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbFreeSeats', []);

        return parent::getNbFreeSeats();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeatPrice($seatPrice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeatPrice', [$seatPrice]);

        return parent::setSeatPrice($seatPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeatPrice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeatPrice', []);

        return parent::getSeatPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setTakeOffTime($takeOffTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTakeOffTime', [$takeOffTime]);

        return parent::setTakeOffTime($takeOffTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getTakeOffTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTakeOffTime', []);

        return parent::getTakeOffTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublicationDate($publicationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublicationDate', [$publicationDate]);

        return parent::setPublicationDate($publicationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicationDate', []);

        return parent::getPublicationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setWasDone($wasDone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWasDone', [$wasDone]);

        return parent::setWasDone($wasDone);
    }

    /**
     * {@inheritDoc}
     */
    public function getWasDone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWasDone', []);

        return parent::getWasDone();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeparture(\AppBundle\Entity\Site $departure)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeparture', [$departure]);

        return parent::setDeparture($departure);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeparture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeparture', []);

        return parent::getDeparture();
    }

    /**
     * {@inheritDoc}
     */
    public function setArrival(\AppBundle\Entity\Site $arrival)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArrival', [$arrival]);

        return parent::setArrival($arrival);
    }

    /**
     * {@inheritDoc}
     */
    public function getArrival()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArrival', []);

        return parent::getArrival();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlane(\AppBundle\Entity\PlaneModel $plane)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlane', [$plane]);

        return parent::setPlane($plane);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlane()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlane', []);

        return parent::getPlane();
    }

    /**
     * {@inheritDoc}
     */
    public function setPilot(\AppBundle\Entity\User $pilot)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPilot', [$pilot]);

        return parent::setPilot($pilot);
    }

    /**
     * {@inheritDoc}
     */
    public function getPilot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPilot', []);

        return parent::getPilot();
    }

    /**
     * {@inheritDoc}
     */
    public function addFlight(\AppBundle\Entity\Reservation $flight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFlight', [$flight]);

        return parent::addFlight($flight);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFlight(\AppBundle\Entity\Reservation $flight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFlight', [$flight]);

        return parent::removeFlight($flight);
    }

    /**
     * {@inheritDoc}
     */
    public function getFlights()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFlights', []);

        return parent::getFlights();
    }

}
