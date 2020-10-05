<div id="bump"></div>
<section class="section section-header gd-navbar fixed-top" id="bumped"> <!-- Options : fixed -->
  <!-- <div class="row m-0 layer layer-white" style="background: #FFFFFF0d;"> -->
  <div class="layer-white md-hidden" >
    <div class="page-width page-width--large gd-items gd-3">
            <div class="item content-start">
              <article class="item-row item--small p-0">
              <p class="item-subtext"><span class="material-icons px-1">call</span> + 1235 2355 98</p>
              </article>
            </div>
            <div class="item item--small content-start p-0">
              <article class="item-row item--small p-0">
              <p class="item-subtext"><span class="material-icons px-1">email</span> contact@guerinetlecarves.fr</p>
              </article>
            </div>
            <div class="item item--small content-end p-0">
              <article class="item-row item--small p-0">
              <p class="item-subtext">Horaires d'ouverture : Lundi - Dimanche 8h - 17h</p>
              </article>
            </div>
    </div>
  </div>

  <div class="layer-white" style="border-bottom:1px solid #0000001a;">
    <div class="page-width page-width--large gd-navbar gd-items gd-auto-1 md-gd-1">
      <div class="item gd-items gd-2">
        <div class="item contents-center">
          <img class="item-img lozad" style="width: 120px;" data-src="<?php echo svg_url('logo.svg'); ?>">
        </div>
        <div class="item contents-center">
        <button type="button" data-target="#site-nav--wrapper" class="item-icon js-mobile-nav-toggle mobile-nav--open md-visible" aria-label="Menu">
        <span class="fas fa-bars item-icon item-icon--wrap"></button>
        </div>

      </div>
      <div class="item content-center-end md-mobile-nav">
        <div class="item-article p-0" role="navigation">
          <div class="item-list inline-list">
                <li class="item-li active">
                    <a href="<?php echo base_url(); ?>/home" class="item-link item-link--main">ACCUEIL</a>
                  </li>
                  <li class="item-li item-li--dropdown" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                    <a href="<?php echo base_url(); ?>/tile" class="item-link item-link--main">TILE</a>
                      <div class="dropdown-container border-top-3 border-primary animate__fadeInUp" data-dropdown="" style="display: none;">
                        <div class="item">
                          <ul class="item-ul">
                            <li class="item-li">
                              <a class="item-link item-link--dropdown" href="#">Création</a>
                            </li>
                            <li class="item-li">
                              <a class="item-link item-link--dropdown" href="#">Pathologie</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                  </li>
                  <li class="item-li item-li--dropdown" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                    <a href="<?php echo base_url(); ?>/carousel" class="item-link item-link--main">CAROUSEL
                      <span class="fa fa-angle-right ml-2">
                    </a>
                      <div class="dropdown-container gd-items gd-2 border-top-3 border-primary animate__fadeInUp" data-dropdown="" style="display: none;">
                        <div class="item">
                          <ul class="item-ul">
                            <li class="item-li">
                              <a class="item-link item-link--dropdown" href="#">Création</a>
                            </li>
                            <li class="item-li">
                              <a class="item-link item-link--dropdown" href="#">Pathologie</a>
                            </li>
                          </ul>
                        </div>
                        <div class="item">
                          <ul class="item-ul">
                            <li class="item-li">
                              <a class="item-link item-link--dropdown" href="#">Muse S Bundle</a>
                            </li>
                            <li class="item-li">
                              <a class="item-link item-link--dropdown" href="#">Vaisseau</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                  </li>
                  <li class="item-li"><a href="#" class="item-link item-link--main ">AVIS</a></li>
                  <!-- <li class="item-li"><a href="#" class="nav-link nav-link--main">
                    <button class=" item-button primary rounded-4 btn btn-bg">CONTACT</button></a>
                  </li> -->
              </div>
            </div>
          </div>
      <div class="item">
      </div>
        </div>
      </div>
    </div>



  <script>
    /* Toggle mobile */
    $(".js-mobile-nav-toggle").on("click", function(e) {
      var target = $(this).data("target");
      var icon = $(this).find('.item-icon--wrap');
      $(target).toggleClass("active");
      $(icon).toggleClass("fas fa-bars fas fa-times");
    });
  </script>


  <script>
    /* Dropdown */
    $(".item-li--dropdown").hover(function() {
      var event = $(this).attr('data-event');
      var dropdown = $(this).find(".dropdown-container");
      if (event == 'hover') {
        /* alert(dropdown); */
        $(dropdown).css("display", "grid");
      }
    }, function() {
      var dropdown = $(this).find(".dropdown-container");
      $(dropdown).css("display", "none");
    });
  </script>


  <script type="text/javascript">
    var navbar = document.getElementById("bumped");

    var bump = document.getElementById("bump");

    if (navbar.classList.contains('fixed-top')) {
      function resized() {
        bump.style.paddingTop = "" + navbar.offsetHeight + "px";
      }

    }
    addEventListener('load', resized);
    addEventListener('resize', resized, true);
  </script>


</section>


<!-- <section class="section-navbar">
  <header class="site-header page-width--medium">
    <div class="gd-navbar gd-1-auto-1">
      <nav class="bundle-nav middle-side" role="navigation">
        <ul class="site-nav list--inline ">
          <li class="site-nav__li"><a  href="#" class="site-nav__link site-nav__link--main">ACCUEIL</a></li>
          <li class="site-nav__li"><a href="#" class="site-nav__link site-nav__link--main">PRESTATIONS</a>
          </li>
        </ul>
      </nav>
    		<section class="bundle-logo">
          <img style="max-width: 80px;" src="./assets/img/logo-guerin.png">
    		</section>
    		<nav class="bundle-nav middle-side" role="navigation">
          <ul class="site-nav list--inline ">
            <li class="site-nav__li"><a href="#" class="site-nav__link site-nav__link--main">AVIS</a></li>
            <li class="site-nav__li"><a  href="#" class="site-nav__link site-nav__link--main">CONTACT</a></li>
          </ul>
    		</nav>

    	</div>
    </div>
  </header>
</section> -->