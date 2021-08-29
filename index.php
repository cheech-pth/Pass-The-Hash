<?php 
include("includes/header.php");
include("includes/body.php");
include("includes/footer.php");

require 'vendor/autoload.php';

use PassTheHash\Connection as Connection;
use PassTheHash\CreateTables as CreateTables;

// Connects and prints result to screen for debugging purposes
// Connects and query's all tables prints result to screen for debugging purposes
try {
   // Connect to Postgres Database
   Connection::get()->connect();
   echo"Established";

   // Instantiate instance new instance of CreateTable class
   $tableCreater = new CreateTables($pdo);

   //Creates tables and queries to check is tables were created
   $tables = $tableCreater->createTable()->getTables();

   // Loops through tables printing the existing ones
   foreach ($tables as $table) {
      echo $table . '<br>';
   }
} catch (\PDOException $e) {
   echo $e->getMessage();
}




?>
</body>
<script>
    // When the user clicks the hamburger toggles between showing and hiding the content
    //show and hide dropdown list item on button click
    function showMenu() {
         var click = document.getElementById("dropdown-content");
         if(click.style.display ==="none") {
            click.style.display ="block";
         } else {
            click.style.display ="none";
         } 
      }
</script>
</html>