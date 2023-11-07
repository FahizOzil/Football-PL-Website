<?php

  class database{

   private $connection;
   private $statment;
   public function __construct($config, $user = 'root',$password = ""){
        $conn = "mysql:" . http_build_query($config,'',';');
        $this->connection = new PDO($conn, $user, $password);
    }

    public function query($command , $params = []){
        $this->statment = $this->connection->prepare($command);
        $this->statment->execute($params);
        return $this;
    }

    public function find(){
     return  $this->statment->fetch(PDO::FETCH_ASSOC);
    }

    public function get(){
      return  $this->statment->fetchAll(PDO::FETCH_ASSOC);
    }

  }