<?php
/**
 * Created by chris Jennings.
 * Date: 04/09/2017
 * Time: 19:49
 */

namespace App\Classes;


Interface DispatchPeriodInterface {

    /**
     * @param \DateTime $dateTime
     * @return mixed
     */
    public function endDispatchPeriod(\DateTime $dateTime);

    /**
     * @return mixed
     */
    public function getCurrentDispatchPeriod();

    /**
     * @param \DateTime $dateTime
     * @return mixed
     */
    public function startDispatchPeriod(\DateTime $dateTime);

    /**
     * @param Consignment $consignment
     * @return mixed
     */
    public function addConsignment(Consignment $consignment);

    /**
     * @return mixed
     */
    public function sendConsignmentNumbersToCourier();

}