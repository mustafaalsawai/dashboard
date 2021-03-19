<?php
namespace App\Users;
use Kreait\Firebase\Factory;
use App\Model\Database;

class Action{


    public function isert($ref,$data){
        include ('projectClass/Model/Database.php');
        $pushData=$this->database->getReference($ref)
        ->push($data);
        header('location:edit.php?msg-inserted');
    }
}