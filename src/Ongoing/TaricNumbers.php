<?php

namespace Ongoing;

class TaricNumbers
{

    /**
     * @var TaricNumberClass[] $TaricNumber
     */
    protected $TaricNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaricNumberClass[]
     */
    public function getTaricNumber()
    {
      return $this->TaricNumber;
    }

    /**
     * @param TaricNumberClass[] $TaricNumber
     * @return \Ongoing\TaricNumbers
     */
    public function setTaricNumber(array $TaricNumber = null)
    {
      $this->TaricNumber = $TaricNumber;
      return $this;
    }

}
