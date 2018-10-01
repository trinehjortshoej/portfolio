<div class="row"> <!-- row til logo og nav -->
  <div class="d-flex justify-content-between" id="header_row_index"> <!-- kasse til placering af indhold -->

  <div class="p-2 col-2 col-sm-2 col-md-1 col-xl-1" id="logo_box">
        <a href="index.php">
          <img src="img/logo.png" class="img-fluid" alt="Logo Trine Hjortshøj">
          </a>
        </div>

  <div class="p-2 col-5 col-sm-4 col-md-4 col-lg-4 col-xl-4 " id="nav_box">
      <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item <?php if($page=='index'){echo 'active';}?>">
                <a class="nav-link" href="index.php"><p class="nav_li_p">Portfolio</p></a>
              </li>
              <li class="nav-item <?php if($page=='cv'){echo 'active';}?>">
                <a class="nav-link" href="cv.php"><p class="nav_li_p">CV</p></a>
              </li>
              <li class="nav-item <?php if($page=='kontakt'){echo 'active';}?>">
                <a class="nav-link" href="kontakt.php"><p class="nav_li_p">Kontakt</p></a>
              </li>
          </ul>
        </div>
      </nav>
    </div> <!-- navigation slut -->

  <div class="p-2 col-3" id="cta_header_box">
    <a href="kontakt.php" class="btn" id="cta_header">Vi skal da arbejde sammen!</a>
  </div>
  </div> <!-- kasse til placering af indhold slut -->
</div> <!-- Header row slut -->
