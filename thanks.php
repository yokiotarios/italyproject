<?php
$fb = $_GET['utm_source'];
if ( empty($fb) ) {
    $fb = 0;
} 
?>

<!DOCTYPE html>

<html lang="ru" class="no-js" dir="ltr">
<head>
  <title> Grazie per l’ordine | Lazard </title>

  <!-- META -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts -->

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!--[if lt IE 9]>
    <link rel="stylesheet" href="assets2/css/ie/ie8-and-down.css" />
    <script src="cdn/html5shiv.min.js"></script>
    <script src="cdn/css3-mediaqueries.min.js"></script>
  <![endif]-->

  <!-- Connect CSS files -->
  <link rel="stylesheet" href="assets2/css/fonts.css" type="text/css">
  <link rel="stylesheet" href="assets2/css/main.css" type="text/css">
  <link rel="stylesheet" href="cdn/normalize.min.css" type="text/css">
  <link rel="stylesheet" href="assets2/css/font-size.min.css" type="text/css">
  <link rel="stylesheet" href="assets2/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets2/css/media.css" type="text/css">

  <!-- Connect Jquery & Java files -->
  <script type="text/javascript" src="cdn/jquery.min.js"></script>
  <img src="https://www.facebook.com/tr?id=<?php echo $fb; ?>>&amp;ev=SubmitApplication" height="1" width="1" style="display:none"/>
</head>

<body>

  <header>
    <div class="wrap">
      <div class="flex-container">
        <a href="#" target="_blank"><img src="assets2/images/logo_s.svg" class="logo-s"></a>
        <span class="px14 dgray"> Store ufficiale online   <span class="pnl product-about"> &quot; <span class="product-name pnbd"> offerta </span>  — categoria&quot; </span></span>
      </div>
    </div>
  </header>

  <!-- end header -->

  <div class="block order">
    <div class="wrap">
      
      <div class="merged-blocks flex-container">
        <div class="left-block">

          <p class="pnbd px40"><span class="user-name"><?php echo $_GET['name']  ?></span> ,  <br> Grazie per il tuo ordine! </p>
          <p class="you-order pnbd px18 green"> Il tuo ordine № <span class="order-number"><?php echo rand(123456,951753); ?></span>  è stato accettato </p>
          <p class="pnl"> Un rappresentante del marchio ti contatterà telefonicamente  <nobr><span class="pnbd user-phone"><?php echo $_GET['phone']  ?></span></nobr>  tra pochi minuti, ti aiuterà con tutte le tue domande ed emetterà l&#039;ordine di spedizione. 
          </p>

        </div>

        <div class="right-block">

          <div class="product-block">
           
            <div class="flex-container">
              <img src="assets2/images/product.png" class="product-img">
              <div>
                <p class="pnl px14 gray-bg"> Il tuo ordine: </p>
                <p class="pnl px24"><span class="product-name pnbd"> offerta </span> <br><span class="pnl px14 product-description"> categoria </span></p>
              </div>
            </div>
            <div class="miniblocks flex-container">
              <div class="info-faq-miniblock flex-container">
                <div>
                  <nobr><img src="assets2/images/faq.svg" class="faq-icon"><a href="#faq"> domande frequenti (FAQ) </a></nobr>
                </div>
                <div>
                  <nobr><img src="assets2/images/info.svg" class="info-icon"><a href="#about"> informazioni sul produttore </a></nobr>
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
            <p class="pnl px14 lh140"><span class="px18 pnbd"> Risultato garantito al 100% </span><br> La garanzia sul risultato si applica solo in caso di conformità a tutte le raccomandazioni degli specialisti riguardo la durata e i metodi dell&#039;applicazione di  <span class="product-name"> &quot;offerta&quot; </span></p>
          </div>
        </div>

        <div class="additional-products right-block">
          <div class="additional-products flex-container">
            <img src="assets2/images/additional.svg" alt="">
            <p class="pnl px14 lh140"><span class="px18 pnbd"> Clinicamente testato </span><br> L&#039;efficacia e la sicurezza di &quot;offerta&quot; sono dimostrate da test clinici   <span class="product-name"> &quot;offerta&quot; </span>  Clinicamente testato <br><span class="pnbd px8 upp lgray2"> WCT TEST REPORT: WT-92772323432-HF-18 </span></p>
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

      <p class="pnl px32 no-padding"><span class="product-name pnbd"> &quot;offerta&quot; </span>  — è il prodotto di punta dell&#039;affidabile produttore </p>

      <div class="about-container flex-container">

        <div class="address">
          <img src="assets2/images/logo_b.svg" alt="" class="logo">
          <p class="px13 lh140"> Lazard inc.  <br> Grenzacherstrasse 124, floor 9-16  <br> 4058 Basel, Svizzera </p>
          <p class="px13 lh140"> Telefono:  <span class="about-phone"><a href="tel:+62 21 5727585"> +62 21 5727585 </a></span><br><span class="about-website"><a target="_blank" href="lazardhealthcare.com"> lazardhealthcare.com </a></span></p>
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
                <p class="px13 lh140"> La massima qualità in termini di prodotto e servizio </p>
              </div>
              <div>
                <img src="assets2/images/ico5.svg" alt="">
                <p class="px13 lh140"> 28 anni nel settore &quot;Salute e Bellezza&quot; </p>
              </div>
              <div>
                <img src="assets2/images/ico6.svg" alt="">
                <p class="px13 lh140"> Standard di produzione europei </p>
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
