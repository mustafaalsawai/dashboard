<?php


namespace App\posts;

use Kreait\Firebase\Factory;
use App\Model\Database;

class post extends Database
{
    public function select(){
        $getData= $this->database->getReference('Posts/')
            ->getValue();

        return $getData;


    }
    public function insert(array $data){
        $ref=$this->database->getReference('Posts/');
        $result=$ref->push($data);

        if($result){
            echo "Successfully Data Inserted";
        }else{
            echo "Sorry! Data Not Inserted";
        }
    }

    public function ed(){

        $editData=$this->database->getReference('Posts')->getValue();
        return $editData;
    }

    public function delete()
    {
        if(isset($_POST['delete_dara'])){
            $token=$_POST['ref_toke_delete'];
            $ref="Posts/" .$token;
            $deleteData=$this->database->getReference($ref)->remove();
            return $deleteData;
        }

    }

    public function count(){
        $ref=$this->database->getReference('Posts')->getSnapshot()->numChildren();
        return $ref;
    }
}