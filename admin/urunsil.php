<?php 
require_once('header.php');

$id = $_GET['id'];
$urunSil = $db -> prepare('delete from urunler where id=?');
$urunSil -> execute(array($id));

if($urunSil -> rowCount()){
    echo '<div class="alert alert-success text-center">Ürün Silinmiştir</div> <meta http-equiv="refresh" content="2; url=urunler.php">';
} else {
    echo '<div class="alert alert-danger text-center">Hata Oluştu</div>';
}

require_once('footer.php');
?>

