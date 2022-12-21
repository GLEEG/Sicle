<?php
    include_once './includes/devReload.php';

    ini_set('SMTP', 'smtp.sendgrid.net');
    ini_set('smtp_port', '465');
    ini_set('sendmail_from', 'sicle');
    ini_set('smtp_password', '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');

    $smtp_username = 'sicle';
    $smtp_password = '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';

        // Création de l'instance de cURL
    $curl = curl_init();

    // Définition de l'URL de l'API SendGrid
    $url = 'https://api.sendgrid.com/v3/mail/send';

    // Préparation des données à envoyer à l'API
    $data = array(
    "personalizations" => array(
        array(
        "to" => array(
            array(
            "email" => 'maximebaron93@gmail.com'
            )
        ),
        "subject" => 'Object'
        )
    ),
    "from" => array(
        "email" => 'gleegs.agency@gmail.com'
    ),
    "content" => array(
        array(
        "type" => "text/plain",
        "value" => "<h1>Test d'email</h1>"
        )
    )
    );

    // Configuration de cURL
    curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer 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",
        "Content-Type: application/json"
    ),
    ));

    // Envoi de la requête HTTP
    $response = curl_exec($curl);
    $err = curl_error($curl);

    // Fermeture de l'instance de cURL
    curl_close($curl);

    // Vérification de la réponse de l'API
    if ($err) {
    // Erreur lors de l'envoi de la requête
    echo "cURL Error #:" . $err;
    } else {
    // Réponse de l'API
    echo $response;
    }


    // $message = "<h1>Test d'email</h1>";
    // $headers[] = "Content-type: text/html; charset=utf-8";
    // $headers[] = "From : gleegs.agency@gmail.com";
    // $mailling = mail("maximebaron93@gmail.com","Object",$message,implode("\r\n", $headers));
    // if($mailling){
    //     echo("ok");
    // }else{
    //     print_r(ini_get_all());
    //     echo("bad mailing");
    // }
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
            <canvas class="webgl"></canvas>
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

    <div class="banner"></div>

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
                <p>Restez informé grâce à notre newsletters.</p>
            </div>

            <input type="email" placeholder="EMAIL">

            <button class="contactButton">BLABLABLA</button>
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