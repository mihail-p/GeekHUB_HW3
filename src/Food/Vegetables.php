<?php

namespace Food;

class Vegetables extends AbstractFood
{
    protected $type;
    protected $weight;
    protected $color;

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
        $str= parent::__toString();
        $str .= 'Type: '. $this->getType().'<br />';
        $str .= 'Weight: '. $this->getWeight().'<br />';
        $str .= 'Color: '. $this->getColor().'<br />';

        return $str;
    }
}