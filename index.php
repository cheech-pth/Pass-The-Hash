<?php 
include("includes/header.php");
include("includes/body.php");
include("includes/footer.php");

require 'vendor/autoload.php';

use PassTheHash\Connection as Connection;

try {
   Connection::get()->connect();
   echo"Established";
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