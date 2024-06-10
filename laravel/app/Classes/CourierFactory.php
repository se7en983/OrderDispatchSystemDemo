<?php
/**
 * Created by chris Jennings.
 * Date: 05/09/2017
 * Time: 12:07
 */
namespace App\Classes;

Class CourierFactory {


    /**
     * A basic factory implementation that
     * Returns a new courier instance
     * @param $courierId
     * @return mixed
     */
    public static function buildCourier($courierId)
    {

        if (class_exists('\App\Classes\Courier_' . $courierId)) {

            $class = '\App\Classes\Courier_' . $courierId;

            error_log($class);

            return new  $class();

        } else {


            die( New \Exception('Courier not found exception')) ;

        }
    }
}