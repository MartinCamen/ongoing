<?php

namespace Ongoing;

class ArticleDefinitionClasses
{

    /**
     * @var ArticleDefinitionClassesOperationType $ArticleDefinitionClassesOperation
     */
    protected $ArticleDefinitionClassesOperation = null;

    /**
     * @var ArrayOfArticleDefinitionClass $Classes
     */
    protected $Classes = null;

    /**
     * @param ArticleDefinitionClassesOperationType $ArticleDefinitionClassesOperation
     */
    public function __construct($ArticleDefinitionClassesOperation)
    {
      $this->ArticleDefinitionClassesOperation = $ArticleDefinitionClassesOperation;
    }

    /**
     * @return ArticleDefinitionClassesOperationType
     */
    public function getArticleDefinitionClassesOperation()
    {
      return $this->ArticleDefinitionClassesOperation;
    }

    /**
     * @param ArticleDefinitionClassesOperationType $ArticleDefinitionClassesOperation
     * @return \Ongoing\ArticleDefinitionClasses
     */
    public function setArticleDefinitionClassesOperation($ArticleDefinitionClassesOperation)
    {
      $this->ArticleDefinitionClassesOperation = $ArticleDefinitionClassesOperation;
      return $this;
    }

    /**
     * @return ArrayOfArticleDefinitionClass
     */
    public function getClasses()
    {
      return $this->Classes;
    }

    /**
     * @param ArrayOfArticleDefinitionClass $Classes
     * @return \Ongoing\ArticleDefinitionClasses
     */
    public function setClasses($Classes)
    {
      $this->Classes = $Classes;
      return $this;
    }

}
