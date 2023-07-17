<?php
require_once '/OSPanel/domains/desk/Configuration/config.php';

 abstract class Request
{
    private $dbh;
    public $str = '';

    // public function __construct()
    // {        
    //     $this->connection();

    // }
    private function connection()
    {
        try {   
            $this->dbh = new PDO(DATABASE_DSN, DATABASE_USERNAME, DATABASE_PASSWORD);  
        }  
          catch(PDOException $e) {  
              echo $e->getMessage();  
        }
    }
    public function getAllRequests(){

        $this->connection();
        $search_sql = "SELECT * FROM request";
        $sth = $this->dbh->prepare($search_sql);
        $sth->execute();
        $result = $sth->fetchAll((PDO::FETCH_ASSOC));
        $this->str = $result;
        return $result;
    }
    public function getRequestDetail($id){

        $this->connection();
        $search_sql = "SELECT * FROM request where id_request = $id";
        $sth = $this->dbh->prepare($search_sql);
        $sth->execute();
        $result = $sth->fetchAll((PDO::FETCH_ASSOC));
        $this->str = $result;
        return $result;

    }
    abstract public function increaseRevenue($value);


}

?>
