<?php


    require_once("./src/bookmark.php");
    require_once("./src/book.php");

        $book1 = new Book("Wiedzmin","Sapkowski",12345678,34.70);
        $book2 = new Book("Paragraf 44","Heller",282828282,33.67);


        $bookmark1 = new Bookmark(40, "Bookmark 1 for Wiedzmin");
        $book1->addBookmark($bookmark1);

        $bookmark2 = new Bookmark(70, "Bookmark 2 for Wiedzmin");



        $book1->addBookmark($bookmark2);

        $book1->printBookInfo();

        var_dump($book1);

        $book2 =clone $book1;
        $book2->setPrice(40000);
        var_dump($book2);


        //var_dump($book1);
        //var_dump($book2);
        //$book1->setAuthor("Sapkowski");
        //$book1->setName("Wiedzmin");
        //$book1->setISBNNumber(12345678);
        //$book1->setPrice(34.70);
        //$book2->setAuthor("Heller");
        //$book2->setName("Paragraf 44");
        //$book2->setISBNNumber(282828282);
        //$book2->setPrice(33.67);
        //$book1->nowyAtrybut = "xxx";  dodawanie atrybutu tylko do  $book1
        //echo ("Nazwa mojej ksiazki to {$book1->name}");
        //$book1->setName("Wiedzmin");
        //$book2->setName("Paragraf 22");


        $book1->printBookInfo();
        $book2->printBookInfo();


       // var_dump($book1);
       // var_dump($book2);
/*
require_once("./src/wektor2D.php");

$vektor1 = new Vector2D(1,2);
$vektor2 = new Vector2D(3,4);

echo("dlugosc vec1= ".$vektor1->getLenght()."<br>");
echo("dlugosc vec2= ".$vektor2->getLenght()."<br>");

$vektor1->addVector($vektor2);

echo("sksksksks".$vektor1->multiply($num));

require_once("./src/book.php");
require_once("./src/Ebook.php");

$ebook1 = new Ebook('wiedzmin', 'sapkowaki', 8889,9999);
*/




//$ksztalt1 = new Ksztalt(1,2,"czerwony");
//$ksztalt2 = new Ksztalt(45,56,"niebieski");

//echo("Odleglosc miedzy ksztalatmi to : ".$ksztalt1->distance($ksztalt2)."<br>");

/*
$circle1 = new Circle(2,3,"czerwone", 5);
$circle2 = new Circle(4,5, "niebieskie",8);

$circle1->getInfo();
$circle2->getInfo();

$distance = $circle1->distance($circle2);
echo("Distance : $distance<br>");

echo ("Pole kola 1 jest rowne ".$circle1->getArea()."<br>");
echo ("Obwod kola 2 jest rowne ".$circle2->getPerimeter()."<br");


require_once("./src/ksztalt.php");
require_once("./src/cirlce.php");
require_once("./src/ksztalt3D.php");
require_once("./src/walec.php");


$walec1 = new Walec(34,78, "czerwony", 8, 4);
$walec1->getInfo();
$walec1->getArea();
$stozek1 = new Stozek(23,56,"niebieski", 2,8);
$stozek1->getInfo();
$stozek1->getArea();

*/

//require_once("./src/singleton.php");










