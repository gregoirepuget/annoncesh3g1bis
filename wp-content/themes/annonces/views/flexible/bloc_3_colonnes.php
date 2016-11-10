<?php
  $titre1 = get_sub_field("titre_1");
  $contenu1 = get_sub_field("contenu_1");
  $image1 = get_sub_field("image_1");

  $titre2 = get_sub_field("titre_2");
  $contenu2 = get_sub_field("contenu_2");
  $image2 = get_sub_field("image_2");

  $titre3 = get_sub_field("titre_3");
  $contenu3 = get_sub_field("contenu_3");
  $image3 = get_sub_field("image_3");
?>
<section class="container container_3_colonnes">
  <div class="col-md-4">
    <div class="responsiveImage">
      <img src="<?= $image1; ?>" alt="<?= $titre1; ?>" />
    </div>
    <h2><?= $titre1; ?></h2>
    <p><?= $contenu1; ?></p>
  </div>
  <div class="col-md-4">
    <div class="responsiveImage">
      <img src="<?= $image2; ?>" alt="<?= $titre2; ?>" />
    </div>
    <h2><?= $titre2; ?></h2>
    <p><?= $contenu2; ?></p>
  </div>
  <div class="col-md-4">
    <div class="responsiveImage">
      <img src="<?= $image3; ?>" alt="<?= $titre3; ?>" />
    </div>
    <h2><?= $titre3; ?></h2>
    <p><?= $contenu3; ?></p>
  </div>  
</section>