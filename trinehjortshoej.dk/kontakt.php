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
<div class="col-md" id="kontakt_tekst">
      <h4>Intet ville gøre mig mere glad, end en besked fra dig!</h4>
      <p>Uanset hvad du har på hjerte.</p>
      <p><a href="tel:28152903">+ 45 28 15 29 03</a></p>
      <p><a href="mailto:trine@hjortshoej.biz">trine@hjortshoej.biz</a></p>

  <form action="send_email.php" method="post">

    <div class="form-group">
      <label for="navn"></label>
      <input type="name" class="form-control" id="navn" placeholder="Dit navn">
    </div>

    <div class="form-group">
      <label for="email"></label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Din e-mail">
      <small id="emailHelp" class="form-text text-muted">Din e-mail skal jeg have for at kunne svare på din besked.</small>
    </div>

    <div class="form-group">
        <label for="besked"></label>
        <textarea name="besked" class="form-control" id="besked" rows="3" placeholder="Skriv din besked her"></textarea>
      </div>

    <button type="submit" class="btn btn-primary">Send beskeden</button>
  </form>

        </div>
      </div>

      <div class="col-md" id="kontakt_billede">

      </div>

    </div>


    </div>

 <?php
 include 'include/include_footer.php';
 ?>
