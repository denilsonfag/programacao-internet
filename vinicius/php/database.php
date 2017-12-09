<?php
  /**
  * Class to operate with database
  */
  class DataBase {
    
    private $connection;

    public function DataBase() {
    }

    public function connectToTheDb() {
      $servername = "localhost";
      $dbname = "vinicius";
      $username = "vinicius";
      $password = "229149392119";

      try{
        $this->connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return true;
      } catch(PDOException $e) {
        return false;
      }
    }

    public function closeConnection() {
      $this->connection = null;
    }

    public function selectRowFromDb($inputName) {
      $sql = 'SELECT userName, userPassword FROM users WHERE BINARY userName LIKE ?';
      
      $statement = $this->connection->prepare($sql);
      $statement->execute(array($inputName));
      $row = $statement->fetchAll();
      
      return $row;
    }

    public function selectUserNameFromDb($inputName) {
      $sql = 'SELECT 1 FROM users WHERE userName LIKE ?';
      
      $statement = $this->connection->prepare($sql);
      $statement->execute(array($inputName));
      $result = $statement->fetchAll();

      return $result;
    }

    public function insertIntoTheDb($inputName, $inputPassword) {
      $sql = 'INSERT INTO users (userName, userPassword) VALUES (:userName, :userPassword)';
      
      $statement = $this->connection->prepare($sql);
      $statement->bindParam(':userName', $inputName);
      $statement->bindParam(':userPassword', $inputPassword);

      $statement->execute();
    }
  }
?>