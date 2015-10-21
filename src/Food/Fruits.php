<?php

namespace Food;

class Fruits extends AbstractFood
{
    protected $type;
    protected $weight;
    protected $price;
    protected $country;

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
        $str .= 'Type: '. $this->getType().'<br />';
        $str .= 'Weight: '. $this->getWeight().'<br />';
        $str .= 'Price: '. $this->getPrice().'<br />';
        $str .= 'Country: '. $this->getCountry().'<br />';

        return $str;
    }
}