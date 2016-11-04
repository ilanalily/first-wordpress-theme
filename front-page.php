<?php 
  $heroImage = get_field('hero_image');
?>

<div class="hero" style="background-image:url(<?php echo $heroImage['url']; ?>)">
    <?php $headline_logo = get_field('headline_logo'); ?>
    <img class="logo" src="<?php echo $headline_logo['url']; ?>" alt="<?php echo $headline_logo['alt']; ?>">
    <h2><?php the_field('sub_title'); ?></h2>
    <h4><?php the_field('tagline'); ?></h4>
    <a href="<?php the_field('button_link') ?>"><?php the_field('button_text') ?></a>
    <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>

</div>

<div class="header" id="welcome">
  <?php get_header();  ?>
</div>

<div class="main">
  <div class="container">
    <div class="image-box">
      <?php $welcome_image = get_field('welcome_image'); ?>
      <img src="<?php echo $welcome_image['url']; ?>" alt="<?php echo $welcome_image['alt']; ?>">
    </div>
    <div class="content-box"> <!-- get the content from the home page post - the welcome is standard, but the content box will be custom, you can write about your individual enterprise here -->
      <h3>Welcome</h3>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?> <!-- from the client, access from wysiwyg home page content box -->
       <?php endwhile;?>
    </div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php 
  $statsImage = get_field('stats_image');
?>

<div class="stats_box" style="background-image:url(<?php echo $statsImage['url']; ?>)">
  <div class="container">
    <?php if( have_rows('client_stats_repeater') ): ?>
      <ul class="stats">
      <?php while( have_rows('client_stats_repeater') ): the_row(); 
        // vars
        $stat_type = get_sub_field('stat_type');
        $stat_number = get_sub_field('stat_number');
        ?>
        <li>
          <p><?php echo $stat_type ?></p>
          <h3><?php echo $stat_number ?></h3>
        </li>
      <?php endwhile; ?>
      </ul>
    <?php endif; ?>

   </div>
</div>

<?php get_footer(); ?>