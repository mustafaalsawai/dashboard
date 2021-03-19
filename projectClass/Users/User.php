<?php


namespace App\Users;
use Kreait\Firebase\Factory;
use App\Model\Database;


class User extends Database
{
    public function select(){
      $getData= $this->database->getReference('Users')
      ->getValue();

      return $getData;


}
public function insert(){
    $pushData = $this->database->getReference('Users');
    $result = $pushData->push();




        if($result){
            echo "Successfully Data Inserted";
        }else{
            echo "Sorry! Data Not Inserted";
        }
}

public function ed(){

    $editData=$this->database->getReference('Users')->getValue();
    return $editData;
}

public function delete()
{
    if(isset($_POST['delete_dara'])){
        $token=$_POST['ref_toke_delete'];
        $ref="Users/" .$token;
        $deleteData=$this->database->getReference($ref)->remove();
        return $deleteData;
    }

}

public function count(){
        $ref=$this->database->getReference('Users')->getSnapshot()->numChildren();
         return $ref;
}


}