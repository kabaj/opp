<?php


class Stozek extends Circle
{


    public function __construct($newX, $newY, $newKolor, $newR, $newH)
    {
        echo("Konstruktor Stozka<br>");
        parent::__construct($newX, $newY, $newKolor, $newR);
        $this->setH($newH);
    }

    public function __destruct()
    {
        echo("Destruktor Stozka <br>");
        parent::__destruct();
    }


    public function setH($newH)
    {
        if (is_int($newH) || is_float($newH)) {
            $this->h = $newH;
        } else {
            $this->h = 0;
        }
    }

    public function getH()
    {
        return $this->h;
    }

    public function getArea()
    {
        echo("Liczymy obwod <br>");
        $xxx = parent::getPerimeter();
        echo((3 / ($xxx * $this->h)) . "<br>");

    }

    public function getInfo()
    {
        echo("<h1>Stozek</h1>");
        echo("Kolor {$this->Kolor}<br>");
        echo("Pozycja ($this->x , $this->y)<br>");
        echo("Promien: $this->r<br>");
        echo("Wysokosc: $this->h <br>");
    }
}