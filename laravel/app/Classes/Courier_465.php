<?php
/**
 * Created by chris Jennings.
 * Date: 05/09/2017
 * Time: 12:30
 */
namespace App\Classes;


Class Courier_465 extends Courier implements CourierInterface {

    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $name;

    //...

    /**
     * Courier_465 constructor.
     */
    public function __construct()
    {
        $this->id = 465;

        $this->name = 'Royal Mail Next Day';
    }

    /**
     * Generate a random string for demo purposes.
     * ---
     * @return string
     */
    public function generateConsignmentNumber($length = 32): string
    {
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }

        return strtoupper($str);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}