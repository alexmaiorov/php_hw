<?php
include 'config.php';
$tpl = file_get_contents('showimg.tpl');
$id = $_GET['id'];
$table = $_GET['table'];
$sql = "SELECT name, url_img, view FROM $table where id = '$id'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result)>0) {
    $newView = "UPDATE $table SET view = view+1 where id = $id";
    $sqlresult = mysqli_query ($connect, $newView);
    $data_img = mysqli_fetch_assoc($result);
    $path = $data_img["url_img"].$data_img["name"];
    $content = '<img src="'.$path.'" alt="img" class="full-img" width = "50%">';
    $content .= '<span class="full-img-view">Просмотров: '.$data_img["view"].'</span>';
    $content .= '<a href="/" class="main-link">Вернуться в галерею</a>';
    $title = 'picture name='.$data_img["name"];
} else {
    ?>
    <h3>В базе нет такого изображения</h3>
    <a href="/" class="main-link">Вернуться в галерею</a>
    <?php
}

$patterns = array( '/{title}/', '/{content}/');
$replace = array ($title, $content);
echo preg_replace($patterns, $replace, $tpl);

?>