  <!-- Whatsapp Sticky Icon Start -->
  <!-- <a href="https://wa.link/3xtmeu" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a> -->

  <script>
    function sendPageLink() {
      // Sayfanın URL'sini al
      var pageURL = window.location.href;

      // WhatsApp mesaj metni oluştur
      var whatsappMessage = "Sayfa linki: " + pageURL;

      // WhatsApp Web açma linki oluştur
      var whatsappLink = "https://api.whatsapp.com/send?phone=+905526247035&text=" + encodeURIComponent(whatsappMessage);

      // Yeni sekmede WhatsApp Web'i aç
      window.open(whatsappLink, '_blank');
    }
  </script>

  <a href="javascript:void(0);" class="float" target="_blank" onclick="sendPageLink()">
    <i class="fa fa-whatsapp my-float"></i>
  </a>
  <!-- Whatsapp Sticky Icon End -->

  <!-- E-Bülten Üyelik Start -->
  <section id="ebulten" class="py-3 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <span class="display-4">E-Bütenimize Üye Olun</span>
        </div>
        <div class="col-md-4 my-auto">
          <form method="post">
            <div class="form-group">
              <input type="email" name="eposta" placeholder="E-Posta Adresinizi Girin" class="form-control">
            </div>
          </form>
          <?php
          if ($_POST) {
            $ebulten = $db->prepare('insert into ebulten(email) values(?)');
            $ebulten->execute(array($_POST['eposta']));
            if ($ebulten->rowCount()) {
              echo '<span class="text-white">E-Bültenimize Kaydınız Yapılmıştır.</span>';
            } else {
              echo '<span class="text-warning">Hata Oluştu. Lütfen Tekrar Deneyin.</span>';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </section>
  <!-- E-Bülten Üyelik End -->

  <!-- Footer Section Start -->
  <footer id="footer" class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="index.php"><img src="img/sembol-metal-logo-siyah-156x105.webp" alt="Sembol Metal Logo" class="w-25"></a> <br>
          <small>Sembol Tasarım, iç dekorasyon ve mobilya sektöründe 20 yıllık birkimimiz sonucunda 2008 yılında 600 m2'lik üretim alanında faaliyete başlamıştır.</small>
        </div>
        <div class="col-md-4">
          <h5>Ürün Grupları</h5>
          <small>
            <a href="">Dresuar</a> <br>
            <a href="">Sandalye</a> <br>
            <a href="">Koltuk</a> <br>
            <a href="">Masa</a> <br>
            <a href="">Sehpa</a> <br>
            <a href="">Büfe - Kitaplık</a> <br>
            <a href="">Bar Sandalyesi</a>
          </small>
        </div>
        <div class="col-md-4">
          <h5>İletişim</h5>
          <small>
            <b>Adres</b>: Yukarı Dudullu Mahallesi Aslı Sokak No:14B Ümraniye/İstanbul <br>
            <b>Telefon</b>: <a href="tel:+905526247035">0552 624 7035</a> <br>
            <b>E-Posta</b>: <a href="mailto:info@sembolmetal.com">info@sembolmetal.com</a>
          </small> <br>
          <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="https://wa.link/3xtmeu" target="_blank"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <section id="bottomFooter" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6"><small>&copy; <?php echo date('Y'); ?> Sembol Metal. Her Hakkı Saklıdır.</small></div>
        <div class="col-6 text-right"><small><a href="https://www.kaanpamukcu.com" target="blank" class="text-dark text-decoration-none">Web Tasarım</a></small></div>
      </div>
    </div>
  </section>
  <!-- Footer Section End -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  </body>

  </html>