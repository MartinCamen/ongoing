<?php

namespace Ongoing;

class TaricNumberClass
{

    /**
     * @var Country $Country
     */
    protected $Country = null;

    /**
     * @var string $TaricNumber
     */
    protected $TaricNumber = null;

    /**
     * @param Country $Country
     */
    public function __construct($Country)
    {
      $this->Country = $Country;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param Country $Country
     * @return \Ongoing\TaricNumberClass
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
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
     * @return \Ongoing\TaricNumberClass
     */
    public function setTaricNumber($TaricNumber)
    {
      $this->TaricNumber = $TaricNumber;
      return $this;
    }

}
