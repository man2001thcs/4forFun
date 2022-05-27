<?php
include_once ("model/Book.php");

class Model{
    public function getBookList(){
        return array(
            "Jungle book" => new Book("Jungle book", "R.Kipling", "A classic book."),
            "Moon walker" => new Book("Moon walker", "J.Walker", ""),
            "PHP 4 dummies" => new Book("PHP 4 dummies", "Stupid guy though he smart", "")
        );
    }

    public function getBook($title){
        $allBooks = $this->getBookList();
        return $allBooks[$title];
    }
}