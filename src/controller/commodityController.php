<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-11
 * Time: 11:27
 */

namespace App\controller;


use App\model\commodity;
use App\model\commodityModel;

class commodityController
{
    protected $commodityModel;

    public function __construct()
    {
        $this->commodityModel = new commodityModel();

    }

    public function show()
    {
        $commoditys = $this->commodityModel->getAll();
        include_once 'src/view/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "src/view/add.php";
        } else {
            $name = $_REQUEST['name'];
            $species = $_REQUEST['species'];
            $price = $_REQUEST['price'];
            $number = $_REQUEST['number'];
            $date = $_REQUEST['date'];
            $description = $_REQUEST['description'];
            $commoditys = new commodity($name, $species, $price, $number, $date, $description);
            $this->commodityModel->addCommodity($commoditys);
            header('location:index.php');
        }

    }

    public function edit()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "src/view/edit.php";
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $species = $_REQUEST['species'];
            $price = $_REQUEST['price'];
            $number = $_REQUEST['number'];
            $date = $_REQUEST['date'];
            $description = $_REQUEST['description'];
            $newCommodity = new commodity($name, $species, $price, $number, $date, $description);
            $newCommodity->setId($id);
            $this->commodityModel->editCommodity($newCommodity);
            header('location:index.php');

        }

    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->commodityModel->deleteCommodity($id);
        header('location:index.php');
    }
//
//    public function search()
//    {
//        $search = '%' . $_REQUEST['search'] . '%';
//        $bills = $this->studentModel->find($search);
//        include "src/view/search.php";
//    }

}
