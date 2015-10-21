<?php

namespace Food;

abstract class AbstractFood
{
    public abstract function gettype();
    public abstract function settype();
    public abstract function getweight();
    public abstract function setweight();
    public abstract function getprice();
    public abstract function setprice();

    public function __toString()
    {
        $str = '';
        $str .= 'Type: ' . $this->gettype() . "<br>\n";
        $str .= 'Weight: ' . $this->getweight() . "<br>\n";
        $str .= 'Price: ' . $this->getprice() . "<br>\n";
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
