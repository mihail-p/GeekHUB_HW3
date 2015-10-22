<?php

namespace Food;

class Vegetables extends AbstractFood
{
    protected $name;
    protected $type;
    protected $weight;
    protected $price;
    protected $color;

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
        if ($price <= '9') {
            $this->price = '<b style="color: green;">' . $price .
                ' </b><small style="color: red;"> Good price ;)</small> ';
        }

    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function __toString()
    {
        $str = parent::__toString();
        $str .= 'Color: ' . $this->getColor() . '<br />';

        return $str;
    }
}
