<?php

namespace Ongoing;

class ArticleSize
{

    /**
     * @var string $SizeCode
     */
    protected $SizeCode = null;

    /**
     * @var string $SizeName
     */
    protected $SizeName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSizeCode()
    {
      return $this->SizeCode;
    }

    /**
     * @param string $SizeCode
     * @return \Ongoing\ArticleSize
     */
    public function setSizeCode($SizeCode)
    {
      $this->SizeCode = $SizeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSizeName()
    {
      return $this->SizeName;
    }

    /**
     * @param string $SizeName
     * @return \Ongoing\ArticleSize
     */
    public function setSizeName($SizeName)
    {
      $this->SizeName = $SizeName;
      return $this;
    }

}
