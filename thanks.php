<?php
$fb = $_GET['fb'];
if ( empty($fb) ) {
    $fb = 0;
} 
?>

<!DOCTYPE html>

<html lang="ru" class="no-js">
<head>
  <title>Thank you for your order | Lazard</title>

  <!-- META -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts -->

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!--[if lt IE 9]>
    <link rel="stylesheet" href="assets2/css/ie/ie8-and-down.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/livingston-css3-mediaqueries-js/1.0.0/css3-mediaqueries.min.js"></script>
  <![endif]-->

  <!-- Connect CSS files -->
  <link rel="stylesheet" href="assets2/css/fonts.css" type="text/css">
  <link rel="stylesheet" href="assets2/css/main.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" type="text/css">
  <link rel="stylesheet" href="assets2/css/font-size.min.css" type="text/css">
  <link rel="stylesheet" href="assets2/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets2/css/media.css" type="text/css">

  <!-- Connect Jquery & Java files -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <img src="https://www.facebook.com/tr?id=<?php echo $fb; ?>>&amp;ev=Lead" height="1" width="1" style="display:none"/>
</head>

<body>

  <header>
    <div class="wrap">
      <div class="flex-container">
        <a href="#" target="_blank"><img src="assets2/images/logo_s.svg" class="logo-s"></a>
        <span class="px14 dgray">Toko online resmi  <span class="pnl product-about">"<span class="product-name pnbd">offer</span> — category"</span></span>
      </div>
    </div>
  </header>

  <!-- end header -->

  <div class="block order">
    <div class="wrap">
      
      <div class="merged-blocks flex-container">
        <div class="left-block">

          <p class="pnbd px40"><span class="user-name"><?php echo $_GET['name']  ?></span>, <br>Thank you for your order!</p>
          <p class="you-order pnbd px18 green">Your order №<span class="order-number"><?php echo rand(123456,951753); ?></span> has been successfully accepted</p>
          <p class="pnl">The brand representative will contact you at tel. <nobr><span class="pnbd user-phone"><?php echo $_GET['phone']  ?></span></nobr> in a few minutes, consult you on all the questions and help to issue delivery.
          </p>

        </div>

        <div class="right-block">

          <div class="product-block">
           
            <div class="flex-container">
              <img src="assets2/images/product.png" class="product-img">
              <div>
                <p class="pnl px14 gray-bg">You order:</p>
                <p class="pnl px24"><span class="product-name pnbd">offer</span> <br><span class="pnl px14 product-description">category</span></p>
              </div>
            </div>
            <div class="miniblocks flex-container">
              <div class="info-faq-miniblock flex-container">
                <div>
                  <nobr><img src="assets2/images/faq.svg" class="faq-icon"><a href="#faq">frequently asked questions</a></nobr>
                </div>
                <div>
                  <nobr><img src="assets2/images/info.svg" class="info-icon"><a href="#about">information about the manufacturer</a></nobr>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="merged-blocks flex-container">
        <div class="additional-products left-block">
          <div class="flex-container">
            <img src="assets2/images/money-back.svg" alt="">
            <p class="pnl px14 lh140"><span class="px18 pnbd">100% result guarantee</span><br>Result guarantee is valid only in case of compliance with all recommendations of specialists concerning duration and application methods of <span class="product-name">"offer"</span></p>
          </div>
        </div>

        <div class="additional-products right-block">
          <div class="additional-products flex-container">
            <img src="assets2/images/additional.svg" alt="">
            <p class="pnl px14 lh140"><span class="px18 pnbd">Clinically proven</span><br>The efficiency and safety of "offer" were proved by clinical tests  <span class="product-name">"offer"</span> доказана клиническими испытаниями<br><span class="pnbd px8 upp lgray2">WCT TEST REPORT: WT-92772323432-HF-18</span></p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="wrap">
    <div class="block hr"></div>
  </div>

  <div class="block about" id="about">
    <div class="wrap">

      <p class="pnl px32 no-padding"><span class="product-name pnbd">offer</span> — is manufacturer's flagship product you can trust</p>

      <div class="about-container flex-container">

        <div class="address">
          <img src="assets2/images/logo_b.svg" alt="" class="logo">
          <p class="px13 lh140">Lazard inc. <br>Grenzacherstrasse 124, floor 9-16 <br>4058 Basel, Switzerland</p>
          <p class="px13 lh140">Phone: <span class="about-phone"><a href="tel:+62 21 5727585">+62 21 5727585</a></span><br><span class="about-website"><a target="_blank" href="lazardhealthcare.com">lazardhealthcare.com</a></span></p>
        </div>

        <div class="merged-blocks">

          <div class="foto">
            <div class="flex-container">
              <div>
                <img src="assets2/images/foto1.png" alt="">
              </div>
              <div>
                <img src="assets2/images/foto2.png" alt="">
              </div>
              <div>
                <img src="assets2/images/foto3.png" alt="">
              </div>
            </div>
          </div>
          
          <div class="advantages">
            <div class="flex-container">
              <div>
                <img src="assets2/images/ico4.svg" alt="">
                <p class="px13 lh140">The highest quality of product and service</p>
              </div>
              <div>
                <img src="assets2/images/ico5.svg" alt="">
                <p class="px13 lh140">28 yeas on "Beauty and Health" market</p>
              </div>
              <div>
                <img src="assets2/images/ico6.svg" alt="">
                <p class="px13 lh140">European standards of production</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>

  <!-- end div about -->

  <footer>

    <div class="footer-line"><img src="assets2/images/logo_s.svg" alt=""></div>

  </footer>

  <!-- end footer -->

  <script type="text/javascript" src="assets2/js/main.js"></script>

</body>
</html>
