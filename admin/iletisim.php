<?php
require_once('header.php');

if ($_GET) {
    $id = $_GET['id'];
    $mesajSil = $db->prepare('delete from iletisim where id=?');
    $mesajSil->execute(array($id));
}

?>



<!-- Contact Info Start -->
<section id="contactInfo">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="lead">İletişim Bilgileri</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="post" class="form-row">

                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Info End -->

<!-- Contact Form Start -->
<section id="contactForm" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="lead">Gelen Mesajlar</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Mesaj No</th>
                            <th>Ad Soyad</th>
                            <th>Telefon</th>
                            <th>Mail</th>
                            <th>Konu</th>
                            <th>Mesaj</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $mesajlar = $db->prepare('select * from iletisim order by id desc');
                        $mesajlar->execute();

                        if ($mesajlar->rowCount()) {
                            foreach ($mesajlar as $mesajlarSatir) {
                        ?>
                                <tr>
                                    <td><?php echo $mesajlarSatir['id']; ?></td>
                                    <td><?php echo $mesajlarSatir['adiniz']; ?></td>
                                    <td><?php echo $mesajlarSatir['telefon']; ?></td>
                                    <td><?php echo $mesajlarSatir['email']; ?></td>
                                    <td><?php echo $mesajlarSatir['konu']; ?></td>
                                    <td><?php echo $mesajlarSatir['mesaj']; ?></td>
                                    <td><a href="iletisim.php?id=<?php echo $mesajlarSatir['id']; ?>" class="btn btn-danger" onclick="confirm('Mesaj Silinecek Onaylıyor musunuz?')">Sil</a></td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo '<div class="alert alert-danger">Mesajınız Bulunmamaktadır</div>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form End -->



<?php require_once('footer.php'); ?>