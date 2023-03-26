<?php 
require_once('header.php');

$id = $_GET['id'];
$blogSil = $db->prepare('delete from makale where id=?');
$blogSil -> execute(array($id));

if($blogSil -> rowCount()){
    echo '<div class="alert alert-success text-center">Blog Yazısı Silindi</div><meta http-equiv="refresh" content="1; url=blog.php">';
} else {
    echo '<div class="alert alert-danger text-center">Hata Oluştu. Lütfen Daha Sonra Tekrar Deneyin.</div>';
}

require_once('footer.php');
?>