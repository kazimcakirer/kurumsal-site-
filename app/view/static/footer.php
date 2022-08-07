
      <!--Footer-->
      <footer class="section footer-classic section-sm">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-3 wow fadeInLeft">
              <!--Brand-->
              <h4><a class="brand" href="anasayfa" style="color:white;">Tassamo İş Danışmanlığı
                    </a></h4> <br />
              <p class="footer-classic-description offset-top-0 offset-right-25">Tassamo, dünya çapındaki küçük, orta ve uluslararası şirketlere çok çeşitli iş danışmanlığı ve danışmanlık hizmetleri sunmaktadır. Başarınızı artırmak için yenilikleri ve deneyimi kullanıyoruz.</p>
            </div>
            <div class="col-lg-3 col-sm-8 wow fadeInUp">
              <P class="footer-classic-title">iletişim bilgileri</P>
              <div class="d-block offset-top-0"><?=setting('address')?></div><a class="d-inline-block accent-link" href="mailto:<?=setting('email')?>"><?=setting('email')?></a>
              <a class="d-inline-block" href="tel:<?=setting('telephone')?>"><?=setting('telephone')?></a>
              <ul>
                <li>Pazartesi - Cuma:<span class="d-inline-block offset-left-10 text-white">8.30 - 19.00</span></li>
                <li>Cumartesi:<span class="d-inline-block offset-left-10 text-white">10.00 - 19.00</span></li>
              </ul>
            </div>
           
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".2s">
              <P class="footer-classic-title">haber bülteni</P>
              <form class="rd-mailform text-left footer-classic-subscribe-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <label class="form-label" for="subscribe-email">Email Adresin </label>
                  <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                </div>
                <div class="form-button group-sm text-center text-lg-left">
                  <button class="button button-primary button-circle" type="submit">Kaydol</button>
                </div>
              </form>
              <p>En son haberlerimiz, güncellemelerimiz ve özel tekliflerimizden ilk siz haberdar olun.</p>
            </div>
          </div>
        </div>
        <div class="container wow fadeInUp" data-wow-delay=".4s">
          <div class="footer-classic-aside">
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright -year"></span> Hakları saklıdır.</p>
            <ul class="social-links">
              <li><a class="fa fa-linkedin" href="#"></a></li>
              <li><a class="fa fa fa-twitter" href="#"></a></li>
              <li><a class="fa fa-facebook" href="#"></a></li>
              <li><a class="fa fa-instagram" href="#"></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="<?=public_url('js/core.min.js')?>"></script>
    <script src="<?=public_url('js/script.js')?>"></script>
    <!--coded by Drel-->
  </body>
</html>