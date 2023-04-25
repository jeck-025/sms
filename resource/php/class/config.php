<?php

class config{
    //local
    //private $user = 'root';
    //private $password = '';
    //public $pdo = null;

    //hostinger
    private $user = 'ceumlsre_sms';
    private $password = 'admin123';
    public $pdo = null;

    public function con(){
        try {

            //LOCAL

            //$this->pdo = new PDO('mysql:host=127.0.0.1:3306;dbname=sms', $this->user, $this->password);
           // } catch (PDOException $e) {
                //die($e->getMessage());

            //HOSTINGER
            $this->pdo = new PDO('mysql:local=109.106.254.186:3306;dbname=cemlre_sms', $this->user, $this->password);
            } catch (PDOException $e) {
                die($e->getMessage());
        }
        return $this->pdo;

    }
}

 ?>
