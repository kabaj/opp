<?php


class Vector2D
{
    private $x;
    private $y;


    public function __destruct()
    {
        echo("Niszcze vektor<br>");
        echo("x : $this->x<br>");
        echo("y : $this->y<br>");
    }

    public function __construct($newX, $newY)
    {
        echo("Konstruktor dla Vector2D <br>");
        echo("podane x: $newX<br>");
        echo("podane y: $newY<br>");

        $this->setX($newX);
        $this->setY($newY);

        if (is_integer($newX) === true) {
            $this->x = $newX;
        } else {
            $this->x = 0;
        }
        if (is_integer($newY) === true) {
            $this->y = $newY;
        } else {
            $this->y = 0;
        }
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

    public function getLenght()
    {
        return sqrt(pow($this->x, 2) + pow($this->y, 2));
    }

    public function addVector(Vector2D $other)
    {
        $this->x += $other->x;
        $this->y += $other->y;
    }

    public function multiply($num)
    {
        if (is_integer($num) || is_float($num)) {
            $this->x *= $num;
            $this->y *= $num;
        }

    }

}