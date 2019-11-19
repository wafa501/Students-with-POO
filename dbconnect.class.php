<?php
class BasesDonnees{
    private $dbhost='localhost';
    private $dbname='dsi21_g1_2019';
    private $dbuser='root';
    private $dbpwd='';
    public $conect=null;
    public function connect(){
        try {
             $this->conect= new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname,$this->dbuser,$this->dbpwd);
        } catch (PDOException $e) {
           echo $e->getMessage();
        }
        return $this->conect;
    }
}
?>