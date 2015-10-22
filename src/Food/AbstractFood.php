<?php

namespace Food;

abstract class AbstractFood
{
    public abstract function getName();
    public abstract function setName($name);
    public abstract function getType();
    public abstract function setType($type);
    public abstract function getWeight();
    public abstract function setWeight($weight);
    public abstract function getPrice();
    public abstract function setPrice($price);

        public function __toString()
    {
        $str = '';
        $str .= 'Name: ' . $this->getName() . "<br>\n";
        $str .= 'Type: ' . $this->getType() . "<br>\n";
        $str .= 'Weight: ' . $this->getWeight() . "<br>\n";
        $str .= 'Price: ' . $this->getPrice() . "<br>\n";
        return $str;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }
}
