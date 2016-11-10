<?php
/*
Template Name: Page de contenu flexible
*/
get_header();
?>
<?php
if( have_rows('contenu') )
{
  while ( have_rows('contenu'))
  {
    the_row();
    $layout = get_row_layout();
    include get_template_directory().'/views/flexible/'.$layout.'.php';
  }
}
?>

<?php
get_footer();
?>