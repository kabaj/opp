<?php


class Ksztalt
{
    protected $x;
    protected $y;
    protected $Kolor = "bialy";


    public function __destruct()
    {

        echo("Niszcze ksztalt<br>");
        /*
        echo("X : $this->x<br>");
        echo("Y : $this->y<br>");
        echo("Kolor : $this->Kolor<br>");
        */
    }

    public function __construct($newX, $newY, $newKolor)
    {


        echo("Konstruktor Ksztaltu<br>");
        /*
        echo("X : $newX<br>");
        echo("Y : $newY<br>");
        echo("Kolor : $newKolor<br>");
        */
        $this->setX($newX);
        $this->setY($newY);
        $this->setKolor($newKolor);
    }

    public function setX($newX)
    {
        if (is_integer($newX) === true) {
            $this->x = $newX;
        } else {
            $this->y = 0;
        }
    }

    public function setY($newY)
    {
        if (is_integer($newY) === true) {
            $this->y = $newY;
        } else {
            $this->y = 0;
        }
    }

    public function setKolor($newKolor)
    {
        if (is_string($newKolor) === true) {
            $this->Kolor = $newKolor;
        } else {
            $this->Kolor = 'bialy';
        }

    }

    public function getInfo()
    {
        echo("<h1>Ksztalt</h1>");
        echo("<h1>Kolor {$this->Kolor}</h1><br>");
        echo("X : {$this->x}<br>");
        echo("Y : {$this->y}<br>");

    }

    public function policzOdlegloscOd(Ksztalt $drugi)
    {


        return sqrt((pow($this->x -= $drugi->x, 2) + (pow($this->y -= $drugi->y, 2))));
    }
}
