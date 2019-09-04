<?php

namespace Ongoing;

class InOrderWarehouse
{

    /**
     * @var InOrderWarehouseIdentificationType $InOrderWarehouseIdentification
     */
    protected $InOrderWarehouseIdentification = null;

    /**
     * @var InOrderWarehouseOperationType $InOrderWarehouseOperation
     */
    protected $InOrderWarehouseOperation = null;

    /**
     * @var string $WarehouseName
     */
    protected $WarehouseName = null;

    /**
     * @param InOrderWarehouseIdentificationType $InOrderWarehouseIdentification
     * @param InOrderWarehouseOperationType $InOrderWarehouseOperation
     */
    public function __construct($InOrderWarehouseIdentification, $InOrderWarehouseOperation)
    {
      $this->InOrderWarehouseIdentification = $InOrderWarehouseIdentification;
      $this->InOrderWarehouseOperation = $InOrderWarehouseOperation;
    }

    /**
     * @return InOrderWarehouseIdentificationType
     */
    public function getInOrderWarehouseIdentification()
    {
      return $this->InOrderWarehouseIdentification;
    }

    /**
     * @param InOrderWarehouseIdentificationType $InOrderWarehouseIdentification
     * @return \Ongoing\InOrderWarehouse
     */
    public function setInOrderWarehouseIdentification($InOrderWarehouseIdentification)
    {
      $this->InOrderWarehouseIdentification = $InOrderWarehouseIdentification;
      return $this;
    }

    /**
     * @return InOrderWarehouseOperationType
     */
    public function getInOrderWarehouseOperation()
    {
      return $this->InOrderWarehouseOperation;
    }

    /**
     * @param InOrderWarehouseOperationType $InOrderWarehouseOperation
     * @return \Ongoing\InOrderWarehouse
     */
    public function setInOrderWarehouseOperation($InOrderWarehouseOperation)
    {
      $this->InOrderWarehouseOperation = $InOrderWarehouseOperation;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseName()
    {
      return $this->WarehouseName;
    }

    /**
     * @param string $WarehouseName
     * @return \Ongoing\InOrderWarehouse
     */
    public function setWarehouseName($WarehouseName)
    {
      $this->WarehouseName = $WarehouseName;
      return $this;
    }

}
