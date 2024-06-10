<?php
/**
 * Created by chris Jennings.
 * Date: 04/09/2017
 */

namespace App\ClassesOrderSystem;

use \SplObjectStorage;

class Consignment {

    private $consignmentId;
    private $consignmentNumber;
    private $customer;
    private $courier;
    private $items;

    public function __construct($consignmentId)
    {
        $this->consignmentId = $consignmentId;
        $this->items = new SplObjectStorage();
    }

    /**
     * @return mixed
     */
    public function getCustomer() : Customer
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getCourier() : Courier
    {
        return $this->courier;
    }

    /**
     * @param mixed $courier
     */
    public function setCourier(Courier $courier)
    {
        $this->courier = $courier;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     */
    public function addItem($item)
    {
        $this->items->attach($item);
    }

    /**
     * @return mixed
     */
    public function getConsignmentId()
    {
        return $this->consignmentId;
    }

    /**
     * @param mixed $consignmentId
     */
    public function setConsignmentId($consignmentId)
    {
        $this->consignmentId = $consignmentId;
    }

    /**
     * @return mixed
     */
    public function getConsignmentNumber()
    {
        return $this->consignmentNumber;
    }

    /**
     *
     * @param mixed $consignmentNumber
     */
    public function setConsignmentNumber($consignmentNumber)
    {
        $this->consignmentNumber = $consignmentNumber;
    }






}