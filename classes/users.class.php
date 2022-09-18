<?php

class Users extends Dbh {

  protected function getUser($name) {
    $sql = "SELECT * FROM users WHERE users_firstname = ? ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name]);

    $result = $stmt->fetchAll();
    return $result;
  }

  protected function setUser($firstname, $lastname, $dob) {
    $sql = "INSERT INTO users(users_firstname, users_lastname , users_dateofbirth) VALUES (?, ?, ?) ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$firstname, $lastname, $dob]);

    $result = $stmt->fetchAll();
    return $result;
  }

}

 ?>
