<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05.03.2020
 * Time: 2:10
 */
trait CanHeadRotation
{
    private $HeadRotation;

    public function HeadRotation($HeadRotation)
    {
        $this->HeadRotation = $HeadRotation;
        echo "I can 360: {$this->HeadRotation}" . PHP_EOL;
    }
}