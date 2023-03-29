<?php 
require_once('header.php'); 

if($_GET){
    $id = $_GET['id'];
    $basvuruSil = $db -> prepare('delete from insankaynaklari where id=?');
    $basvuruSil -> execute(array($id));

    if($basvuruSil -> rowCount()){
        echo '<meta http-equiv="refresh" content="0; url=ik.php">';
    }
}

?>

<!-- Başvurular Section Start -->
<section id="basvurular">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="lead"><b>İnsan Kaynakları İş Başvuruları</b></h2>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Başvuru No</th>
                            <th>Adı Soyadı</th>
                            <th>E-Posta</th>
                            <th>Telefon</th>
                            <th>Mesaj</th>
                            <th>CV</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $basvurular = $db->prepare('select * from insankaynaklari order by id desc');
                        $basvurular->execute();
                        if ($basvurular->rowCount()) {
                            foreach ($basvurular as $basvuruSatir) {
                        ?>
                                <tr>
                                    <td><?php echo $basvuruSatir['id']; ?></td>
                                    <td><?php echo $basvuruSatir['adiniz']; ?></td>
                                    <td><?php echo $basvuruSatir['email']; ?></td>
                                    <td><?php echo $basvuruSatir['telefon']; ?></td>
                                    <td><?php echo $basvuruSatir['mesaj']; ?></td>
                                    <td><a href=".<?php echo $basvuruSatir['cv']; ?>" target="blank"><i class="bi bi-file-earmark-pdf-fill text-primary" style="font-size: 30px;"></i></a></td>
                                    <td><a href="ik.php?id=<?php echo $basvuruSatir['id']; ?>" class="btn btn-danger">SİL</a></td>
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
<!-- Başvurular Section Start -->

<?php require_once('footer.php'); ?>