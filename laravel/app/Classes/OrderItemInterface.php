<?php
/**
 * Created by Chris Jennings
 * Date: 04/09/2017
 * email:
 */
namespace App\Classes;

interface OrderItemInterface {


    /**
     * @param $itemCode
     */
    public function setItemCode($itemCode) : VOID;

    /**
     * @return int
     */
    public function getItemCode() : INT;


    //.... blah blah blah

}