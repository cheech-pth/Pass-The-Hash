<?php

namespace PassTheHash;
#Creating Connection class to form a private singleton instance of the DB connection
class Connection {

   private static $conn;

   // Function to assign params to database.ini file
   public function connect() {
      $params = parse_ini_file('database.ini');
      if ($params === false) {
         throw new \Exception("Error in database config file");
      }

      $conStr = sprintf("pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
               $params['host'],
               $params['port'],
               $params['database'],
               $params['user'],
               $params['password']);

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