<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05.03.2020
 * Time: 2:42
 */

include_once('./interface/SecKind/MimmalsKind.php');
include_once('./treat/CanHomeMade.php');
include_once('./treat/CanJump.php');
include_once('./treat/CanHowl.php');


class Tiger extends Animal implements MimmalsKind
{
    use CanHomeMade, CanJump, CanHowl;
}