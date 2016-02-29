<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_active        = 1;
  $is_group_active  = 1;
  $is_sub_active[1] = 0;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Åbningstider</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>[Mangler tekst]</p>
    </div>
    <div class="itk-boxlist">
      <article class="itk-boxlist--item">
        <header>
          <h2 class="itk-boxlist--header"><a href="#">[Mangler tekst]</a></h2>
          <p>[Mangler tekst]</p>
          <a href="#">[Mangler tekst]</a>
        </header>
        <figure><a href="#"><img src="https://unsplash.it/500/500/?random"</a></figure>
      </article>
    </div>
    <?php include 'includes/_instagram.php'; ?>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>