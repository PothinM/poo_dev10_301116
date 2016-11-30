<?php
	//autoloading de composer
	//Require 'class/BookEntity.php';



	//$book = new book();
	//$book->title= 'blablo, 1';
	/*$book->setId('1');
	$book->setAuthor('bla');
	$book->setDescription('sldfflkdsjlffjslkfjs');
	$book->setTitle('Blablo');*/
	//$book->save();
	//Kint::dump($book);
	//Kint::dump($book, $book->title);
	//Kint::dump($GLOBALS, $_SERVER);
	//print $book->getTitle();
	//print('</br> Helloo');

	/*$db = database::getConnection('PDO');
	$manager = new bookManager($db);
	$book = new book($manager);
	$book->setTitle('Blablo');
	$book->save();*/

	function __autoload($class){
		$class = 'classes/' . str_replace('\\', '/', $class).'.php';
		require 'class/'.str_ireplace().$class.'.php';
		var_dump($class); die();
	}

	$book = \Factory\EntityFactory::get('book');
	$book->setTitle('bleelb');
	$book->save();

	//$user = EntityFactory::get('user');
	//$author = EntityFactory::get('author');


	print('</br> Hello !!');


?>
