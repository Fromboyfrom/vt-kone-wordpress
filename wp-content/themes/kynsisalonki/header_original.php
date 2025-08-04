	<!DOCTYPE html>
<html>
	<head>
		<?php wp_head();?>
		<title>KP Auto - Autohuollon erikoisliike</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto:900&display=swap" rel="stylesheet"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/837645122f.js" crossorigin="anonymous"></script>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
        <!-- CSS only -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    </head>
<body <?php body_class();?> onscroll="scrolling()">

<header>
    <!-- DESKTOP MENU -->
    <<div id="desktop-header" class="d-none d-xl-block" style="background-color: rgba(0,0,0,0.3); font-size: 18px;">
        <div class="row align-items-center" style="height: 100%">

            <div class="col d-flex align-items-center justify-content-start" style="height: 100%">
                <div class="action-link-container mr-4">
                    <a href="tel:0207308630"><span style="color: red" class="mdi mdi-phone"/><span class="action-link"> 020 730 8630</span></a>
                </div>
                <div class="action-link-container mr-4">
                    <a href="mailto:pori@kpauto.fi"><span style="color: red" class="mdi mdi-email"/><span class="action-link"> pori@kpauto.fi</span></a>
                </div>
                <div class="action-link-container">
                    <a href="https://www.google.com/maps?q=Puinnintie+12,+Pori,+Finland"><span style="color: red" class="mdi mdi-map-marker"/><span class="action-link"> Puinnintie 12, 28360 Pori</span></a>
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-center wp-menu" style="height: 100%">
                <?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu' ) ); ?>
            </div>
        </div>
    </div>

    <!-- Hamburger menu button -->
    <div class="mobile-header sticky d-xl-none" id="myHeader">
        <a class="icon pull-right" onclick="openNav()">
        <i class="hamburger_bars column" style="margin-top: 25px;">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </i>
        </a>
    </div>

    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" style="margin-right: 12px; margin-top: 25px" onclick="closeNav()">
          <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
              <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
          </svg>
      </a>
      <div id="mobile_menu" class="overlay-content">
          <?php wp_nav_menu(); ?>
      </div>
    </div>

    <!-- FUNCTIONS -->

    <script>

    // Menu open in mobile, changing width
    function openNav() {
      document.getElementById("myNav").style.width = "80%";
      $("#myHeader").fadeOut();
    }
    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
      $("#myHeader").fadeIn();
    }
    // Headerin häivytys scrollissa
    function scrolling() {
        let scrollTop = document.documentElement.scrollTop;
        let height = (90-(scrollTop/6));
        let visibility = (0.3+(scrollTop/200));
        if (height > 60) {
            const headerHeight = height+'px';
            const headerBackground = 'rgba(0,0,0,'+visibility+')';
            document.getElementById("desktop-header").style.height = headerHeight;
            document.getElementById("desktop-header").style.backgroundColor = headerBackground;
        }
    }
    function goTop() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    </script>
</header>