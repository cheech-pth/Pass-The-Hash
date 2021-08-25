<?php

namespace PassTheHash;
#Creating Connection class to form a private singleton instance of the DB connection
class Connection {

   private static $conn;

   // Function to assign params to database.ini file
   public function connect() {
      $params = parse_ini_file('Data/database.ini');
      if ($params === false) {
         throw new \Exception("Error in database config file");
      }

      $conStr = sprintf("pgsql:host=%s;port=%d;dbname=%s;user=%s;passwd=%s",
               $params['host'],
               $params['port'],
               $params['dbname'],
               $params['user'],
               $params['passwd']);

      $pdo = new \PDO($conStr);
      $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

      return $pdo;
   }
   
   public static function get() {
       if (null === static::$conn) {
           static::$conn = new static();
       }
       
       return static::$conn;
   }

}
?>