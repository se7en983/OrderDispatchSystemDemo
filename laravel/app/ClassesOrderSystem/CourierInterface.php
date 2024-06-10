<?php
/**
 * Created by chris Jennings.
 * Date: 05/09/2017
 * Time: 12:32
 */
namespace App\ClassesOrderSystem;

Interface CourierInterface {

    /**
     * @return mixed
     */
    public function generateConsignmentNumber() : string;

}