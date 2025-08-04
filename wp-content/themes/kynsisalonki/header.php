<!DOCTYPE html>
<html>
<head>
    <?php wp_head();?>
    <title>KP Auto - Autohuolto Porissa</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto:900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
</head>
<body onscroll="scrolling()" onload="setCopyRightText()" >
<header>
    <!--
    <div class="d-block d-xl-none">
        <a style="display: flex !important;justify-content: center;align-items: center; color: black !important" href="tel:0207308630" role="button" type="button" class="btn rounded btn-xl kaasu right-bottom"><div class="pt-1"><span class="mdi mdi-phone mobile-button"/></div></a>
    </div>
    -->

    <!-- DESKTOP MENU -->
    <div id="desktop-header-wrapper" class="d-none d-lg-block">
        <div id="desktop-header-first-row">
            <div id="desktop-header-container" class="container">
                <div class="d-flex justify-content-start">
                    <!--<img id="header-logo-bosch" src="https://kpauto.fi/wp-content/uploads/2023/02/bosch.svg">--><h1>VT KONE</h1>
                </div>
                <div class="d-flex justify-content-end w-100">
                    <div class="mr-4">
                        <a href="tel:04578841662"><span style="color: red" class="mdi mdi-phone"><span class="action-link-header"> 045 7884 1662</span></a>
                    </div>
                    <div class="mr-4">
                        <a href="mailto:pori@kprengas.fi"><span style="color: red" class="mdi mdi-email"><span class="action-link-header"> pori@kprengas.fi</span></a>
                    </div>
                    <div class="">
                        <a href="https://www.google.com/maps?q=Puinnintie+12,+Pori,+Finland"><span style="color: red" class="mdi mdi-map-marker"><span class="action-link-header"> Puinnintie 12, 28360 Pori</span></a>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
    <div class="d-lg-none mobile-header-sticky d-flex align-items-center justify-content-between px-4">

            <!--<img id="header-logo-bosch" src="https://kpauto.fi/wp-content/uploads/2023/02/bosch.svg">--><h1>VT KONE</h1>

        <a style="cursor: pointer;" onclick="openNav()">
            <div class="mdi mdi-menu" style="font-size: 40px;"></div>
        </a>
    </div>



    <div id="myNav" class="overlay">
        <a class="closebtn" style="margin-right: 12px; margin-top: 25px; cursor: pointer;" onclick="closeNav()">
            <span style="font-size: 40px" class="mdi mdi-close"></span>
        </a>
        <div id="mobile_menu" class="overlay-content">
            <div></div>
        </div>
    </div>

    <script type="text/javascript">

        function setCopyRightText() {
            document.getElementById("copyright-text").innerHTML = `© ${new Date().getFullYear()} VT Kone`;
            //addEventListenerForKLPartner()
        }
        function openNav() {
            $("#myNav").fadeIn();
            document.getElementsByTagName("BODY")[0].style.overflow = 'hidden';
        }
        function closeNav() {
            $("#myNav").fadeOut();
            document.getElementsByTagName("BODY")[0].style.overflow = 'scroll';
        }
        function scrolling() {
            let screenWidth = screen.width;
            if (screenWidth >= 1200) {
                let scrollTop = document.documentElement.scrollTop;
                let height = (100-(scrollTop/6));
                let logoHeight = (100-(scrollTop/10));
                let visibility = (0.3+(scrollTop/200));

                if (height > 60) {
                    
                    const header = document.getElementById("desktop-header-wrapper");
                    const headerFirstRow = document.getElementById("desktop-header-first-row");
                    const headerContainer = document.getElementById("desktop-header-container");

                    const boschLogo = document.getElementById("header-logo-bosch");

                    const headerHeight = height+'px';
                    const headerFirstRowHeight = document.getElementById("desktop-header-first-row");

                    // Alla koodi jos haluaa muuttaa väriä scrollin mukaan
                    //const headerBackground = 'rgba(0,0,0,'+visibility+')';
                    header.style.height = headerHeight;
                    //header.style.backgroundColor = headerBackground;
                    headerFirstRow.style.height = headerHeight;
                    headerContainer.style.height = headerHeight;
                    // Header height 100px and logo is 70px so 30px is reduced from header height
                    boschLogo.style.height = logoHeight - 30 + 'px';
                    boschLogo.style.width = logoHeight - 30 + 'px';
                }
            }
            
        }
        

        function getCurrentURL () {
            return window.location.href
        }
    </script>
</header>