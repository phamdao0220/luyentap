<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-11
 * Time: 08:28
 */

namespace App\model;


class commodityModel
{
public $database;
public function __construct()
{
    $db=new DBConnect;
    $this->database=$db->connect();

}

    public function getAll()
    {

        $sql='SELECT * FROM commodity';
        $stmt=$this->database->query($sql);
        $data= $stmt->fetchAll();
        return $data;

}
    public function addCommodity($commodity)
    {
        $sql = "INSERT INTO commodity (name, species, price, number, date, description) 
                           VALUES (:name,:species,:price,:number,:date,:description)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $commodity->getName());
        $stmt->bindParam(':species', $commodity->getSpecies());
        $stmt->bindParam(':price', $commodity->getPrice());
        $stmt->bindParam(':number', $commodity->getNumber());
        $stmt->bindParam(':date', $commodity->getDate());
        $stmt->bindParam(':description', $commodity->getDescription());
        $stmt->execute();
    }

    public function getStudentById($id)
    {
        $sql = 'SELECT * FROM commodity WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    public function editCommodity($newCommodity)
    {
        $sql = 'UPDATE commodity SET name=:name, species=:species, price=:price, number=:number, date=:date, description=:description WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $newCommodity->getName());
        $stmt->bindParam(':species', $newCommodity->getSpecies());
        $stmt->bindParam(':price', $newCommodity->getPrice());
        $stmt->bindParam(':number', $newCommodity->getNumber());
        $stmt->bindParam(':date', $newCommodity->getDate());
        $stmt->bindParam(':description', $newCommodity->getDescription());
        $stmt->bindParam(':id', $newCommodity->getId());
        $stmt->execute();


    }

    public function deleteCommodity($id)
    {
        $sql = 'DELETE FROM commodity WHERE id=:id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

//    public function find($search)
//    {
//        $sql = "SELECT * FROM Student WHERE name LIKE '$search'";
//        $stmt = $this->database->prepare($sql);
//        $stmt->execute();
//        return $stmt->fetchAll();
//    }

}
