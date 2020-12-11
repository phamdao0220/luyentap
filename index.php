<?php
require_once __DIR__."/vendor/autoload.php";
$commodityController = new \App\controller\CommodityController();
$page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : NULL;
switch ($page) {
    case 'add':
        $commodityController->add();
        break;
    case'edit':
        $commodityController->edit();
        break;
//    case 'search':
//        $commodityController->search();
//        break;
    case'delete':
        $commodityController->delete();
        break;
    default:
        $commodityController->show();
}
