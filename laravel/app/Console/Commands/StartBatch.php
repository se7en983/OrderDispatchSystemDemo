<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

// Use our classes
use App\ClassesOrderSystem\Courier;
use App\ClassesOrderSystem\Customer;
use App\ClassesOrderSystem\OrderItem;
use App\ClassesOrderSystem\Consignment;
use App\ClassesOrderSystem\CourierFactory;
use App\ClassesOrderSystem\DispatchPeriod;

class StartBatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'OrderSystem:StartBatch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'START A NEW BATCH IN THE ORDER SYSTEM';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        // Create a dispatch period
        $dispatchPeriod = new DispatchPeriod();
        $dispatchPeriod->startDispatchPeriod(new \DateTime(date('Y-m-d 09:00:00')));
        $dispatchPeriod->endDispatchPeriod(new \DateTime(date('Y-m-d 17:00:00')));

        //--- Create a consignment ---//
        $consignment1 = new Consignment($consignmentId = time());

        // create a new item
        $item1 = new OrderItem();
        $item1->setItemCode('9985654');
        $item1->setItemDescription('Fender Stratocaster');

        // create a another item
        $item2 = new OrderItem();
        $item2->setItemCode('11100897');
        $item2->setItemDescription('Korg Piano/Black Ebony');

        // Add the items to the consignment
        $consignment1->addItem($item1);
        $consignment1->addItem($item2);

        // Create the customer and add to consignment
        $customer1 = new Customer();
        $customer1->setCustomerId(996);
        $customer1->setAddress('59 Hampton Grove Manchester M2 6BX');

        // Add the customer to the consignment
        $consignment1->setCustomer($customer1);

        // Get a new courier instance
        $courier = CourierFactory::buildCourier('465');

        // Generate a unique consignment number
        $consignmentNumber = $courier->generateConsignmentNumber();

        $consignment1->setConsignmentNumber($consignmentNumber);
        // Add the courier to the consignment
        $consignment1->setCourier($courier);

        // Add the consignment to the dispatch period
        $dispatchPeriod->addConsignment($consignment1);


        //--- Create Another Consignment ---//
        $consignment2 = new Consignment($consignmentId = time()); // not an ideal ID, just for this demo

        // create a new item
        $item1 = new OrderItem();
        $item1->setItemCode('65017');
        $item1->setItemDescription('Electronic Drum Kit Package Deal');

        // create a another item
        $item2 = new OrderItem();
        $item2->setItemCode('32645');
        $item2->setItemDescription('Casio WK-7600 Portable Keyboard');


        // create a another item
        $item3 = new OrderItem();
        $item3->setItemCode('28757');
        $item3->setItemDescription('Nino by Meinl NINO-NS305 12 Inch Cymbal, Nickel Silverd');

        // Add the items to the consignment
        $consignment2->addItem($item1);
        $consignment2->addItem($item2);
        $consignment2->addItem($item3);

        // Create the customer and add to consignment
        $customer2 = new Customer();
        $customer2->setCustomerId(101);
        $customer2->setAddress('17 Leigh Street London W1 6GJ');

        // Add the customer to the consignment
        $consignment2->setCustomer($customer2);

        // Get a new courier instance
        $courier = CourierFactory::buildCourier('203');

        // Generate a unique consignment number
        $consignmentNumber = $courier->generateConsignmentNumber();

        $consignment2->setConsignmentNumber($consignmentNumber);
        // Add the courier to the consignment
        $consignment2->setCourier($courier);

        // Add the consignment to the dispatch period
        $dispatchPeriod->addConsignment($consignment2);

        // Send our consignment numbers
        $dispatchPeriod->sendconsignmentNumbersToCourier();

        // dump the result we're done!
        dd($dispatchPeriod->getCurrentDispatchPeriod());

    }
}
