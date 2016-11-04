<?php get_header();  ?>

<div class="main">
    <div class="container">
      <div class="page_info_header-about">
        <div class="block">
          <h2>ABOUT</h2>
          <p>lorem ipsum dolar etium milis</p>
        </div>
      </div>
      <div class="contains_absolutes clearfix">
        <div class="content-box">
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?> <!-- from the client, access from wysiwyg home page content box -->
           <?php endwhile;?>
        </div>
       <div class="image-box">
         <?php $about_image = get_field('about_page_image'); ?>
         <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>">
       </div>
      </div>
      <div class="rectangle">
        <h5>team</h5>
      </div>
      <div class="employee_gallery">
            <?php if( have_rows('employee_info') ): ?>
            
              <?php while( have_rows('employee_info') ): the_row(); 
                // vars
                $employeeImg = get_sub_field('employee_image');
                $employeeName = get_sub_field('employee_name');
                $employeeRole = get_sub_field('employee_role');
                $employeeFacebook = get_sub_field('employee_facebook');
                $employeeTwitter = get_sub_field('employee_twitter');
                ?>
                <div class="employee_item">
                  <div class="employee_item_image">
                    <img src="<?php echo $employeeImg['url']; ?>" alt="<?php echo $employeeImg['alt']; ?>">
                  </div>
                  <div class="employee_item_social">
                    <a href="<?php echo $employeeFacebook ?>" class="social_link">Facebook</a> 
                    <a href="<?php echo $employeeTwitter ?>" class="social_link">Twitter</a> 
                  </div>
                  <div class="employee_item_text">
                    <h3><?php echo $employeeName ?></h3>
                    <p><?php echo $employeeRole ?></p>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?> 
      </div>
      <div class="rectangle">
        <h5>testimonials</h5>
      </div>
      <div class="testimonies">
        <?php $testimonyImage = get_field('testimony_image'); ?>
        <img src="<?php echo $testimonyImage['url']; ?>" alt="<?php echo $testimonyImage['alt']; ?>">
        <div class="content-box">
          <p>"<?php the_field('testimony_text') ?>"</p>
          <h4><?php the_field('testimony_author') ?></h4>

        </div>
      </div>
    </div>
</div> 






</div>


  

<?php get_footer(); ?>