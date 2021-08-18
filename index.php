<!DOCTYPE html>
<html lang="en">
<?php 

include("includes/header.php");
include("includes/body.php");
include("includes/footer.php");

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