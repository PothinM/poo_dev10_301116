<?php

//require 'BookManager.php';
//require 'Database.php';

/**
 * Created by PhpStorm.
 * User: aston
 * Date: 28/11/16
 * Time: 15:52
 */
namespace  Entity;
class BookEntity
{
    private $title;
    private $id;
    private $author;
    private $description;

    protected $manager;

    public function __construct(\Manager\BookManager $manager)
    {
        $this->manager = $manager;
    }

    //fonction
    public function save(){
        //$db = new database('PDO');
        //$db = database::getConnection('PDO');
        //Kint::dump(database::$maVariable);
        //$db->getConnection();

        //$manager = new bookManager($db);
        //$manager -> addbook($this);

//        Kint::dump($this->manager);
        $this->manager->addBook($this);

    }

    public static function load($id){
        $db = \Core\database::getConnection('PDO');
        $manager = new BookManager($db);
        if(is_numeric($id)){
            $manager->getBook($id);
        }
        elseif (is_array($id)){
            $manager->getBooks($id);
        }
        else{
            throw new Exception('Mauvais format de donnée pour la méthode load');
        }
    }

    public function delete($id){
        $db = database::getConnection('PDO');
        $manager = new BookManager($db);


    }

    public static function create(\Entity\BookEntity $book){


    }

    //Accesseur/Mutateur
    //title
    public function getTitle(){
        return $this -> title;
    }
    public function setTitle($title){
        return $this -> title = $title;
    }
    //id
    public function getId(){
        return $this -> id;
    }
    public function setId($id){
        return $this -> id = $id;
    }
    //author
    public function getAuthor(){
        return $this -> author;
    }
    public function setAuthor($author){
        return $this -> author = $author;
    }
    //description
    public function getDescription(){
        return $this -> description;
    }
    public function setDescription($description){
        return $this -> description = $description;
    }
}