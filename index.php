<?php
    include_once './includes/devReload.php';
    $message = "<h1>Test d'email</h1>";
    $headers[] = "Content-type: text/html; charset=utf-8";
    $headers[] = "From : gleegs.agency@gmail.com";
    $mailling = mail("maximebaron93@gmail.com","Object",$message,$headers);
    if($mailling){
        echo("ok");
    }else{
        echo("bad mailling");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webpack php</title>
    <link rel="stylesheet" href="./assets/styles/reset.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
</head> 
<body>

        <div class="header centered">
        <div class="logo">
            Sicle
        </div>

        <div class="headerButtons">
            <a class="buttons">Vidéo promotionnel</a>
            <a class="buttons">Beta Experience</a>
            <a class="buttons">L'équipe</a>
            <a class="buttons">Contact</a>
        </div>
    </div>

    <div class="landingPage centered">
        <div class="leftSentences">
            <div class="upsideText">
                <h1>Relève toi et fait mieux !</h1>
            </div>
            <div class="underText">
                <p class="text">« Tout ce qui ne tue pas rend plus fort »</p>
                <p class="miniText">Nietzsche, philosophe</p>
            </div>
        </div>
        <div class="canvas"></div>
    </div>

    <div class="firstBlock centered">
        <div class="card blue">
            <div class="cardHeader">
                <div class="leftCardHeader">
                    <h1>DISCIPLINE</h1>
                    <p>n.f</p>
                </div>
                <div class="rightCardHeader">
                    <img src="./assets/images/quote.svg" alt="quote">
                </div>
            </div>

            <div class="cardBody">
                <p>Règle de conduite que l'on s'impose, maîtrise de soi, sens du devoir</p>
                <p>Il s'astreint à une discipline alimentaire très stricte.</p>
            </div>

            <div class="cardFooter">
                <p>DÉFINITION</p>
            </div>
        </div>

        <div class="blockImg"></div>
    </div>

    <div class="secondBlock centered">
        <div class="packOfCard">
            <div class="card leftCard"></div>
            <div class="card midCard">
                <div class="cardHeader">
                    <div class="leftCardHeader">
                        <h1>MOTIVATION</h1>
                        <p>n.f</p>
                    </div>
                    <div class="rightCardHeader">
                        <img src="./assets/images/quote.svg" alt="quote">
                    </div>
                </div>

                <div class="cardBody">
                    <p>Raisons, intérêts, éléments qui poussent quelqu'un dans son action.</p>
                    <p>Fait pour quelqu'un d'être motivé à agir</p>
                </div>

                <div class="cardFooter">
                    <p>DÉFINITION</p>
                </div>
            </div>
            <div class="card rightCard"></div>
        </div>
    </div>

    <div class="banner"></div>

    <div class="thirdBlock centered">
        <div class="title">
            VIDEO PROMOTIONNEL
        </div>

        <div class="youtubeVideo">
            <!-- <video src="#"></video> -->
        </div>
    </div>

    <div class="fourthBlock">
        <div class="galerieHeader">
            <div class="title">GALERIE</div>
            <div class="arrow">
                <img src="./assets/images/leftArrow.svg" alt="leftArrow">
                <img src="./assets/images/rightArrow.svg" alt="rightArrow">
            </div>
        </div>

        <div class="galerieBody">
        </div>
    </div>

    <?php if(MODE == 'DEV') { ?>
        <script src="http://localhost:35729/livereload.js"></script>
    <?php } ?>

    <script src="./assets/js/bundle.js"></script>

</body>
</html>