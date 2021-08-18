<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pass The Hash</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header class="header">
        <nav class="flex flex-jc-space-between flex-ai-c">
            <a href="../" class="header__logo">
                <img src="../source/header-desktop.png" alt="PassTheHash">
            </a>
            
            <div class="header__links hide-for-mobile">
                <ul>
                    <li><a href="#">Docs</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="../Blog.php">Blog</a></li>
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
                            <a href="../Blog.php">Blog</a>
                        </div>
                     </center>
                </a>
            </div>
        </nav>
    </header>