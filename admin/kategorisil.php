<?php 
require_once('header.php');

$id = $_GET['id'];
$katSil = $db -> prepare('delete from kategoriler where id=?');
$katSil -> execute(array($id));

if($katSil -> rowCount()){
    echo '<div class="alert alert-success text-center">Kayıt Silinmiştir</div> <meta http-equiv="refresh" content="2; url=kategoriler.php">';
} else {
    echo '<div class="alert alert-danger text-center">Kayıt Silinmiştir</div>';
}

require_once('footer.php');
?>

