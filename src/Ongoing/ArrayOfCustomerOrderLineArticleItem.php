<?php

namespace Ongoing;

class ArrayOfCustomerOrderLineArticleItem
{

    /**
     * @var CustomerOrderLineArticleItem[] $CustomerOrderLineArticleItem
     */
    protected $CustomerOrderLineArticleItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CustomerOrderLineArticleItem[]
     */
    public function getCustomerOrderLineArticleItem()
    {
      return $this->CustomerOrderLineArticleItem;
    }

    /**
     * @param CustomerOrderLineArticleItem[] $CustomerOrderLineArticleItem
     * @return \Ongoing\ArrayOfCustomerOrderLineArticleItem
     */
    public function setCustomerOrderLineArticleItem(array $CustomerOrderLineArticleItem = null)
    {
      $this->CustomerOrderLineArticleItem = $CustomerOrderLineArticleItem;
      return $this;
    }

}
