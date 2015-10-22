<?php

namespace Food;

class Fruits extends AbstractFood

{
    protected $name;
    protected $type;
    protected $weight;
    protected $price;
    protected $country;

    public function __construct()
    {
        $this->name = 'apples';
        $this->type = 'Semerenko';
        $this->country = 'Ukraine';
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function __toString()
    {
        $str = parent::__toString();
        $str .= 'Country: '. $this->getCountry().'<br />';

        return $str;
    }
}
