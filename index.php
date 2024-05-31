<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORANGE GAMES</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Press+Start+2P&display=swap" rel="stylesheet">



</head>
<body>

    <header class="header">
        <a href="index.php?page=home">
            <img src="images/logo.png" title="Orange Games" alt="Orange Games" class="header-logo">
        </a>
        <i class="fa-solid fa-bars menu-icon"></i>
        <nav class="header-nav">
            <ul>
                <li><a href="index.php?page=home" title="Home">Home</a></li>
                <li><a href="index.php?page=jogos" title="Jogos">Jogos</a></li>
                <li><a href="index.php?page=quemsomos" title="Quem Somos">Quem Somos</a></li>
                <li><a href="index.php?page=contato" title="Contato">Contato</a></li>
            </ul>
        </nav>   
    </header>

    <main>
        <?php
            $page = $_GET["page"] ?? "home";
            $page = "pages/{$page}.php";

            if (file_exists($page)) {
                include $page;
            } else {
                include "pages/404.php";}

        ?>


    </main>

   


    <footer>
        <div class="container-footer">
            <div class="row-footer">
                  
                <div class="footer-col">
                    <h4>JOGOS:</h4>
                    <ul>
                        <li><a href="index.php?page=flappy"> FlappyBurnes </a></li>
                        <li><a href="index.php?page=swamp"> SwampChallenge </a></li>
                        <li><a href="index.php?page=dangeon"> DangeonSurvival </a></li>
                        <li><a href="index.php?page=mvgaming"> MV Gaming </a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4>MAPA DO SITE:</h4>
                    <ul>
                        <li><a href="index.php?page=home">Home</a></li>
                        <li><a href="index.php?page=jogos">Jogos</a></li>
                        <li><a href="index.php?page=quemsomos">Quem Somos</a></li>
                        <li><a href="index.php?page=contato">Contato</a></li>
                        
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Nossas Redes:</h4>
                    <ul>
                        <li><a href="https://github.com/FelipeTr00">Github <i class="fa-brands fa-github"></i></a></li>
                        <li><a href="https://github.com/FelipeTr00">X <i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="https://github.com/FelipeTr00">Instagram <i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://github.com/FelipeTr00">WhatsApp <i class="fa-brands fa-whatsapp"></i></a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <a href="index.php?page=contato">
                    <img src="images/icon2.png" class="footer-image">
                    </a>
                </div>
            </div>
            <br>
            <br>

            <hr> <!-- Linha horizontal -->
            <p class="copyright">Orange Games © 2024 F. Morais. Todos os direitos reservados.</p>
        </div>
    </footer>



</body>
    <script src="https://kit.fontawesome.com/e8927ca629.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

</html>