<?php
/* 
  Template Name: Contato
 */

 get_header();
?>
<main class="w-100">
  <article id="sobre" class="bg-white py-4 px-3">
    <h2 style="font-size:76px;font-weight:900">
      <?php the_title();?>
    </h2>
    <?php the_content();?>
  </article>
</main>
<?php
get_footer();
?>