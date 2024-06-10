<?php
/**
 * Created by chris Jennings.
 * Date: 04/09/2017
 */
namespace App\ClassesOrderSystem;

Class Customer {


    private $customerId;

    private $address;

    /**
     * @return mixed
     */
    public function getCustomerId() : int
    {
        return $this->customerId;
    }

    /**
     * @param mixed $customerId
     */
    public function setCustomerId($customerId) : void
    {
        $this->customerId = $customerId;
    }

    /**
     * @return mixed
     */
    public function getAddress() : string
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address) : void
    {
        $this->address = $address;
    }

    // ...





}