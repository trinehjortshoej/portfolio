<?php
$page = 'index';
include 'include/include_header.php';
include 'include/include_navbar_index.php';
?>

<div class="row">
<div class="jumbotron jumbotron-fluid" id="hero_img">
  <div class="container" id="hero_text">
    <h1 class="display-4">Trine Hjortshøj</h1>
    <p class="lead">Multimediedesign studerende</p>
    <a href="cv.php" class="btn index_button">Se mit cv</a>
    <a href="#" class="btn index_button" id="cta_arrow">Se mine projekter
    </a>
  </div>
</div>
</div>

<div class="row">

<section id="portfolio-section">

        <div class="portfolio-section-header">
            <h1>Portfolio</h1>
        </div>

        <div class="porfolio-section-text">
            <p>This here's my portfolio, which contains everything many different projects. Some are school realted,
                some are personal projects of mine.</p>
        </div>

        <div class="portfolio-section-filter">
            <a href="#" data-filter="*" class="current">All</a>
            <a href="#" data-filter=".html">HTML</a>
            <a href="#" data-filter=".css">CSS</a>
            <a href="#" data-filter=".php">PHP</a>
            <a href="#" data-filter=".wordpress">Wordpress</a>
        </div>
<div class="portfolio-section-image-container">

            <div class="html css php">
                <div class="test-project">
                    <h1>Kino.dk Redesign</h1><i class="fas fa-film"></i>
                </div>
            </div>

            <div class="wordpress php css">
                <div class="test-project">
                    <h1>Interflora Wordpress</h1><i class="fas fa-leaf"></i>
                </div>
            </div>

            <div class="php css">
                <div class="test-project">
                    <h1>Basic Calculator</h1><i class="fas fa-calculator"></i>
                </div>
            </div>

            <div class="people places">
                <div class="test-project">
                    <h1>Not assigned</h1><br><i class="fas fa-film"></i>
                </div>
            </div>

            <div class="places objects">
                <div class="test-project">
                    <h1>Not assigned</h1><br><i class="fas fa-film"></i>
                </div>
            </div>

            <div class="people food objects">
                <div class="test-project">
                    <h1>Not assigned</h1><br><i class="fas fa-film"></i>
                </div>
            </div>

            <div class="food objects">
                <div class="test-project">
                    <h1>Not assigned</h1><br><i class="fas fa-film"></i>
                </div>
            </div>

            <div class="food">
                <div class="test-project">
                    <h1>Not assigned</h1><br><i class="fas fa-film"></i>
                </div>
            </div>

            <div class="food">
                <div class="test-project">
                    <h1>Not assigned</h1><br><i class="fas fa-film"></i>
                </div>
            </div>

            <div class="food">
                <div class="test-project">
                    <h1>Not assigned</h1><br><i class="fas fa-film"></i>
                </div>
            </div>

        </div>
    </section>

    </div>

<?php
include 'include/include_footer.php';
?>
