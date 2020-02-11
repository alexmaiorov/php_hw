<?php
include 'config.php';
$sql = "SELECT * FROM $sqltable ORDER BY view DESC";
$res = mysqli_query($connect, $sql);

if (mysqli_num_rows($res) > 0) {
    while($data_img = mysqli_fetch_assoc($res)){
        $path = $data_img["url_img"].$data_img["name"];
        $view_img = $data_img["view"];
        ?>
        <div class="gallery-img-wrapper">
            <a href="/showimg.php?id=<?=$data_img["id"]?>&table=<?=$sqltable?>" class="gallery-img-link">
                <img class = "gallery-img" src ="<?=$path?>" alt="img" width = "200">
            </a>
            <span class="gallery-img-view">Просмотров: <?=$view_img?></span>
        </div>
        <?php
    }
} else {
    echo "Изображений не найдено";
}
?>