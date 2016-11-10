<?php
  $titre1 = get_sub_field("titre_1");
  $contenu1 = get_sub_field("contenu_1");
  $image1 = get_sub_field("image_1");

  $titre2 = get_sub_field("titre_2");
  $contenu2 = get_sub_field("contenu_2");
  $image2 = get_sub_field("image_2");
?>
<section class="container container_3_colonnes">
  <div class="col-md-6">
    <div class="responsiveImage">
      <img src="<?= $image1; ?>" alt="<?= $titre1; ?>" />
    </div>
    <h2><?= $titre1; ?></h2>
    <p><?= $contenu1; ?></p>
  </div>
  <div class="col-md-6">
    <div class="responsiveImage">
      <img src="<?= $image2; ?>" alt="<?= $titre2; ?>" />
    </div>
    <h2><?= $titre2; ?></h2>
    <p><?= $contenu2; ?></p>
  </div>
</section>