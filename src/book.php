<?php


class Book
{
    //tutaj znajduje sie cialo klasy
    protected $name; //= "Unknown"; ---> wartosc domyslna
    protected $author;
    protected $ISBNNumber;
    protected $price;
    protected $bookmarks;

    //metody magiczne
    public function __construct($newName, $newAuthor, $newNumber, $newPrice)
    {
        echo("Tworze nowy obiek ksiazki<br>");

        $this->setName($newName);
        $this->setAuthor($newAuthor);
        $this->setPrice($newPrice);
        $this->setISBNNumber($newNumber);

        $this->bookmarks = [];
    }

    public function __destruct()
    {
        echo("Uruchomiony zostal destruktor<br>");
    }

    public function __clone()
    {
        echo("Clone book <br>");
        $tempArray = [];
        foreach ($this->bookmarks as $bMark) {
            $tempArray [] = clone $bMark;
        }
        $this->bookmarks = $tempArray;

    }


    public function addBookmark(Bookmark $newBookmark)
    {
        $this->bookmarks[] = $newBookmark;
    }


    //funkcje
    public function setName($newName)
    {
        if (is_string($newName) === true) {
            $this->name = $newName;
        }
    }

    public function setAuthor($newAuthor)
    {
        $this->author = $newAuthor;
    }

    public function setISBNNumber($newNum)
    {
        $this->ISBNNumber = $newNum;
    }

    public function setPrice($newPrice)
    {
        $this->price = $newPrice;
    }

    public function printBookInfo()
    {
        echo("<h1>{$this->name}</h1><br>");
        echo("Autor {$this->author}<br>");
        echo("Numer {$this->ISBNNumber}<br>");
        echo("Cena {$this->price}<br>");

        foreach ($this->bookmarks as $bMark) {
            $bMark->showInfo();
        }
    }
}

