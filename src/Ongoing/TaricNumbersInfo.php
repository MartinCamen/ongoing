<?php

namespace Ongoing;

class TaricNumbersInfo
{

    /**
     * @var TaricNumberInfoClass[] $TaricNumber
     */
    protected $TaricNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaricNumberInfoClass[]
     */
    public function getTaricNumber()
    {
      return $this->TaricNumber;
    }

    /**
     * @param TaricNumberInfoClass[] $TaricNumber
     * @return \Ongoing\TaricNumbersInfo
     */
    public function setTaricNumber(array $TaricNumber = null)
    {
      $this->TaricNumber = $TaricNumber;
      return $this;
    }

}
