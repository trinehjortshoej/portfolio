<?php
$page = 'kontakt';
include 'include/include_header.php';
include 'include/include_navbar.php';
?>

<div class="row">
  <div class="col-sm text-center" id="kontakt_overskrift">
    <h1 class="display-4">Sig frem!</h1>
  </div>
</div>

<div class="row">


<div class="col-md-5" id="kontakt_tekst">
      <h4>Intet ville gøre mig mere glad, end en besked fra dig!</h4>
      <p>Uanset hvad du har på hjerte.</p>
      <a class="kontakt_links" href="tel:28152903"><p>+ 45 28 15 29 03</p></a>
      <a class="kontakt_links" href="mailto:trine@hjortshoej.biz"><p>trine@hjortshoej.biz</p></a>

  <form action="send_email.php" method="post">

    <div class="form-group">
      <label for="navn"></label>
      <input type="name" class="form-control" id="navn" placeholder="Dit navn">

      <label for="email"></label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Din e-mail">
      <small id="emailHelp" class="form-text text-muted">Din e-mail skal jeg have for at kunne svare på din besked.</small>

      <label for="besked"></label>
      <textarea name="besked" class="form-control" id="besked" rows="3" placeholder="Skriv din besked her"></textarea>

      <button type="submit" class="btn btn-lg btn-block mt-3" id="send_knap">Send beskeden</button>

      </div>

      </form>
    </div>


<div class="col-md-5">
  <div class="img-fluid" id="kontakt_billede">
  <p></p>
  </div>
</div>

</div><!-- row slut -->

 <?php
 include 'include/include_footer.php';
 ?>
