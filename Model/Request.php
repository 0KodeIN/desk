<?php
require_once '/OSPanel/domains/desk/Configuration/config.php';

class Request
{
    private $dbh;
    public $str = '';
    public $detail = '';
    public function __construct()
    {        
        try {   
            $this->dbh = new PDO(DATABASE_DSN, DATABASE_USERNAME, DATABASE_PASSWORD);  
        }  
          catch(PDOException $e) {  
              echo $e->getMessage();  
        }

    }
    public function getAllRequests(){
        $search_sql = "SELECT * FROM request";
        $sth = $this->dbh->prepare($search_sql);
        $sth->execute();
        // $sth->execute();
        $result = $sth->fetchAll((PDO::FETCH_ASSOC));
        $this->str = $result;
        // $this->str = json_encode($result);
        // print_r($result);
        return $this->str;
        // return $result[0]['id_request'];
    }
    public function getRequestDetail($id){

        $search_sql = "SELECT * FROM request where id_request = $id";
        $sth = $this->dbh->prepare($search_sql);
        $sth->execute();
        // $sth->execute();
        $result = $sth->fetchAll((PDO::FETCH_ASSOC));
        $this->str = $result;
        // $this->str = json_encode($result);
        // print_r($result);
        return $this->str;
        // return $result[0]['id_request'];
    }


}
// $key = new Request();
// $key->getRequestDetail(1);

// $key = $key->__construct();
// print_r($key->str);
// print_r ($key->str);
?>
