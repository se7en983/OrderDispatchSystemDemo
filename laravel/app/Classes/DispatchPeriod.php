<?php
/**
 * Created by chris Jennings.
 * Date: 04/09/2017
 * Time: 19:48
 */
namespace App\Classes;
use App\Classes\DispatchPeriodInterface;
use \SplObjectStorage;
Class DispatchPeriod  implements  DispatchPeriodInterface {

    /**
     * open dispatch period
     * @var
     */
    private $periodStart;

    /**
     * Close dispatch period
     * @var
     */
    private $periodClose;

    /**
     * @var
     */
    private $consignments;


    public function __construct() {


        $this->consignments = new SplObjectStorage();
    }


    /**
     * @return mixed
     */
    public function startDispatchPeriod(\DateTime $dateTime)
    {

        $this->periodStart = $dateTime;

        // I'll assume some kind of persistent storage would be at work.
        // ...
    }

    /**
     * @return mixed
     */
    public function endDispatchPeriod(\DateTime $dateTime)
    {
        $this->periodClose =$dateTime;
    }



    public function getCurrentDispatchPeriod() {

        return $this;
    }


    public function addConsignment(Consignment $consignment) {

        $this->consignments->attach($consignment);

    }

    /**
     * @return mixed
     */
    public function sendconsignmentNumbersToCourier()
    {
        // TODO: Implement sendconsignmentNumbersToCourier() method.
    }


}