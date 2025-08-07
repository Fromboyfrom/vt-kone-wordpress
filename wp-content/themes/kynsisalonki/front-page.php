<?php get_header();?>

<div id="parallax-image">
    <div class="front-page-slogan-logo-area-wrapper d-flex justify-content-center align-items-center">

    </div>
</div>

<div style="width: 100%; height: auto;">
    <div class="container">
        <h1 class="h1">
        VT Kone - Pienkonevuokraus - Perävaunuvuokraus
        </h1>
        <h2>
        Toimimme pääasiassa satakunnan alueella.
        <br></br>
        Vuokraamme pienkoneet sekä perävaunut tarpeeseen kuin tarpeeseen.
         <br></br>
        Olemme tavoitettavissasi kun tarvetta työvälineille ilmaantuu, myös iltaisin ja viikonloppuisin.
        </h2>
    </div>
</div>

<div class="pl-4 pt-4 pb-4 pr-4 w-100 d-flex justify-content-center">
    <button class="btn w-100">Soita ja kysy tarjous</button>
</div>

<div class="container d-flex justify-content-center" style="width: 100%; height: auto;">
    <div class="fs-card-white">Tänne tulee koneet ja laitteet</div>
</div>

<?php dynamic_sidebar( 'pienkoneet-ja-laitteet' );?>


<div id="contact-map" class="flex-column d-flex justify-content-center jobs w-100">
    <iframe width="100%" height="500" src="https://maps.google.com/maps?q=VT%20Kone&t=&z=15&ie=UTF8&iwloc=&output=embed"></iframe>
</div>

</div>
<?php get_footer();?>