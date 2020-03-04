<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05.03.2020
 * Time: 2:48
 */

include_once ('./interface/Kind.php');

class Animal implements Kind
{
    private $legs;
    private $order;
    private $huntStatus;
    private $ayes;
    private $sleep;

    public function __construct(bool $legs, bool $order, bool $huntStatus, bool $ayes, bool $sleep)
    {
        $this->legs = $legs;
        $this->order = $order;
        $this->huntStatus = $huntStatus;
        $this->ayes = $ayes;
        $this->sleep = $sleep;
    }

    public function hunt(bool $huntStatus)
    {
        $this->huntStatus = $huntStatus;
        if ($this->huntStatus) {
            echo "Hunted" . PHP_EOL;
        } else {
            echo "Dost hunted" . PHP_EOL;
        }
    }


    public function eat(bool $order)
    {
        if ($this->huntStatus && $order) {
            echo "He hunted and eat the meat" . PHP_EOL;
        } elseif (!$this->huntStatus && $order) {
            echo "He need to hund" . PHP_EOL;
        } else {
            echo "Dead" . PHP_EOL;
        }
    }

    public function sleep(bool $sleep)
    {
        $this->sleep = $sleep;
        if ($this->sleep) {
            echo "hes a sleep because he a cat" . PHP_EOL;
        } else {
            echo "Who are you? " . E_ALL;
        }
    }

    public function move(bool $legs)
    {
        $this->legs = $legs;
        if ($this->legs) {
            echo "yah he hav a 4 legs but he cat and he love a sleep not move";
        } else {
            echo "yah yah hes cat";
        }
    }

    public function ayes(bool $ayes)
    {
        $this->ayes = $ayes;
        if ($this->ayes) {
            echo "he have a good ayes";
        } else {
            echo "anyway he hav a good ayes";
        }
    }


}