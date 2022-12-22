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
                    <h1>Sicle</h1>
                    <p>n.f</p>
                </div>

                <img src="./assets/images/quote.svg" alt="quote">
            </div>

            <!-- A RENOMMER TEXT OF DEFINITION / Text of definition -->
            <div class="cardBody">
                    <p>Sicle est une application mobile conçue pour inciter les gens à faire du sport de manière ludique et motivante. 👟</p>
                    <br>
                    <p>Grâce à des fonctionnalités innovantes et une interface intuitive, Sicle vous accompagne dans votre parcours de sport et vous encourage à atteindre vos objectifs de santé et de bien-être. 🤝</p>
                    <br>
                    <p>Que vous soyez un sportif amateur ou un athlète confirmé, Sicle vous offre une expérience personnalisée et adaptée à vos objectifs. ❤️</p>
            </div>

            <!-- A RENOMMER LEGEND / Legend -->
            <div class="cardFooter">
                <p>DÉFINITION</p>
            </div>
            
        </div>

        <div class="blockImg cardImage"></div>
    </div>

    <div class="fifthBlock centered">
        <div class="fifthLeftContent">
            <img src="./assets/images/imageApplication.png" alt="application">
        </div>
        <div class="fifthRightContent">
            <div class="cardFifthContent">

                <div class="cardHeaderFifthContent">
                    <h1>MAQUETTE</h1>
                </div>

                <div class="cardBodyFifthBody">
                    <p>Sicle est conçue pour être facile à utiliser et intuitive, afin que les utilisateurs puissent suivre leur entraînement de manière efficace et atteindre leurs objectifs de fitness.</p>
                </div>


            </div>
        </div>
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
                    <br>
                    <p>Fait pour quelqu'un d'être motivé à agir</p>
                </div>

                <div class="cardFooter">
                    <p>DÉFINITION</p>
                </div>
            </div>
            <div class="cardImage rightCard"></div>
    </div>

    <!-- <div class="marquee">
        <div class="rightMarquee"><marquee scrollamount="30" loop="50" direction="right" behavior="slide">SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE</marquee></div>
        <div class="rightMarquee"><marquee scrollamount="30" loop="50" direction="left" behavior="slide">SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE</marquee></div>
        <div class="rightMarquee"><marquee scrollamount="30" loop="50" direction="right" behavior="slide">SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE</marquee></div>
        <div class="rightMarquee"><marquee scrollamount="30" loop="50" direction="left" behavior="slide">SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE SICLE</marquee></div>
    </div> -->


    <div class="thirdBlock centered">
        <div class="title">
            VIDEO PROMOTIONNEL
        </div>

        <div class="youtubeVideo">
            <!-- <video src="#"></video> -->
        </div>
    </div>
    
    <div class="fourthBlock centered">
        <div class="title">
            Testez en avant-premiere le fonctionnement de l’application via un prototype Figma
        </div>

        <div class="text">
            <p>Nous vous invitons à essayer l'expérience Sicle sur notre site web. Intéragissez avec le prototype ci-dessous pour y accéder.</p>
            <br>
            <p>L'expérience Figma que nous avons prototypé pour notre application vous permet de naviguer de manière interactive dans notre interface et de découvrir les fonctionnalités en temps réel que nous avons a vous proposer.</p>
            <br>
            <p> Nous croyons que cette expérience vous offrira une meilleure compréhension de ce que nous proposons et vous aidera à prendre une décision d'inscription plus éclairée.</p>
        </div>
        
        <iframe src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FMie8JSDdfTnp2CHjPlyYZr%2FAPPLI-MOBILE---SICLE-%25F0%259F%2593%25B1%3Fpage-id%3D424%253A1415%26node-id%3D424%253A1416%26viewport%3D947%252C318%252C0.27%26scaling%3Dscale-down%26starting-point-node-id%3D526%253A2627" allowfullscreen></iframe>
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