<?php
require_once '/OSPanel/domains/desk/Model/Request.php';

final class RequestController extends Request
{   
    public  $request;
    
    // public function __construct()
    // {
    //     $result = new Request();
    // }
    public function getRequest():void {

       
        $result = $this->getAllRequests();
        if ($result == '') { // проверка ответа
            print_r('error400');
        } elseif ($result == 'isset') {
            print_r('error500');
        } else {
            setcookie("surname", 'Anton');
            require '/OSPanel/domains/desk/Views/RequestViews.php'; // Подключение представления
        }
    }
    public function getOneRequest(): void {


        $id = $_GET['id'];
        $result = $this->getRequestDetail($id);
        if ( $result == '') { // проверка ответа
            print_r('error400');
        } elseif ( $result == 'isset') {
            print_r('error500');
        } else {
            require '/OSPanel/domains/desk/Views/DetailViews.php'; // Подключение представления
        }
        // return  $result;
    }
    public function  increaseRevenue($value){
        return $value;
    }
}
//  $result = new RequestController();
//  $result ->getRequest();