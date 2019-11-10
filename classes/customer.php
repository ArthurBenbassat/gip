<?php

include('../sql/dbconnection.php');

class Customer {
  public $id = 0;
  public $firstName = '';
  public $lastName = '';
  public $email = '';
  
  public function login($email, $password) {
   $this->checkBlankEmailOrPassword($email, $password);
      
   $this->checkUser($email, $password);
  }
  
  private function checkBlankEmailOrPassword($email, $password) {
    if ($email == '' || $password == '') {
      throw new Exception('Fill everthing in!');
    }
  }
  
  private function checkUser($email, $password) {
    global $connection;
    
    if ($stmt = $connection->prepare('SELECT id, password, first_name, last_name FROM Customers WHERE email = ?')) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
    }
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $passwordHashedDB, $firstName, $lastName);
        $stmt->fetch();
        $salt = 'zrgfkjhzghzkrgj';
        $passwordHashed = md5($password . $salt);

        if ($passwordHashed == $passwordHashedDB) {
            $this->email = $email;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->id = $id;
        } else {
            throw new Exception('Incorrect password!');            
        }
    } else {
        throw new Exception("Incorrect username!");
    }
    $stmt->close();
  }
  /*
  public function verified($id) {
    $sql = "SELECT verified FROM Customers WHERE id = $id";
    $result = mysqli_query($connection, $sql) or die("Error: " . mysqli_error($connection));
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $verify = $row['verified'];
        }
    }
    if ($verify == 0) {
        return false;
    }else {
      return true;
    }
  }
  */
}