<?php

// Dosya isimleri ve başlıklar
$files = [
    'tum-servisler.php' => 'Tüm Servisler',
    'klima-kurulumu.php' => 'Klima Kurulumu',
    'klima-bakimi.php' => 'Klima Bakımı',
    'kombi-kurulumu.php' => 'Kombi Kurulumu',
    'kombi-bakimi.php' => 'Kombi Bakımı'
];

// Şablon içeriği
$template = <<<HTML
<?php
include 'header.php';
?>

<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Sayfa Başlığı Başlangıç-->
<section class="page-header">
    <div class="container">
        <div class="page-header__inner">
            <h2>{{title}}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Anasayfa</a></li>
                <li><a href="services-classic.html">Hizmetler</a></li>
                <li class="active">{{title}}</li>
            </ul>
        </div>
    </div>
</section>
<!--Sayfa Başlığı Bitiş-->

<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="services-details__left">
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Hizmetler</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <li><a href="tum-servisler.php" class="{{activeClass('tum-servisler.php')}}">Tüm Servisler</a></li>
                            <li><a href="klima-kurulumu.php" class="{{activeClass('klima-kurulumu.php')}}">Klima Kurulumu</a></li>
                            <li><a href="klima-bakimi.php" class="{{activeClass('klima-bakimi.php')}}">Klima Bakımı</a></li>
                            <li><a href="kombi-kurulumu.php" class="{{activeClass('kombi-kurulumu.php')}}">Kombi Kurulumu</a></li>
                            <li><a href="kombi-bakimi.php" class="{{activeClass('kombi-bakimi.php')}}">Kombi Bakımı</a></li>
                        </ul>
                    </div>

                    <div class="sidebar__single sidebar__call-box">
                        <div class="sidebar__call-bg" style="background-image: url(assets/images/backgrounds/);"></div>
                        <div class="sideber__call-content">
                            <h3 class="sideber__call-title">7/24 Kombi Servisi Alın</h3>
                            <div class="sideber__call-number">
                                <p>Çekinmeden arayın</p>
                                <h3><a href="tel:05442694736">0 544 269 47 36</a></h3>
                            </div>
                            <div class="sideber__call-button">
                                <div class="sideber__call-button-shape"></div>
                                <a href="#"><i class="icon-right-arrow"></i>Bir Sohbet Başlat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="services-details__right">
                    <div class="services-details__content-one">
                        <h3 class="services-details__title">{{title}}</h3>
                        <p class="services-details__text-1">Bu sayfada {{title}} hakkında detaylı bilgi bulabilirsiniz.</p>
                        <!-- Diğer içerikler buraya eklenebilir -->
                    </div>
                    <p class="services-details__text-5">Bu hizmetle ilgili daha fazla bilgi almak için bizimle iletişime geçin.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>


</div><!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/images/resources/footer-logo.png" width="143" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@packageName__.com">needhelp@airslv.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->
    </div><!-- /.mobile-nav__content -->
</div><!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">burada arama yapın</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Burada Arama Yapın..." />
            <button type="submit" aria-label="arama gönder" class="thm-btn">
                <i class="icon-search"></i>
            </button>
        </form>
    </div><!-- /.search-popup__content -->
</div><!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/jarallax/jarallax.min.js"></script>
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="assets/vendors/nouislider/nouislider.min.js"></script>
<script src="assets/vendors/odometer/odometer.min.js"></script>
<script src="assets/vendors/swiper/swiper.min.js"></script>
<script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="assets/vendors/wnumb/wNumb.min.js"></script>
<script src="assets/vendors/wow/wow.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="assets/vendors/countdown/countdown.min.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/vendors/vegas/vegas.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendors/timepicker/timePicker.js"></script>
<script src="assets/vendors/circleType/jquery.circleType.js"></script>
<script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
<script src="assets/vendors/polyglot-language-switcher/jquery.polyglot.language.switcher.js"></script>

<!-- Şablon JS -->
<script src="assets/js/airslv.js"></script>
</body>

</html>
HTML;

// Dosya oluşturma fonksiyonu
function createFile($filename, $title) {
    global $template;
    
    // Şablon içeriğini başlıkla değiştir
    $content = str_replace(
        ['{{title}}', '{{activeClass}}'],
        [$title, ''],
        $template
    );

    // Dosyayı oluştur
    file_put_contents($filename, $content);
}

// Dosyaları oluştur
foreach ($files as $filename => $title) {
    createFile($filename, $title);
}

echo "Dosyalar başarıyla oluşturuldu.";

?>
