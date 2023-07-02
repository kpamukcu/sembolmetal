<?php 
require_once('header.php'); 

if($_GET){
    $id = $_GET['id'];
    $bultenUyeSil = $db -> prepare('delete from ebulten where id=?');
    $bultenUyeSil -> execute(array($id));
    if($bultenUyeSil -> rowCount()){
        echo '<meta http-equiv="refresh" content="0; url=ebulten-uyeler.php">';
    } else {
        echo '<script>alert("Hata Oluştu. Lütfen Tekrar Deneyin")</script>';
    }
}

?>
<!-- Üye List Start -->
<section id="uyeList">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Üye No</th>
                            <th>E-Posta Adresi</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $ebultenUyeList = $db->prepare('select * from ebulten order by id desc');
                        $ebultenUyeList->execute();
                        if ($ebultenUyeList->rowCount()) {
                            foreach ($ebultenUyeList as $ebultenUyeListSatir) {
                        ?>
                                <tr>
                                    <td><?php echo $ebultenUyeListSatir['id']; ?></td>
                                    <td><?php echo $ebultenUyeListSatir['email']; ?></td>
                                    <td><a href="ebulten-uyeler.php?id=<?php echo $ebultenUyeListSatir['id']; ?>"><i class="bi bi-trash3-fill text-danger"></i></a></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Üye List End -->

<?php require_once('footer.php'); ?>