<!DOCTYPE html>
<html class="wide wow-animation" lang="tr">
  <head>
    <title><?=setting('title')?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,700%7CPoppins:300,400,500,700,900">
    <link rel="stylesheet" href="<?=public_url('css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?=public_url('css/fonts.css')?>">
    <link rel="stylesheet" href="<?=public_url('css/style.css?v='.time())?>">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Yükleniyor...</p>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-dark">
              <div class="rd-navbar-aside">
                <ul class="list-inline navbar-contact-list">
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-phone"></span></div>
                      <div class="unit-body"><a href="tel:<?=setting('telephone')?>"><?=setting('telephone')?></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-envelope"></span></div>
                      <div class="unit-body"><a href="mailto:<?=setting('email')?>"><?=setting('email')?></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-map-marker"></span></div>
                      <div class="unit-body"><a href="contacts"><?=setting('address')?></a></div>
                    </div>
                  </li>
                </ul>
                <ul class="social-links">
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-linkedin" href="<?=setting('linkedin')?>"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="<?=setting('twitter')?>"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="<?=setting('fa-facebook')?>"></a></li>
                </ul>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand-->
                   <h4><a class="brand" href="anasayfa" style="color:white"><?=setting('title')?></a></h4>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item <?= route(0)=='anasayfa'?'active':null ?>"><a class="rd-nav-link" href="anasayfa">Anasayfa</a>
                      </li>
                      <li class="rd-nav-item <?= route(0)=='galeri'?'active':null ?>"><a class="rd-nav-link" href="galeri">Galeri</a>
                      </li>
                      <li class="rd-nav-item <?= route(0)=='hakkimizda'?'active':null ?>"><a class="rd-nav-link" href="hakkimizda">Hakkımızda</a>
                      </li>
                      <li class="rd-nav-item <?= route(0)=='iletisim'?'active':null ?>"><a class="rd-nav-link" href="iletisim">İletişim</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>