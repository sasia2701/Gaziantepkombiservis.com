<?php
include 'header.php';
?>

<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<section class="page-header">
    <div class="container">
        <div class="page-header__inner">
            <h2><!-- Sayfa Başlığı Buraya Gelir --></h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Anasayfa</a></li>
                <li><a href="services-classic.html">Hizmetler</a></li>
                <li class="active"><!-- Aktif Sayfa Başlığı Buraya Gelir --></li>
            </ul>
        </div>
    </div>
</section>

<section class="services-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="services-details__left">
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Hizmetler</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <!-- Menü Listesi Buraya Gelir -->
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
                        <h3 class="services-details__title"><!-- Başlık Buraya Gelir --></h3>
                        <p class="services-details__text-1"><!-- Açıklama 1 Buraya Gelir --></p>
                        <p class="services-details__text-2"><!-- Açıklama 2 Buraya Gelir --></p>
                        <h4 class="services-details__title-2">Kombi Servisimizde Sağladığımız Avantajlar</h4>
                        <p class="services-details__text-3"><!-- Avantajlar Buraya Gelir --></p>
                        <h4 class="services-details__title-3">Hizmetlerimiz</h4>
                        <p class="services-details__text-4"><!-- Hizmetler Buraya Gelir --></p>
                    </div>
                    <div class="service-details__points-box">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="service-details__points-single">
                                    <div class="service-details__points-icon">
                                        <span class="icon-heating"></span>
                                    </div>
                                    <div class="service-details__points-text">
                                        <p>Enerji maliyetlerini <br> azaltma</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="service-details__points-single">
                                    <div class="service-details__points-icon">
                                        <span class="icon-ventilating-fan"></span>
                                    </div>
                                    <div class="service-details__points-text">
                                        <p>Azaltılmış bakım <br> Uygun havalandırma</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="services-details__text-5"><!-- Genel Açıklama Buraya Gelir --></p>
                    <h3 class="services-details__title-4">Kombi Servisi Sağladığımız Markalar</h3>
                    <p class="services-details__text-6"><!-- Markalar Açıklaması Buraya Gelir --></p>
                    <ul class="list-unstyled services-details__points-two">
                        <li>Enerji tasarrufu %55-60</li>
                        <li>Hava ve su akışları sistem talebine uygun</li>
                        <li>Fan gürültüsü önemli ölçüde azaltılmıştır</li>
                        <li>Düşük kurulum maliyeti ve mekanik imalat gerektirmez</li>
                    </ul>
                    <div class="services-details__tab-box">
                        <div class="services-details__main-tab-box tabs-box">
                            <ul class="tab-buttons clearfix list-unstyled">
                                <li data-tab="#energy" class="tab-btn active-btn"><span>Artan Enerji Maliyetleri</span></li>
                                <li data-tab="#commercial" class="tab-btn"><span>Ticari Projeler</span></li>
                            </ul>
                            <div class="tabs-content">
                                <!--tab-->
                                <div class="tab active-tab" id="energy">
                                    <div class="services-details__tab-content">
                                        <p class="services-details__tab-text">Kombi sistemlerinin enerji verimliliğini artırmak ve maliyetleri azaltmak için kapsamlı bir yönetim aracı kullanıyoruz. 7/24 teknik destek ve bakım hizmetimizle kombinizin performansını en üst düzeye çıkarıyoruz.</p>
                                    </div>
                                </div>
                                <!--tab-->
                                <div class="tab" id="commercial">
                                    <div class="services-details__tab-content">
                                        <p class="services-details__tab-text">Ticari projelerde kombi sistemlerinin verimliliğini artırmak için uzman ekibimizle hizmet veriyoruz. Her markanın özel ihtiyaçlarına uygun çözümler sunuyoruz.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
            <a href="index.html" aria-label="logo image"><img src="assets/images/resources/footer logo.png" width="143" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:krtteknikk@gmail.com">krtteknikk@gmail.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+905442694736">+905442694736</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">

                <a href="https://www.facebook.com/search/top?q=krtteknik" class="fab fa-facebook-square"></a>
                <a href="https://www.instagram.com/krtteknik/" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
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
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>
