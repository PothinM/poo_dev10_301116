<?php

namespace Factory;

/**
 * Created by PhpStorm.
 * User: aston
 * Date: 29/11/16
 * Time: 14:48
 */
class EntityFactory
{
    public static function get($entity_type){
        $manager_class = '\Manager\\' . ucfirst($entity_type).'Manager';
        $entity_class =  '\Entity\\' . ucfirst($entity_type).'Entity';
        $db = Database::getConnection('PDO');

        if(class_exists($manager_class)){
            $manager = new $manager_class($db);
            $entity = new $entity_class($manager);
            return $entity;
        }
        else{
            throw new Exception("Mauvais type d'entités données à la factory");
        }


    }

}