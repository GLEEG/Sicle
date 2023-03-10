<?php
    error_reporting(E_ALL);
    ini_set('display_errors',true);
    include_once "./includes/devReload.php";
    function loadClass($class){
        require "./includes/$class.php";
    }
    spl_autoload_register("loadClass");


    function mailing($email){
        $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
        <html data-editor-version="2" class="sg-campaigns" xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
            <!--[if !mso]><!-->
            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
            <!--<![endif]-->
            <!--[if (gte mso 9)|(IE)]>
            <xml>
                <o:OfficeDocumentSettings>
                <o:AllowPNG/>
                <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
            </xml>
            <![endif]-->
            <!--[if (gte mso 9)|(IE)]>
        <style type="text/css">
            body {width: 600px;margin: 0 auto;}
            table {border-collapse: collapse;}
            table, td {mso-table-lspace: 0pt;mso-table-rspace: 0pt;}
            img {-ms-interpolation-mode: bicubic;}
        </style>
        <![endif]-->
            <style type="text/css">
            body, p, div {
            font-family: arial,helvetica,sans-serif;
            font-size: 14px;
            }
            body {
            color: #000000;
            }
            body a {
            color: #1188E6;
            text-decoration: none;
            }
            p { margin: 0; padding: 0; }
            table.wrapper {
            width:100% !important;
            table-layout: fixed;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            }
            img.max-width {
            max-width: 100% !important;
            }
            .column.of-2 {
            width: 50%;
            }
            .column.of-3 {
            width: 33.333%;
            }
            .column.of-4 {
            width: 25%;
            }
            ul ul ul ul  {
            list-style-type: disc !important;
            }
            ol ol {
            list-style-type: lower-roman !important;
            }
            ol ol ol {
            list-style-type: lower-latin !important;
            }
            ol ol ol ol {
            list-style-type: decimal !important;
            }
            @media screen and (max-width:480px) {
            .preheader .rightColumnContent,
            .footer .rightColumnContent {
                text-align: left !important;
            }
            .preheader .rightColumnContent div,
            .preheader .rightColumnContent span,
            .footer .rightColumnContent div,
            .footer .rightColumnContent span {
                text-align: left !important;
            }
            .preheader .rightColumnContent,
            .preheader .leftColumnContent {
                font-size: 80% !important;
                padding: 5px 0;
            }
            table.wrapper-mobile {
                width: 100% !important;
                table-layout: fixed;
            }
            img.max-width {
                height: auto !important;
                max-width: 100% !important;
            }
            a.bulletproof-button {
                display: block !important;
                width: auto !important;
                font-size: 80%;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
            .columns {
                width: 100% !important;
            }
            .column {
                display: block !important;
                width: 100% !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
            .social-icon-column {
                display: inline-block !important;
            }
            }
        </style>
            <style>
            @media screen and (max-width:480px) {
                table\0 {
                width: 480px !important;
                }
            }
            </style>
            <!--user entered Head Start--><!--End Head user entered-->
            </head>
            <body>
            <center class="wrapper" data-link-color="#1188E6" data-body-style="font-size:14px; font-family:arial,helvetica,sans-serif; color:#000000; background-color:#FFFFFF;">
                <div class="webkit">
                <table cellpadding="0" cellspacing="0" border="0" width="100%" class="wrapper" bgcolor="#FFFFFF">
                    <tr>
                    <td valign="top" bgcolor="#FFFFFF" width="100%">
                        <table width="100%" role="content-container" class="outer" align="center" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td width="100%">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                <td>
                                    <!--[if mso]>
            <center>
            <table><tr><td width="600">
        <![endif]-->
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width:100%; max-width:600px;" align="center">
                                            <tr>
                                                <td role="modules-container" style="padding:0px 0px 0px 0px; color:#000000; text-align:left;" bgcolor="#FFFFFF" width="100%" align="left"><table class="module preheader preheader-hide" role="module" data-type="preheader" border="0" cellpadding="0" cellspacing="0" width="100%" style="display: none !important; mso-hide: all; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;">
            <tr>
            <td role="module-content">
                <p></p>
            </td>
            </tr>
        </table><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" role="module" data-type="columns" style="padding:0px 0px 60px 0px;" bgcolor="#FFFFFF" data-distribution="1,1">
            <tbody>
            <tr role="module-content">
                <td height="100%" valign="top"><table width="300" style="width:300px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-0">
            <tbody>
                <tr>
                <td style="padding:0px;margin:0px;border-spacing:0;"><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ffb4a968-f67f-4370-8c24-d00c8bdaaaff" data-mc-module-version="2019-10-22">
            <tbody>
            <tr>
                <td style="padding:40px 0px 0px 0px; line-height:35px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: left"><span style="color: #000000; font-family: helvetica, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; font-size: 40px"><strong>BIENVENUE SUR SICLE</strong></span>&nbsp;</div><div></div></div></td>
            </tr>
            </tbody>
        </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ffb4a968-f67f-4370-8c24-d00c8bdaaaff.1" data-mc-module-version="2019-10-22">
            <tbody>
            <tr>
                <td style="padding:20px 10px 0px 0px; line-height:24px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="color: #000000; font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline">Merci de vous ??tre abonn?? ?? la newsletter.</span>&nbsp;</div><div></div></div></td>
            </tr>
            </tbody>
        </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ffb4a968-f67f-4370-8c24-d00c8bdaaaff.1.3" data-mc-module-version="2019-10-22">
            <tbody>
            <tr>
                <td style="padding:20px 10px 0px 0px; line-height:24px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="color: #000000; font-family: arial, helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline">Courir, bouger et se d??passer, nous savons que vous avez h??te, Sicle sera bient??t l?? !&nbsp;</span>&nbsp;</div><div></div></div></td>
            </tr>
            </tbody>
        </table><table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="ffb4a968-f67f-4370-8c24-d00c8bdaaaff.1.2" data-mc-module-version="2019-10-22">
            <tbody>
            <tr>
                <td style="padding:20px 10px 0px 0px; line-height:24px; text-align:inherit;" height="100%" valign="top" bgcolor="" role="module-content"><div><div style="font-family: inherit; text-align: inherit"><span style="color: #000000; font-family: inherit; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: inherit; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: inherit; line-height: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; text-align: start; background-color: rgb(255, 255, 255); float: none; display: inline">Nous travaillons dur pour vous offrir la meilleure exp??rience possible. C\'est pourquoi nous sommes impatients de vous accueillir et de vous aider ?? atteindre vos objectifs.</span></div><div></div></div></td>
            </tr>
            </tbody>
        </table></td>
                </tr>
            </tbody>
            </table><table width="300" style="width:300px; border-spacing:0; border-collapse:collapse; margin:0px 0px 0px 0px;" cellpadding="0" cellspacing="0" align="left" border="0" bgcolor="" class="column column-1">
            <tbody>
                <tr>
                <td style="padding:0px;margin:0px;border-spacing:0;"><table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" data-muid="310d916e-21da-4835-b221-8d57f8e2faed">
            <tbody>
            <tr>
                <td style="font-size:6px; line-height:10px; padding:5px 0px 0px 0px;" valign="top" align="center">
                <img class="max-width" border="0" style="display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:100% !important; width:100%; height:auto !important;" width="300" alt="" data-proportionally-constrained="true" data-responsive="true" src="http://cdn.mcauto-images-production.sendgrid.net/381a99dd9bedc798/0ac2638c-3c8b-4403-8ccb-e3041502bf34/546x583.png">
                </td>
            </tr>
            </tbody>
        </table></td>
                </tr>
            </tbody>
            </table></td>
            </tr>
            </tbody>
        </table></td>
                                            </tr>
                                            </table>
                                            <!--[if mso]>
                                        </td>
                                        </tr>
                                    </table>
                                    </center>
                                    <![endif]-->
                                </td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        </table>
                    </td>
                    </tr>
                </table>
                </div>
            </center>
            </body>
        </html>';

            // Cr??ation de l'instance de cURL
        $curl = curl_init();

        // D??finition de l'URL de l'API SendGrid
        $url = 'https://api.sendgrid.com/v3/mail/send';

        // Pr??paration des donn??es ?? envoyer ?? l'API
        $data = array(
        "personalizations" => array(
            array(
            "to" => array(
                array(
                "email" => $email
                )
            ),
            "subject" => 'BIENVENUE SUR SICLE'
            )
        ),
        "from" => array(
            "email" => 'gleegs.agency@gmail.com'
        ),
        "content" => array(
            array(
            "type" => "text/html",
            "value" => $message
            )
        )
        );
        $apiKey = getenv("sendgridKey");

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
            "Authorization: Bearer {$apiKey}",
            "Content-Type: application/json"
        ),
        ));

        // Envoi de la requ??te HTTP
        $response = curl_exec($curl);
        $err = curl_error($curl);

        // Fermeture de l'instance de cURL
        curl_close($curl);

        // V??rification de la r??ponse de l'API
        if ($err) {
        // Erreur lors de l'envoi de la requ??te
        echo "cURL Error #:" . $err;
        } else {
        // R??ponse de l'API
        echo $response;
        }
    }
    if(!empty($_POST)){
        $manager = new UserManager();
        $user = $manager->getByEmail($_POST['email']);
        if($user == false){
            $user = new User($_POST);

            $manager->add($user);
            var_dump($user->getEmail());
            mailing($user->getEmail());
            $succes = "Adresse bien enregistr??e vous recevrez un mail dans quelques instants";
        }else{
            $error = "L'adresse mail existe d??j??";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-252574533-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-252574533-2');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WBB7MXG');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sicle - L'application mobile ludique et motivante</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#272f38">
    <link rel="shortcut icon" href="./assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="./assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/styles/reset.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head> 
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBB7MXG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="loadScreen">
        <div class="spinner rounded-circle"></div>
        <h3 class="loadingTitle">Chargement...</h3>
    </div>

    <!-- Landing page -->
    <div class="landingPageAll">

        <!-- Header -->
        <div class="header centered">
            <a href="./index.php" class="logo">Sicle</a>

            <div class="headerButtons">
                <a href="#sicleDefinitionAnchor" class="buttons">Notre histoire</a>
                <a href="#promotionalVideoAnchor" class="buttons">Teaser</a>
                <a href="#previewExperienceAnchor" class="buttons">Preview experience</a>
                <a href="#teamAnchor" class="buttons">L'??quipe</a>
                <a href="#contactAnchor" class="buttons">Contact</a>
            </div>
        </div>

        <!-- Landing -->
        <div class="landingPage centered">

            <div class="leftSentences">
                <div class="upsideText">
                    <h1>Rel??ve-toi et fais mieux !</h1>
                </div>

                <div class="underText">
                    <p class="text">?? Tout ce qui ne tue pas rend plus fort ??</p>
                    <p class="miniText">Nietzsche, philosophe</p>
                </div>
            </div>

            <canvas class="webgl"></canvas>

        </div>

    </div>

    <!-- Section definition -->
    <div data-aos="fade-up" id="sicleDefinitionAnchor" class="firstBlock centered">

        <div class="card blue">

            <div class="cardHeader">

                <div class="leftCardHeader boldItalic">
                    <h1>Sicle</h1>
                </div>

                <img src="./assets/images/quote.svg" alt="quote">

            </div>

            <div class="cardBody">
                <p>Sicle est une application mobile con??ue pour inciter les gens ?? faire du sport de mani??re ludique et motivante. ????</p>
                <br>
                <p>Gr??ce ?? des fonctionnalit??s innovantes et une interface intuitive, Sicle vous accompagne dans votre parcours de sport et vous encourage ?? atteindre vos objectifs de sant?? et de bien-??tre. ????</p>
                <br>
                <p>Que vous soyez un sportif amateur ou un athl??te confirm??, Sicle vous offre une exp??rience personnalis??e et adapt??e ?? vos objectifs. ??????</p>
            </div>

            <!-- A RENOMMER LEGEND / Legend -->
            <div class="cardFooter">
                <p>D??FINITION</p>
            </div>
            
        </div>

        <div class="blockImg cardImage"></div>

    </div>

    <div data-aos="fade-up" class="fifthBlock centered">

        <div class="fifthLeftContent">
            <img src="./assets/images/imageApplication.png" alt="application">
        </div>

        <div class="card blue">

            <div class="cardHeader">

                <div class="leftCardHeader boldItalic">
                    <h1>Discipline</h1>
                    <p>n.f</p>
                </div>

                <img src="./assets/images/quote.svg" alt="quote">

            </div>

            <div class="cardBody">
                <p>R??gle de conduite que l'on s'impose, ma??trise de soi, sens du devoir</p>
                <br>
                <p>Il s'astreint ?? une discipline alimentaire tr??s stricte.</p>
            </div>

            <!-- A RENOMMER LEGEND / Legend -->
            <div class="cardFooter">
                <p>D??FINITION</p>
            </div>
            
        </div>

    </div>

    <div data-aos="fade-up" class="secondBlock centered">

        <div class="cardImage leftCard"></div>

        <div class="card midCard">

            <div class="cardHeader">

                <div class="leftCardHeader boldItalic">
                    <h1>Motivation</h1>
                    <p>n.f</p>
                </div>

                <div class="rightCardHeader">
                    <img src="./assets/images/quote.svg" alt="quote">
                </div>

            </div>

            <div class="cardBody">
                <p>Raisons, int??r??ts, ??l??ments qui poussent quelqu'un dans son action.</p>
                <br>
                <p>Fait pour quelqu'un d'??tre motiv?? ?? agir</p>
            </div>

            <div class="cardFooter">
                <p>D??FINITION</p>
            </div>

        </div>

        <div class="cardImage rightCard"></div>

    </div>

    <!-- Promotional video -->
    <div data-aos="fade-up" id="promotionalVideoAnchor" class="thirdBlock centered">

        <div class="title boldItalic">TEASER</div>

        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/_4Iq32DBYT8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <!-- Experience Figma -->
    <div data-aos="fade-up" id="previewExperienceAnchor" class="fourthBlock centered">

        <div class="titleFigma boldItalic">
            Testez en avant-premiere le fonctionnement de l???application via un prototype Figma
        </div>

        <div class="text">
            <p>Essayer l'exp??rience Sicle en interagissant avec le prototype ci-dessous ????</p>
            <br>
            <p>Gr??ce aux maquettes Figma que nous avons design?? et prototyp??, vous pouvez naviguer de mani??re interactive dans linterface et d??couvrir les fonctionnalit??s en temps r??el ????</p>
            <br>
            <p>Cette exp??rience vous offrira une meilleure compr??hension de ce que nous proposons ????</p>
        </div>

        <iframe src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FMie8JSDdfTnp2CHjPlyYZr%2FAPPLI-MOBILE---SICLE-%25F0%259F%2593%25B1%3Fpage-id%3D424%253A1415%26node-id%3D424%253A1416%26viewport%3D947%252C318%252C0.27%26scaling%3Dscale-down%26starting-point-node-id%3D526%253A2627" allowfullscreen></iframe>

    </div>

    <!-- Team -->
    <div id="teamAnchor" class="team centered">
        <h2 class="boldItalic">L'??quipe ????</h2>

        <div class="allCardsTeam">
            <div data-aos="fade-right" class="cardTeam cardAyman">

                <div class="name boldItalic">Ayman Benammour</div>

                <div class="links">
                    
                    <div class="linkedinLink">
                        <a class="buttons" href="https://www.linkedin.com/in/ayman-benammour" target="_blank">LinkedIn</a> 
                        <img class="logoLink" src="./assets/images/logoLinkedIn.svg" alt="LinkedIn logo">
                    </div>

                    <div class="githubLink">
                        <a class="buttons" href="https://github.com/ayman-benammour" target="_blank">GitHub</a> 
                        <img class="logoLink" src="./assets/images/logoGitHub.svg" alt="GitHub logo">
                    </div>

                    <div class="portfolioLink">
                        <a class="buttons" href="https://ayman-benammour.com" target="_blank">Portfolio</a> 
                        <img class="logoLink" src="./assets/images/iconPortfolio.svg" alt="Portfolio logo">
                    </div>

                </div>

                <img class="avatar avatarAyman" src="./assets/images/avatar3dAyman.png" alt="">
                <img class="photo photoAyman" src="./assets/images/photoAyman.png" alt="">

            </div>

            <!-- Kylian -->
            <div data-aos="zoom-in" class="cardTeam cardKylian">

                <div class="name boldItalic">Kylian Alger</div>

                <div class="links">
                    
                    <div class="linkedinLink">
                        <a class="buttons" href="https://www.linkedin.com/in/kylian-alger" target="_blank">LinkedIn</a> 
                        <img class="logoLink" src="./assets/images/logoLinkedIn.svg" alt="LinkedIn logo">
                    </div>

                    <div class="githubLink">
                        <a class="buttons" href="https://github.com/Kylian-Alger" target="_blank">GitHub</a> 
                        <img class="logoLink" src="./assets/images/logoGitHub.svg" alt="GitHub logo">
                    </div>

                </div>

                <img class="avatar" src="./assets/images/avatar3dKylian.png" alt="">
                <img class="photo" src="./assets/images/photoKylian.png" alt="">
            </div>

            <div data-aos="fade-left" class="cardTeam cardMaxime">

                <div class="name boldItalic">Maxime Baron</div>

                <div class="links">
                    
                    <div class="linkedinLink">
                        <a class="buttons" href="https://www.linkedin.com/in/baron-maxime/" target="_blank">LinkedIn</a> 
                        <img class="logoLink" src="./assets/images/logoLinkedIn.svg" alt="LinkedIn logo">
                    </div>

                    <div class="githubLink">
                        <a class="buttons" href="https://github.com/maxime-baron" target="_blank">GitHub</a> 
                        <img class="logoLink" src="./assets/images/logoGitHub.svg" alt="GitHub logo">
                    </div>

                </div>

                <img class="avatar" src="./assets/images/avatar3dMaxime.png" alt="">
                <img class="photo" src="./assets/images/photoMaxime.png" alt="">
            </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div id="contactAnchor" class="contact">

        <div class="leftContactContent">

            <div class="contactTitle boldItalic">
                <p>Restez inform?? gr??ce ?? notre newsletter.</p>
            </div>
            <!-- action="#"  -->
            <form method="post" action="#">
                <div class="displayTest">
                    <div class="firstFormPart">
                        <div class="emailInput">
                            <input type="email" placeholder="Email" name="email" id="email">
                        </div>
                        
                        <div class="checkbox boldItalic">
                            <input type="checkbox" name="completeSubscription" id="completeSubscription">
                            <label for="completeSubscription">Voulez vous pr??-inscrire ?</label>
                        </div>
                    </div>


                    <div class="personnalInfo hidden">

                        <input class="inputStyle"type="text" name="username" id="username" placeholder="Nom d'utilisateur">
                        <input class="inputStyle" type="number" name="weight" id="weight" max=200 min=30 step="0.01" placeholder="Poids (en kg)">
                        <input class="inputStyle" type="number" name="height" id="height" max=300 min=100 placeholder="Taille (en cm)">
                        <input class="inputStyle" type="number" name="age" id="age" max=99 min=12 placeholder="Age">

                        <select class="selectStyle" name="gender" id="gender">
                            <option value="male">Homme</option>
                            <option value="female">Femme</option>
                        </select>

                </div>
                </div>

                <div class="goal hidden">
                    <input type="number" name="weightGoal" id="weightGoal" step="0.01" placeholder="Votre objectif de poids (en kg)">
                </div>

                <div class="btns">
                    <button class="boldItalic btn next invisible">Suivant <img class="imgButton" src="./assets/images/rightArrow.png" alt=""></button>
                    <button class="boldItalic btn prev invisible">Prec??dent <img src="./assets/images/leftArrow.png" alt=""></button>
                    <input type="submit" value="Valider" class="boldItalic submit invisible">
                </div>

                <input type="submit" value="Valider" class="contactButton">

                <?php 
                    if(isset($error)){
                        echo("<span class='error'>$error</span>");
                    }
                ?>
                <?php 
                    if(isset($succes)){
                        echo("<span class='succes'>$succes</span>");
                    }
                ?>
            </form>
        </div>

        <div class="rightContactContent">

            <div class="uperText">
                <h1>Gr??ce ?? des fonctionnalit??s innovantes et une interface intuitive, Sicle vous accompagne dans votre parcours de sport et vous encourage ?? atteindre vos objectifs de sant?? et de bien-??tre.</h1>
            </div>
            
            <div class="downText">
            <p>Alors n'h??sitez pas ?? t??l??charger l'application et ?? vous mettre au sport avec Sicle !</p>
            </div>
            
        </div>

    </div>

    <!-- Scripts -->
    <?php if(MODE == 'DEV') { ?>
        <script src="http://localhost:35729/livereload.js"></script>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/kursor"></script>
    <script>
        new kursor({
            type: 4,
            color: '#272f38'
        })
    </script>

    <script src="./assets/js/bundle.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init()</script>

</body>
</html>