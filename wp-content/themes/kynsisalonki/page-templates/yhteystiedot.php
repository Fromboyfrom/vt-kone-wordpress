<?php
/*
Template Name: Yhteystiedot
*/

get_header();?>
    <div>
        <div style="width: 100%" class="top-section d-flex align-items-end">
            <div class="container">
                <div class="main-title"><?php the_title(); ?></div>
                <div class="mt-2 mb-4 divider primary"></div>
            </div>
        </div>
    </div>

    <div style="background-color: #303030; width: 100%;" class="py-5 h-100">

        <div class="container d-flex justify-content-center my-5" style="height: auto;">
            <div class="row align-items-start" style="width: 100%">

                <div class="col-xs-12 col-md-6 d-flex justify-content-center">
                    <div id="contact-map" class="flex-column d-flex justify-content-center jobs w-100">
                        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=KP%20Auto%20Oy&t=&z=15&ie=UTF8&iwloc=&output=embed"></iframe>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 d-flex justify-content-center">
                    <div class="flex-column d-flex justify-content-center contact-company-details w-100">
                        <h2 class="mb-2">KP Auto Oy</h2>
                        <div class="action-link-container mr-4 mb-3">
                            <a href="tel:0207308630"><span style="color: red" class="mdi mdi-phone"/><span class="action-link"> 020 730 8630</span></a>
                        </div>
                        <div class="action-link-container mr-4 mb-3">
                            <a href="mailto:pori@kpauto.fi"><span style="color: red" class="mdi mdi-email"/><span class="action-link"> pori@kpauto.fi</span></a>
                        </div>
                        <div class="action-link-container mb-4 mb-3">
                            <a href="https://www.google.com/maps?q=Puinnintie+12,+Pori,+Finland"><span style="color: red" class="mdi mdi-map-marker"/><span class="action-link"> Puinnintie 12, 28360 Pori</span></a>
                        </div>

                        <p>Olemme avoinna arkisin 8.00-16.00<br>Muina aikoina sopimuksen mukaan.</p>

                        <strong>Verkkolaskutusosoite</strong>
                        <p>Operaattori: Apix Messaging Oy (003723327487)<br>OVT-tunnus: 003729564758</p>

                        <strong>Skannauspalvelun osoite</strong>
                        <p>Operaattori: Apix<br>Osoite: KP Auto Oy, PL 16112, 00021 LASKUTUS</p>

                        <strong>Sähköpostiskannauksen osoite</strong>
                        <p>Operaattori: Apix<br>Osoite: 003729564758@procountor.apix.fi</p>

                    </div>
                </div>

            </div>
        </div>

        <!-- RENDERED CONTACT -->
        <div class="container d-flex justify-content-center" style="height: auto;">
            <div id="contacts-list" class="row align-items-start" style="width: 100%"></div>
        </div>

    </div>
<?php get_footer();?>