<?php

/**
 * Created by PhpStorm.
 * User: aston
 * Date: 28/11/16
 * Time: 16:22
 */
namespace Manager;
class BookManager
{
    private $db;

    public function __construct($db)
    {
        //print 'constructeur appelé';
        //$pdo = new PDO("mysql:host=localhost;dbname=aston;","root","paris");
        //$this->db = $pdo;
        $this->db = $db;
    }


    public function addBook(BookEntity $book){
        /*Kint::dump($book);
        $db = new PDO("mysql:host=localhost;dbname=aston;","root","paris");*/

        $query = $this->db->prepare('INSERT INTO book (title, author, description) VALUES (:title, :author, :description)');
        $query-> bindValue(':title',$book->getTitle());
        $query-> bindValue(':author',$book->getAuthor());
        $query-> bindValue(':description',$book->getDescription());

        $executed = $query-> execute();
        //$error = $this->errorInfo();

        //Kint::dump($error);
//        Kint::dump($executed);
    }

    public function getBook($id){

    }

    public function getBooks($id){

    }
}