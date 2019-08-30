<?php

namespace Ongoing;

class ArticleColor
{

    /**
     * @var string $ColorCode
     */
    protected $ColorCode = null;

    /**
     * @var string $ColorName
     */
    protected $ColorName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getColorCode()
    {
      return $this->ColorCode;
    }

    /**
     * @param string $ColorCode
     * @return \Ongoing\ArticleColor
     */
    public function setColorCode($ColorCode)
    {
      $this->ColorCode = $ColorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getColorName()
    {
      return $this->ColorName;
    }

    /**
     * @param string $ColorName
     * @return \Ongoing\ArticleColor
     */
    public function setColorName($ColorName)
    {
      $this->ColorName = $ColorName;
      return $this;
    }

}
