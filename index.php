<?php
 include 'includes/classautoload.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    /*
    //za pecatejne
    $testObj = new Test();
    $testObj->getUsers();



     //za vnesuvajne
     $testObj1 = new Test();
     $testObj->getUsersStmt("David", "Atanasoski");

     //Za setirajne
      $testObj2 = new Test();
      $testObj->setUsersStmt("John", "Doe", "1994-03-04");
      */

      //so mvc model
      $userObj = new UsersView();
      $userObj->showUser('David');

      $userObj2 = new UsersCont();
      $userObj2->createUser("Jane", "Doe", "1997-03-04");

       ?>
  </body>
</html>
