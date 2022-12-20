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
    <link rel="stylesheet" href="./assets/styles/style.css">
</head> 
<body>
    <h1>blabssszzzsla</h1>

    <?php if(MODE == 'DEV') { ?>
        <script src="http://localhost:35729/livereload.js"></script>
    <?php } ?>

    <script src="./assets/js/bundle.js"></script>

</body>
</html>