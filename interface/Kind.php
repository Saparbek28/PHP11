<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05.03.2020
 * Time: 1:47
 */

interface Kind
{
    public function move(bool $legs);

    public function eat(bool $order);

    public function hunt(bool $huntStatus);

    public function ayes(bool $ayes);

    public function sleep(bool $sleep);


}
