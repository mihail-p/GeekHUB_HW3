<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/22/15
 * Time: 12:34 AM
 */
require_once 'vendor/autoload.php';

use Food\Fruits;
use Food\Vegetables;

$bananas = new Fruits();
$bananas->setName('bananas');
$bananas->setCountry('Equador');
$bananas->setType('Cavendish');
$bananas->setPrice('18');
$bananas->setWeight('150gr');

echo'Fruits:<br />';
echo $bananas->__toString();

$apples = new Fruits();
$apples->setName('apples');
$apples->setCountry('Poland');
$apples->setType('Jonathan');
$apples->setPrice('25');
$apples->setWeight('170gr');

echo'<br />Fruits:<br />';
echo $apples->__toString();

$cabbages = new Vegetables();
$cabbages->setName('cabbages');
$cabbages->setType('broccoli');
$cabbages->setWeight('400gr');
$cabbages->setPrice('8');
$cabbages->setColor('green');

echo'<br /><br />Vegetables:<br />';
echo $cabbages->__toString();
