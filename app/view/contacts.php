<?php require 'static/header.php'; ?>

<section class="section section-intro context-dark">
  <div class="intro-bg" style="background: url(<?php echo public_url('images/intro-bg-2.jpg'); ?>) no-repeat;background-size:cover;background-position: top center;"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 text-center">
        <h1 class="font-weight-bold wow fadeInLeft">İletişim</h1>
        <p class="intro-description wow fadeInRight">İşinizin adını koyun sonra bizimle ileşime geçin.</p>
      </div>
    </div>
  </div>
</section>
<!--Mailform-->
<section class="section section-md">
  <div class="container">
    <!--RD Mailform-->
    <div class="row justify-content-center">
      <div class="col-xl-6 col-md-8 col-12">
        <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
          <div class="form-wrap">
            <label class="form-label" for="contact-name">Ad Soyad<span class="req-symbol">*</span></label>
            <input class="form-input" id="contact-name" type="text" name="name">
          </div>
          <div class="form-wrap">
            <label class="form-label" for="contact-phone">Telefon<span class="req-symbol">*</span></label>
            <input class="form-input" id="contact-phone" type="text" name="phone">
          </div>
          <div class="form-wrap">
            <label class="form-label" for="contact-email">E-Mail<span class="req-symbol">*</span></label>
            <input class="form-input" id="contact-email" type="email" name="email">
          </div>
          <div class="form-wrap">
            <label class="form-label label-textarea" for="contact-message">Mesajınız<span class="req-symbol">*</span></label>
            <textarea class="form-input" id="contact-message" name="message"></textarea>
          </div>
          <!--Google captcha-->
          <div class="form-wrap text-left form-validation-left">
            <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
          </div>
          <div class="form-button group-sm text-center text-lg-left">
            <button class="button button-primary" type="submit">Gönder</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--Google Map-->
<section class="section">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d779923.9216834928!2d28.37392504182742!3d40.21845319168867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca0dff959df061%3A0xdcd4a04f0fab498c!2sBursa%20Uluda%C4%9F%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1609076036683!5m2!1str!2str" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

<?php require 'static/footer.php'; ?>