<!--html.html.twig START-->
  <!--page.html.twig START-->
<body class="<?php echo $class; ?>">
  <div class="overlay js-menu-toggle"></div>
  <a href="/innovationscenteret" class="logo js-logo" title="Center for Innovation i Aarhus"><img src="images/assets/logo.svg"></a>
  <!--menu.html.twig START-->
  <nav class="nav js-nav">
    <div class="nav--links">
      <a href="ydelser.php" class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">Ydelser</a>
      <a href="om-os.php" class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">Om os</a>
      <a href="nyheder.php" class="nav--link<?php echo $is_active === 2 ? ' is-active' : '' ?>">Nyheder</a>
      <a href="kontakt.php" class="nav--link<?php echo $is_active === 3 ? ' is-active' : '' ?>">Kontakt</a>
      <a href="designguide.php" class="nav--link<?php echo $is_active === 4 ? ' is-active' : '' ?>">Design guide</a>
    </div>
  </nav>
  <!--menu.html.twig END-->
  <div class="nav-toggle js-menu-toggle">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <!--menu.html.twig START-->
  <nav class="hamburger-menu">
    <div class="hamburger-menu--links">
      <a href="ydelser.php" class="hamburger-menu--link">Ydelser</a>
      <a href="om-os.php" class="hamburger-menu--link">Om os</a>
      <a href="nyheder.php" class="hamburger-menu--link">Nyheder</a>
      <a href="kontakt.php" class="hamburger-menu--link">Kontakt</a>
      <a href="designguide.php" class="hamburger-menu--link">Design guide</a>
    </div>
  </nav>
  <!--menu.html.twig END-->
