<?php
$page = 'index';
include 'include/include_header.php';
include 'include/include_navbar.php';
?>

<div class="row">
<div class="img-fluid" id="hero_img">
  <div class="container" id="hero_text">
    <h1 class="display-4">Trine Hjortshøj</h1>
    <p class="lead">Multimediedesign studerende</p>
    <a href="cv.php" class="btn index_button">Se mit cv</a>
    <a href="#portfolio-section-anker" class="btn index_button" id="cta_arrow">Se mine projekter  <i class="fas fa-angle-double-down"></i></a>
  </div>
</div>
</div>

<div class="row">

<section id="portfolio-section">

        <div class="portfolio-section-filter" id="portfolio-section-anker">
            <a href="#" data-filter="*" class="current">All</a>
            <a href="#" data-filter=".html">HTML</a>
            <a href="#" data-filter=".css">CSS</a>
            <a href="#" data-filter=".php">PHP</a>
            <a href="#" data-filter=".js">JS</a>
            <a href="#" data-filter=".jquerymobile">jQuery Mobile</a>
        </div>

<div class="portfolio-section-image-container">

  <div class="html css php">
    <a href="//trinehjortshoej.dk/projekter/postit" target="_blank">
      <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <img class="isotope_card" src="img/projekter/postit-system.jpg" alt="">
            </div>
            <div class="flip-card-back">
              <h1>PHP & database</h1>
              <p>Post It system med log-in og database.</p>
            </div>
          </div>
        </div>
      </a>
  </div>

    <div class="html jquerymobile">
      <a href="//trinehjortshoej.dk/projekter/lokumsviden/" target="_blank">
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img class="isotope_card" src="img/projekter/lokumsviden.jpg" alt="">
              </div>
              <div class="flip-card-back">
                <h1>Jquery UI & JS</h1>
                <p>Jquery UI accordian med illustrator og js infografik</p>
              </div>
            </div>
          </div>
        </a>
    </div>

    <div class="html css js">
      <a href="//trinehjortshoej.dk/projekter/casino" target="_blank">
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img class="isotope_card" src="img/projekter/js-casino.jpg" alt="">
              </div>
              <div class="flip-card-back">
                <h1>JQuery Mobile</h1>
                <p>Web app lavet som et casino, med javascriptbaserede mini-spil</p>
              </div>
            </div>
          </div>
        </a>
    </div>

    <div class="html css">
      <a href="//trinehjortshoej.dk/casino" target="_blank">
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img class="isotope_card" src="img/js-casino.jpg" alt="">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
              </div>
            </div>
          </div>
        </a>
    </div>

    <div class="html jquerymobile">
      <a href="//trinehjortshoej.dk/casino" target="_blank">
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img class="isotope_card" src="img/js-casino.jpg" alt="">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
          </div>
        </a>
    </div>

    <div class="html wordpress">
      <a href="//trinehjortshoej.dk/casino" target="_blank">
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img class="isotope_card" src="img/js-casino.jpg" alt="">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
          </div>
        </a>
    </div>

    <div class="html css">
      <a href="//trinehjortshoej.dk/casino" target="_blank">
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img class="isotope_card" src="img/js-casino.jpg" alt="">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
          </div>
        </a>
    </div>

    <div class="php jquerymobile">
      <a href="//trinehjortshoej.dk/casino" target="_blank">
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img class="isotope_card" src="img/js-casino.jpg" alt="">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
          </div>
        </a>
    </div>

    <div class="html php">
      <a href="//trinehjortshoej.dk/casino" target="_blank">
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img class="isotope_card" src="img/js-casino.jpg" alt="">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
          </div>
        </a>
    </div>

        </div>
    </section>

    </div>

<?php
include 'include/include_footer.php';
?>
