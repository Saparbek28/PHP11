<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05.03.2020
 * Time: 2:12
 */

trait CanHomeMade
{
    private $HomeMade;

    public function HomeMade()
    {
        echo "I can home made" . PHP_EOL;
    }
}