<?php
require_once ('vendor/autoload.php');
use App\Users\User;


$data=[
        'Fname' => 'Abrahim',
        'Lname'=> 'Alwshah',
        'Email' => 'Abrahim@gmail.com',
        'Message' => 'The 6 Inserted'
];

$userData= new user();
$userData->insert($data);





