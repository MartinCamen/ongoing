<?php

namespace Ongoing;

class TaricNumberInfoClass
{

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $TaricNumber
     */
    protected $TaricNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \Ongoing\TaricNumberInfoClass
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTaricNumber()
    {
      return $this->TaricNumber;
    }

    /**
     * @param string $TaricNumber
     * @return \Ongoing\TaricNumberInfoClass
     */
    public function setTaricNumber($TaricNumber)
    {
      $this->TaricNumber = $TaricNumber;
      return $this;
    }

}
