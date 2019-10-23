<?php

namespace Ongoing;

class OrderCustoms
{

    /**
     * @var string $CustomsValueCurrencyCode
     */
    protected $CustomsValueCurrencyCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCustomsValueCurrencyCode()
    {
      return $this->CustomsValueCurrencyCode;
    }

    /**
     * @param string $CustomsValueCurrencyCode
     * @return \Ongoing\OrderCustoms
     */
    public function setCustomsValueCurrencyCode($CustomsValueCurrencyCode)
    {
      $this->CustomsValueCurrencyCode = $CustomsValueCurrencyCode;
      return $this;
    }

}
