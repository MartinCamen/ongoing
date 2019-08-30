<?php

namespace Ongoing;

class CustomerOrderLineArticleItem
{

    /**
     * @var CustomerOrderLineArticleItemOperation $Operation
     */
    protected $Operation = null;

    /**
     * @var CustomerOrderLineArticleItemIdentification $Identification
     */
    protected $Identification = null;

    /**
     * @var string $Serial
     */
    protected $Serial = null;

    /**
     * @var string $Batch
     */
    protected $Batch = null;

    /**
     * @var float $Volume
     */
    protected $Volume = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var float $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var float $Length
     */
    protected $Length = null;

    /**
     * @var float $Width
     */
    protected $Width = null;

    /**
     * @var float $Height
     */
    protected $Height = null;

    /**
     * @var float $SecondNumberOfItems
     */
    protected $SecondNumberOfItems = null;

    /**
     * @var int $ArticleItemId
     */
    protected $ArticleItemId = null;

    /**
     * @param CustomerOrderLineArticleItemOperation $Operation
     * @param CustomerOrderLineArticleItemIdentification $Identification
     */
    public function __construct($Operation, $Identification)
    {
      $this->Operation = $Operation;
      $this->Identification = $Identification;
    }

    /**
     * @return CustomerOrderLineArticleItemOperation
     */
    public function getOperation()
    {
      return $this->Operation;
    }

    /**
     * @param CustomerOrderLineArticleItemOperation $Operation
     * @return \Ongoing\CustomerOrderLineArticleItem
     */
    public function setOperation($Operation)
    {
      $this->Operation = $Operation;
      return $this;
    }

    /**
     * @return CustomerOrderLineArticleItemIdentification
     */
    public function getIdentification()
    {
      return $this->Identification;
    }

    /**
     * @param CustomerOrderLineArticleItemIdentification $Identification
     * @return \Ongoing\CustomerOrderLineArticleItem
     */
    public function setIdentification($Identification)
    {
      $this->Identification = $Identification;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerial()
    {
      return $this->Serial;
    }

    /**
     * @param string $Serial
     * @return \Ongoing\CustomerOrderLineArticleItem
     */
    public function setSerial($Serial)
    {
      $this->Serial = $Serial;
      return $this;
    }

    /**
     * @return string
     */
    public function getBatch()
    {
      return $this->Batch;
    }

    /**
     * @param string $Batch
     * @return \Ongoing\CustomerOrderLineArticleItem
     */
    public function setBatch($Batch)
    {
      $this->Batch = $Batch;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
      return $this->Volume;
    }

    /**
     * @param float $Volume
     * @return \Ongoing\CustomerOrderLineArticleItem
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return \Ongoing\CustomerOrderLineArticleItem
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberOfItems()
    {
      return $this->NumberOfItems;
    }

    /**
     * @param float $NumberOfItems
     * @return \Ongoing\CustomerOrderLineArticleItem
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param float $Length
     * @return \Ongoing\CustomerOrderLineArticleItem
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param float $Width
     * @return \Ongoing\CustomerOrderLineArticleItem
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param float $Height
     * @return \Ongoing\CustomerOrderLineArticleItem
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return float
     */
    public function getSecondNumberOfItems()
    {
      return $this->SecondNumberOfItems;
    }

    /**
     * @param float $SecondNumberOfItems
     * @return \Ongoing\CustomerOrderLineArticleItem
     */
    public function setSecondNumberOfItems($SecondNumberOfItems)
    {
      $this->SecondNumberOfItems = $SecondNumberOfItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getArticleItemId()
    {
      return $this->ArticleItemId;
    }

    /**
     * @param int $ArticleItemId
     * @return \Ongoing\CustomerOrderLineArticleItem
     */
    public function setArticleItemId($ArticleItemId)
    {
      $this->ArticleItemId = $ArticleItemId;
      return $this;
    }

}
