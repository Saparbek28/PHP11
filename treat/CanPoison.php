<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05.03.2020
 * Time: 2:09
 */

trait CanPoison
{
    private $Poison;

    public function Poison()
    {
        echo "I can poison" . PHP_EOL;
    }
}