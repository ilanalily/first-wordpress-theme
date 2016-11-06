<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="contact_info_page clearfix">
      <div class="block">
        <h2>CONTACT</h2>
        <p>lorem ipsum dolar etium milis</p>
      </div>

      <div class="contact_form">
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>          
                  <?php the_content();  ?> 
          <?php endwhile;?>
      </div>
      <div class="contact_image">
        <?php $contactImage = get_field('contact_page_image') ?>
        <img src="<?php echo $contactImage['url'] ?>" alt="<?php echo $contactImage['alt'] ?>"] ?>
        <div class="contact_info">
          <div class="address"><?php the_field('address') ?></div>
          <div class="country"><?php the_field('city_prov_country') ?></div>
          <div class="phone"><?php the_field('phone') ?></div>
          <div class="email"><?php the_field('email') ?></div>
        </div>
    </div>
   </div> 
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>

