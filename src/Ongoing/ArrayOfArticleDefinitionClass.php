<?php

namespace Ongoing;

class ArrayOfArticleDefinitionClass
{

    /**
     * @var ArticleDefinitionClass[] $Class
     */
    protected $Class = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArticleDefinitionClass[]
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param ArticleDefinitionClass[] $Class
     * @return \Ongoing\ArrayOfArticleDefinitionClass
     */
    public function setClass(array $Class = null)
    {
      $this->Class = $Class;
      return $this;
    }

}
