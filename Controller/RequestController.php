<?php
require_once '/OSPanel/domains/desk/Model/Request.php';

final class RequestController extends Request
{   
    public  $request;
    
    public function __construct()
    {
        $this->request = new Request();
    }
    public function getRequest(){

       
        $this->request->getAllRequests();
        if ($this->request == '') { // проверка ответа
            print_r('error400');
        } elseif ($this->request == 'isset') {
            print_r('error500');
        } else {
            require '/OSPanel/domains/desk/Views/RequestViews.php'; // Подключение представления
        }
        // return  $this->request;
    }
    public function getOneRequest(){


         $id = $_GET['id'];
        $this->request->getRequestDetail($id);
        if ( $this->request == '') { // проверка ответа
            print_r('error400');
        } elseif ( $this->request == 'isset') {
            print_r('error500');
        } else {
            require '/OSPanel/domains/desk/Views/DetailViews.php'; // Подключение представления
        }
        // return  $this->request;
    }
}
//  $this->request = new RequestController();
//  $this->request ->getRequest();