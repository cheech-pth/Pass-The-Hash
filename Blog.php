<!DOCTYPE html>
<html lang="en">
<body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

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
    <div id="cards"></div>

    <script src="js/get_cards.js" type="text/javascript"></script>
</body>
</html>