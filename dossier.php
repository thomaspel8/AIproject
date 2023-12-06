<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Image Database</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .card {
            width: 243px; /* Vous pouvez ajuster cette valeur en fonction de vos besoins */
            height: 243px; /* Ajustez cette valeur pour correspondre à la largeur */
        }

        /* Styles pour le modal */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0,0,0,0.5);
            display: none;
        }
        .modal {
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            height: 400px;
            background-color: white;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            border-radius: 3px;
            padding: 20px;
        }
        .modal__close {
            position: absolute;
            top: 8px;
            right: 8px;
            cursor: pointer;
            transition: 0.3s all ease-in-out
        }
        .modal__close svg{
            width: 20px;
            height: 20px;
        }
        .modal__close:hover{
            transform: rotate(360deg);
        }
    </style>
</head>

<body>

    <header class="header">
        <div class="container d-flex">
            <div class="logo" id="logo">
                Dossier
            </div>
            <nav class="navbar ">
                <ul class="menu list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#about">Webcam</a></li>
                    <li><a href="index.php#portfolio">Photos</a></li>
                    <li><a href="index.php#skills">About us</a></li>
                    <li><a href="image.php">Gallery</a></li>
                    <li><a href="album.php">Album</a></li>
                    <li><a href="dossier.php">Dossier</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!--<section id="portfolio" class="portfolio">
        <div class="container">
            <div class="grid">
                <div class="grid__item">
                    <div class="card" data-category="web">
                        <img src="./img/ecomesure.png" loading="lazy" width="365" height="243" alt="projet de la ville" class="card__image">
                        <div class="card__overlay">
                            <a href="#" class="card__link" data-id="myModal">Open</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <button>ouvrir la modal</button>
    <div class="overlay"></div>
    <!-- Modal -->
    <div class="modal">
        <div class="modal__close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <div class="modal__header">
            <h2 class="modal__header__title">Titre de la modal</h2>
        </div>
        <div class="modal__body">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officia molestias distinctio esse necessitatibus magnam, nostrum molestiae officiis repudiandae velit ipsum eius id, et ab iste voluptatem incidunt, illo doloribus!
            </p>
        </div>
        <div class="modal__footer">
            <h2 class="modal__footer__button">Fermer</h2>
        </div>
    </div>

    <!--footer-->
    <footer>
        <div class="container">
            <div class="grid">
                <div class="grid__item">
                    <p>Project AI</p>
                </div>
                <div class="grid__item">
                    <p>Copyright © Project AI. All Rights Reserved. Designed by Thomas Pelletier in 2023</p>
                </div>
            </div>
        </div>
    </footer>

<!--script-->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Gestion du clic sur le logo
        $("#logo").click(function () {
            // Faire défiler la page vers le haut avec un effet glissant
            $('html, body').animate({
                scrollTop: 0
            }, 800); // 800 est la durée de l'animation en millisecondes
        });
    });
</script>

</body>

</html>
