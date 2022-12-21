<?php
    include_once './includes/devReload.php'
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
                <a href ="#" class="buttons">Vidéo promotionnel</a>
                <a href ="#" class="buttons">Beta Experience</a>
                <a href ="#" class="buttons">L'équipe</a>
                <a href ="#" class="buttons">Contact</a>
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
            <!-- <canvas class="webgl"></canvas> -->
        </div>

    </div>

    <!-- First section definition -->
    <div class="firstBlock centered">

        <!-- Card definition -->
        <div class="card blue">

            <!-- A RENOMMER TITLE OF DEFINITION / Name of word -->
            <div class="cardHeader">
                <!-- A RENOMMER NAME OF WORD / Name of word -->
                <div class="leftCardHeader">
                    <h1>DISCIPLINE</h1>
                    <p>n.f</p>
                </div>

                <img src="./assets/images/quote.svg" alt="quote">
            </div>

            <!-- A RENOMMER TEXT OF DEFINITION / Text of definition -->
            <div class="cardBody">
                <p>Règle de conduite que l'on s'impose, maîtrise de soi, sens du devoir</p>
                <br>
                <p>Il s'astreint à une discipline alimentaire très stricte.</p>
            </div>

            <!-- A RENOMMER LEGEND / Legend -->
            <div class="cardFooter">
                <p>DÉFINITION</p>
            </div>
            
        </div>

        <div class="blockImg cardImage"></div>
    </div>



    <div class="secondBlock centered">
            <div class="cardImage leftCard"></div>
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
            <div class="cardImage rightCard"></div>
    </div>

    <div class="marquee">
        <div class="rightMarquee" data-text="SICLE">&nbsp; SICLE &nbsp; SICLE</div>
        <div class="leftMarquee" data-text="SICLE">&nbsp; SICLE &nbsp; SICLE</div>
        <div class="rightMarquee" data-text="SICLE">&nbsp; SICLE &nbsp; SICLE</div>
        <div class="leftMarquee" data-text="SICLE">&nbsp; SICLE &nbsp; SICLE</div>
        <div class="rightMarquee" data-text="SICLE">&nbsp; SICLE &nbsp; SICLE</div>
        <div class="leftMarquee" data-text="SICLE">&nbsp; SICLE &nbsp; SICLE</div>
    </div>

    <!-- <div class="banner"></div> -->

    <div class="thirdBlock centered">
        <div class="title">
            VIDEO PROMOTIONNEL
        </div>

        <div class="youtubeVideo">
            <!-- <video src="#"></video> -->
        </div>
    </div>
    

    <!-- <div class="fourthBlock">
        <div class="galerieHeader">
            <div class="title">GALERIE</div>
            <div class="arrow">
                <img src="./assets/images/leftArrow.svg" alt="leftArrow">
                <img src="./assets/images/rightArrow.svg" alt="rightArrow">
            </div>
        </div>

        <div class="galerieBody">
        </div>
    </div> -->

    <div class="fifthBlock centered">
        <div class="fifthLeftContent">
            <img src="./assets/images/imageApplication.png" alt="application">
        </div>
        <div class="fifthRightContent"></div>
    </div>


    <div class="contact">
        <div class="leftContactContent">
            <div class="contactTitle">
                <p>Restez informé grâce à notre newsletter.</p>
            </div>

            <input type="email" placeholder="Email">
            <input type="text" class="hidden" placeholder="Poids (en kilogrammes)">
            <input type="text" class="hidden" placeholder="Taille (en centimètre)">
            <input type="text" class="hidden" placeholder="Âge">
            <input type="text" class="hidden" placeholder="Genre">
            <input type="text" class="hidden" placeholder="Objectif">


            <button class="contactButton">Button</button>
        </div>
        <div class="rightContactContent">

            <div class="uperText">
                <h1>Grâce à des fonctionnalités innovantes et une interface intuitive, Sicle vous accompagne dans votre parcours de sport et vous encourage à atteindre vos objectifs de santé et de bien-être.</h1>
            </div>
            
            <div class="downText">
            <p>Alors n'hésitez pas à télécharger l'application et à vous mettre au sport avec Sicle !</p>
            </div>
            
        </div>
    </div>




    <?php if(MODE == 'DEV') { ?>
        <script src="http://localhost:35729/livereload.js"></script>
    <?php } ?>

    <script src="./assets/js/bundle.js"></script>

</body>
</html>