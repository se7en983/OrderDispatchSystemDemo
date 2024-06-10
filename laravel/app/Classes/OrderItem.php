<?php
/**
 * Created by Chris Jennings.
 * Date: 04/09/2017
 */

namespace App\Classes;

use App\Classes\OrderItemInterface;


Class OrderItem implements OrderItemInterface {

    /**
     * @var
     */
    private $itemCode;

    /**
     * @var
     */
    private $description;

    /**
     * @return mixed
     */
    public function getItemDescription() : string
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setItemDescription($description) : void
    {
        $this->description = $description;
    }

    /**
     * OrderItem constructor.
     */
    public function __construct() {}

    /**
     * @param $itemCode
     */
    public function setItemCode($itemCode) : void
    {
        $this->itemCode = $itemCode;
    }

    /**
     * @return int
     */
    public function getItemCode() : int
    {
        return $this->itemCode;

    }

}