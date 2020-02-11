<?php
    $dir = $_SERVER['DOCUMENT_ROOT']."/img/";
    function getGal($url){
        $imgs = scandir($url);
        foreach ($imgs as $img) {
            if ($img != '.' && $img != '..'){
                ?> 
                <img class = "gallery-img" onclick = "getInModal(this)" src=' <?= $url . $img ?> ' alt="img" width = "200">
                <?php
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="gallery">
        <?=getGal($dir);?>
    </div>

    <div id="modal" class="modal">
        <div class="wrapper">
            <button class="btn-close" onclick="closeModal()">Закрыть</button>
            <img src="" alt="img" class="modal-img" width="640" height="480">
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>