<!DOCTYPE html>
<html lang="en">
<body>

    <?php 
    include("includes/header.php");

    $hello = "Hello, world!";
    $games = array("Runescape", "WoW", "LoL", "Game");

    foreach ($games as $game) 
    {
        echo "$game <br>";
    }

    echo $hello;

    include("includes/footer.php");
    ?>
</body>
</html>