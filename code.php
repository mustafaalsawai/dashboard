<?php

use \App\Users\User;


if(isset($_POST['update_data'])){
    $fname= $_POST['Fname'];
    $lname= $_POST['Lname'];
    $email= $_POST['Email'];
    $mess= $_POST['Message'];
    $data=[
      'Fname' => $fname,
      'Lname' => $lname,
      'Email' => $email,
      'Message' => $mess
    ];

    $posts=new User;
    $bo=$posts->up();
}
