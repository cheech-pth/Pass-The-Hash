<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pass The Hash</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <nav class="flex flex-jc-space-between flex-ai-c">
            <a href="/" class="header__logo">
                <img src="source/header-desktop.png" alt="PassTheHash">
            </a>
            
            <div class="header__links hide-for-mobile">
                <ul>
                    <li><a href="#">Docs</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="/Blog.php">Blog</a></li>
                    <li><a href="#">Github</a>
                        <ul class="dropdown-nav">
                            <li><a href="https://github.com/coreyo-git">Coreyo-git</a></li>
                            <li><a href="https://github.com/cheech-pth">Cheech-pth</a></li>
                        </ul>
                    </li>
                    <li><a href="https://discord.gg/utF8NmwxbE">Discord</a></li>
                </ul>
                
            </div>

            <a href="#" class="button hide-for-mobile">Donate to PTH</a>

            <div class="drop_down hide-for-desktop">
                <a href="#" id="dropdown_button" onclick="showMenu()" class="header__hamburger hide-for-desktop">
                    <span></span>
                    <span></span>
                    <span></span>

                    <center class="hide-for-desktop">
                        <!-- dropdown list items will show when we click the drop button --> 
                        <div id="dropdown-content" class="hide-for-desktop">
                            <a href="#">Docs</a>
                            <a href="#">About</a>
                            <a href="https://github.com/cheech-pth">Github</a>
                            <a href="https://discord.gg/utF8NmwxbE">Discord</a>
                            <a href="/Blog.php">Blog</a>
                        </div>
                     </center>
                </a>
            </div>

        </nav>
    </header>
    <section class="cards">
        <a href="#" class="card">
            <div class="card__image" style="background-image:url(https://media.discordapp.net/attachments/521595368736161794/840242311396851743/unknown.png);"></div>
            <div class="card__content">
                <div class="card__title">Escelation</div>
                <div class="class__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, incidunt! Ullam at, esse sapiente eius nulla sequi! Doloremque voluptas quaerat dolorum et, doloribus facere. Sit impedit enim atque consectetur quam.
                </div>
            </div>
            <div class="card__date">22/07/2021</div>
        </a>

        <a href="#" class="card">
            <div class="card__image" style="background-image:url(https://media.discordapp.net/attachments/521595368736161794/840242311396851743/unknown.png);"></div>
            <div class="card__content">
                <div class="card__title">Hashing & Cracking</div>
                <div class="class__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis odio magni error, necessitatibus commodi quaerat illo explicabo perspiciatis maiores rem facere est rerum ducimus maxime itaque fugiat modi. Dicta, neque.
                Nisi similique cum error in illo modi, illo explicabo culpa veritatis corporis possimus.
                </div>
            </div>
            <div class="card__date">22/07/2021</div>
        </a>

        <a href="#" class="card">
            <div class="card__image" style="background-image:url(https://media.discordapp.net/attachments/521595368736161794/840242311396851743/unknown.png);"></div>
            <div class="card__content">
                <div class="card__title">Linux</div>
                <div class="class__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, incidunt! Ullam at, esse sapiente eius nulla sequi! Doloremque voluptas quaerat dolorum et, doloribus facere. Sit impedit enim atque consectetur quam.
                </div>
            </div>
            <div class="card__date">22/07/2021</div>
        </a>
    </section>

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