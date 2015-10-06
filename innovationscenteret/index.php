<?php
  $class = 'is-frontpage';

  include '_header.php';
  include '_menus.php';
?>
<!--region.html.twig START-->
<div class="header" role="banner" id="home">
  <div class="header--inner">
    <h1 class="header--big">Fælles mødested og værksted for innovation i Aarhus Kommune</h1>
    <p class="header--lead">
      Vi indgår som projektpartner med kompetencer inden for design, antropologi og procesfacilitering.
    </p>
    <p class="header--sub">
      Lær os at kende og læs mere om, hvordan du kan bruge os i dit arbejde her.
    </p>
    <div class="header--button-wrapper">
      <a href="ydelser.php" class="header--button-link is-primary">Ydelser</a>
    </div>
  </div>
</div>
<!--region.html.twig END-->

<main role="main">
  <div class="itk-boxlist-column">
    <!--region.html.twig START-->
    <?php
      include 'includes/_network.php';
    ?>
    <?php
      include 'includes/_prototypes.php';
    ?>
    <?php
      include 'includes/_collaboration.php';
    ?>
    <?php
      include 'includes/_facilities.php';
    ?>
    <?php
      include 'includes/_sparring.php';
    ?>
    <?php
      include 'includes/_courses.php';
    ?>
    <!--region.html.twig END-->
  </div>
</main>
<?php
  include '_footer.php';
?>
