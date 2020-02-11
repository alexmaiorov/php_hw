<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="gallery">
        <?php
            $sqltable = 'imgs';
            include 'getGal.php'
        ?>
    </div>
</body>
</html>