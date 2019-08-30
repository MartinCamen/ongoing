<?php

namespace Ongoing;

class InOrderLineType
{

    /**
     * @var InOrderLineTypeIdentificationType $InOrderLineTypeIdentificationType
     */
    protected $InOrderLineTypeIdentificationType = null;

    /**
     * @var InOrderLineTypeOperation $InOrderLineTypeOperation
     */
    protected $InOrderLineTypeOperation = null;

    /**
     * @var string $InOrderLineTypeCode
     */
    protected $InOrderLineTypeCode = null;

    /**
     * @var string $InOrderLineTypeName
     */
    protected $InOrderLineTypeName = null;

    /**
     * @param InOrderLineTypeIdentificationType $InOrderLineTypeIdentificationType
     * @param InOrderLineTypeOperation $InOrderLineTypeOperation
     */
    public function __construct($InOrderLineTypeIdentificationType, $InOrderLineTypeOperation)
    {
      $this->InOrderLineTypeIdentificationType = $InOrderLineTypeIdentificationType;
      $this->InOrderLineTypeOperation = $InOrderLineTypeOperation;
    }

    /**
     * @return InOrderLineTypeIdentificationType
     */
    public function getInOrderLineTypeIdentificationType()
    {
      return $this->InOrderLineTypeIdentificationType;
    }

    /**
     * @param InOrderLineTypeIdentificationType $InOrderLineTypeIdentificationType
     * @return \Ongoing\InOrderLineType
     */
    public function setInOrderLineTypeIdentificationType($InOrderLineTypeIdentificationType)
    {
      $this->InOrderLineTypeIdentificationType = $InOrderLineTypeIdentificationType;
      return $this;
    }

    /**
     * @return InOrderLineTypeOperation
     */
    public function getInOrderLineTypeOperation()
    {
      return $this->InOrderLineTypeOperation;
    }

    /**
     * @param InOrderLineTypeOperation $InOrderLineTypeOperation
     * @return \Ongoing\InOrderLineType
     */
    public function setInOrderLineTypeOperation($InOrderLineTypeOperation)
    {
      $this->InOrderLineTypeOperation = $InOrderLineTypeOperation;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOrderLineTypeCode()
    {
      return $this->InOrderLineTypeCode;
    }

    /**
     * @param string $InOrderLineTypeCode
     * @return \Ongoing\InOrderLineType
     */
    public function setInOrderLineTypeCode($InOrderLineTypeCode)
    {
      $this->InOrderLineTypeCode = $InOrderLineTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOrderLineTypeName()
    {
      return $this->InOrderLineTypeName;
    }

    /**
     * @param string $InOrderLineTypeName
     * @return \Ongoing\InOrderLineType
     */
    public function setInOrderLineTypeName($InOrderLineTypeName)
    {
      $this->InOrderLineTypeName = $InOrderLineTypeName;
      return $this;
    }

}
