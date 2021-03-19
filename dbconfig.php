<?php
require_once ('vendor/autoload.php');
use App\Insert\insert;

if (isset($_POST['id'])) {


    $data=[
        'Fname'   =>$_POST['Fname'],
        'Lname'   =>$_POST['Lname'],
        'Email'   =>$_POST['Email']

    ];
    $obj=new insert();
    $obj->inserts($data);
    $smg='successfully';
    header('location: edit.php');
}


